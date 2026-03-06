<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /**
     * Handle the contact form submission.
     * - Rate limited: max 5 submissions per IP per 10 minutes
     * - Honeypot spam trap
     * - Input sanitization
     */
    public function send(Request $request): RedirectResponse
    {
        // ── RATE LIMITING ──
        $key = 'contact.' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()
                ->withInput()
                ->withErrors(['rate_limit' => "Too many submissions. Please try again in {$seconds} seconds."]);
        }
        RateLimiter::hit($key, 600); // 10-minute window

        // ── HONEYPOT (bot trap) ──
        if ($request->filled('website')) {
            // Silent discard — bots won't know they were caught
            return back()->with('success', 'Thank you! Your message has been received.');
        }

        // ── VALIDATION ──
        $validator = Validator::make($request->all(), [
            'name'    => ['required', 'string', 'min:2', 'max:120'],
            'email'   => ['required', 'email:rfc,dns', 'max:200'],
            'phone'   => ['nullable', 'string', 'max:20', 'regex:/^[0-9\-\+\s\(\)]+$/'],
            'subject' => ['required', 'string', 'min:3', 'max:200'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ], [
            'name.required'    => 'Please enter your full name.',
            'email.required'   => 'Please enter a valid email address.',
            'email.email'      => 'The email address format is invalid.',
            'subject.required' => 'Please enter a subject.',
            'message.required' => 'Please write a message.',
            'message.min'      => 'Your message must be at least 10 characters.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // ── SANITIZE ──
        $data = [
            'name'    => strip_tags($request->input('name')),
            'email'   => filter_var($request->input('email'), FILTER_SANITIZE_EMAIL),
            'phone'   => $request->filled('phone') ? strip_tags($request->input('phone')) : 'Not provided',
            'subject' => strip_tags($request->input('subject')),
            'message' => strip_tags($request->input('message')),
        ];

        // ── SEND MAIL ──
        // Uncomment and configure in production:
        //
        // \Mail::raw(
        //     "Name: {$data['name']}\n"
        //     . "Email: {$data['email']}\n"
        //     . "Phone: {$data['phone']}\n"
        //     . "Subject: {$data['subject']}\n\n"
        //     . "Message:\n{$data['message']}",
        //     function ($msg) use ($data) {
        //         $msg->to('ajpackages10@gmail.com', 'AJ Packages')
        //             ->subject('Contact Form: ' . $data['subject'])
        //             ->replyTo($data['email'], $data['name']);
        //     }
        // );

        return back()->with('success', 'Thank you, ' . e($data['name']) . '! Your message has been received. We will contact you within 24 hours.');
    }

    /**
     * Handle the quote request form.
     */
    public function sendQuote(Request $request): RedirectResponse
    {
        // ── RATE LIMITING ──
        $key = 'quote.' . $request->ip();
        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds = RateLimiter::availableIn($key);
            return back()
                ->withInput()
                ->withErrors(['rate_limit' => "Too many submissions. Please try again in {$seconds} seconds."]);
        }
        RateLimiter::hit($key, 600);

        // ── HONEYPOT ──
        if ($request->filled('website')) {
            return back()->with('success', 'Quote request submitted! We will reach out within 24 hours.');
        }

        // ── VALIDATION ──
        $validator = Validator::make($request->all(), [
            'name'         => ['required', 'string', 'min:2', 'max:120'],
            'company'      => ['required', 'string', 'min:2', 'max:200'],
            'email'        => ['required', 'email:rfc', 'max:200'],
            'phone'        => ['required', 'string', 'max:20', 'regex:/^[0-9\-\+\s\(\)]+$/'],
            'product_type' => ['required', 'string', 'max:100'],
            'quantity'     => ['required', 'string', 'max:100'],
            'dimensions'   => ['nullable', 'string', 'max:200'],
            'ply'          => ['required', 'string', 'max:50'],
            'message'      => ['nullable', 'string', 'max:2000'],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        return back()->with('success', 'Quote request submitted successfully! Our team will prepare a custom quote and contact you within 24 hours.');
    }
}
