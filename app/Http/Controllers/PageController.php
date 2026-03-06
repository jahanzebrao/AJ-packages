<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $stats = [
            ['number' => '10+', 'label' => 'Years Experience'],
            ['number' => '180T', 'label' => 'Monthly Capacity'],
            ['number' => '45+', 'label' => 'Skilled Team'],
            ['number' => '14+', 'label' => 'Valued Clients'],
        ];

        $products = [
            [
                'name' => 'Corrugated Liner',
                'description' => 'Heavy-duty corrugated liner for industrial and export packaging needs.',
                'icon' => '📦',
                'image' => 'products/corrugated-liner.jpg',
            ],
            [
                'name' => 'Brown & White Cartons',
                'description' => 'Premium cartons in natural brown kraft and clean white board finish.',
                'icon' => '🗃️',
                'image' => 'products/cartons.jpg',
            ],
            [
                'name' => 'Die-Cut Boxes',
                'description' => 'Precision die-cut packaging in custom shapes for retail and pharma.',
                'icon' => '✂️',
                'image' => 'products/die-cut.jpg',
            ],
            [
                'name' => 'Display Cartons',
                'description' => 'Eye-catching display cartons that boost shelf presence and retail visibility.',
                'icon' => '🏪',
                'image' => 'products/display.jpg',
            ],
        ];

        $clients = [
            'Gul Ahmed Textile Mills Ltd',
            'Mustaqim Dyeing & Printing Industries (Pvt) Ltd',
            'Umar Garments',
            'Mount Foji Textile (Pvt) Ltd',
            'Naveena Industries Limited',
            'Anwartex Industries (Pvt) Ltd',
            'Zahid Abid & Co.',
            'Global Apparels',
            'International Textile (Pvt) Ltd',
            'Standard Colours & Chemicals',
            'National Pipe (Pvt) Ltd',
            'MR Industries',
            'Nextgen Apparels',
            'JSQ Apparels',
        ];

        return view('pages.home', compact('stats', 'products', 'clients'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function infrastructure()
    {
        $machines = [
            ['name' => 'Corrugation Machine', 'spec' => '48" inch'],
            ['name' => 'Die Machine', 'spec' => '45/65 & 35/45'],
            ['name' => 'Flexo Printing', 'spec' => '2 Colour'],
            ['name' => 'Pasting Machine', 'spec' => 'Size 85" x 2'],
            ['name' => 'Scoring Machine', 'spec' => '65" & 45"'],
            ['name' => 'Thin Blade / Knifing', 'spec' => 'Sheet Cutter'],
            ['name' => 'Staple Machine', 'spec' => 'Heavy Duty'],
            ['name' => 'Diesel Generator', 'spec' => 'Backup Power'],
            ['name' => 'Rotary Slotter', 'spec' => 'Industrial Grade'],
        ];

        return view('pages.infrastructure', compact('machines'));
    }

    public function clients()
    {
        $clients = [
            ['name' => 'Gul Ahmed Textile Mills Ltd', 'featured' => true],
            ['name' => 'Mustaqim Dyeing & Printing Industries (Pvt) Ltd', 'featured' => true],
            ['name' => 'Umar Garments', 'featured' => false],
            ['name' => 'Mount Foji Textile (Pvt) Ltd', 'featured' => false],
            ['name' => 'Naveena Industries Limited', 'featured' => false],
            ['name' => 'Anwartex Industries (Pvt) Ltd', 'featured' => false],
            ['name' => 'Zahid Abid & Co.', 'featured' => false],
            ['name' => 'Global Apparels', 'featured' => false],
            ['name' => 'International Textile (Pvt) Ltd', 'featured' => false],
            ['name' => 'Standard Colours & Chemicals', 'featured' => false],
            ['name' => 'National Pipe (Pvt) Ltd', 'featured' => false],
            ['name' => 'MR Industries', 'featured' => false],
            ['name' => 'Nextgen Apparels', 'featured' => false],
            ['name' => 'JSQ Apparels', 'featured' => false],
        ];

        return view('pages.clients', compact('clients'));
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function quote()
    {
        return view('pages.quote');
    }
}
