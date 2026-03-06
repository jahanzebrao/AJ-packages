<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private function getProducts(): array
    {
        return [
            [
                'slug'        => 'corrugated-liner',
                'name'        => 'Corrugated Liner',
                'tagline'     => 'Industrial-Grade Strength',
                'description' => 'Our corrugated liner is engineered for the most demanding industrial and export packaging environments. Built to withstand heavy loads and long-distance transit, these liners form the backbone of reliable corrugated packaging.',
                'features'    => ['Heavy-duty industrial grade', 'Export-ready specifications', 'Custom GSM available', 'Moisture-resistant options'],
                'uses'        => ['Industrial goods', 'Export cargo', 'Heavy machinery parts', 'Bulk commodities'],
                'icon'        => '📦',
                'image'       => 'products/corrugated-liner.jpg',
                'gallery'     => ['products/corrugated-liner.jpg'],
                'plies'       => '3, 5, or 7 Ply',
            ],
            [
                'slug'        => 'brown-white-cartons',
                'name'        => 'Brown & White Cartons',
                'tagline'     => 'Premium Finish, Superior Protection',
                'description' => 'Available in natural brown kraft and clean white board finish, our cartons deliver both aesthetic appeal and structural integrity. Perfect for brands that demand quality packaging that reflects their identity.',
                'features'    => ['Natural brown kraft finish', 'White board finish available', 'Print-ready surface', 'Custom sizes welcome'],
                'uses'        => ['Garments & textiles', 'Consumer goods', 'Retail packaging', 'Brand packaging'],
                'icon'        => '🗃️',
                'image'       => 'products/cartons.jpg',
                'gallery'     => ['products/cartons.jpg'],
                'plies'       => '3 or 5 Ply',
            ],
            [
                'slug'        => 'die-cut-boxes',
                'name'        => 'Die-Cut Boxes',
                'tagline'     => 'Precision-Crafted Custom Shapes',
                'description' => 'Our die-cut boxes are manufactured with precision machinery, enabling custom shapes and configurations for retail, pharmaceutical, and specialty packaging. Every cut is exact, every fold is clean.',
                'features'    => ['Precision die-cutting', 'Custom shape capability', 'Pharma-grade options', 'Retail-ready finishes'],
                'uses'        => ['Pharmaceuticals', 'Retail products', 'Cosmetics', 'Electronics'],
                'icon'        => '✂️',
                'image'       => 'products/die-cut.jpg',
                'gallery'     => ['products/die-cut.jpg'],
                'plies'       => '3 or 5 Ply',
            ],
            [
                'slug'        => 'display-cartons',
                'name'        => 'Display Cartons',
                'tagline'     => 'Shelf Presence That Sells',
                'description' => 'Eye-catching display cartons designed to maximize shelf presence and retail visibility. These cartons are built not just to contain — but to attract, engage, and convert customers at the point of sale.',
                'features'    => ['High-visibility design', 'Retail shelf optimized', 'Flexo print-ready', 'Custom branding'],
                'uses'        => ['Retail displays', 'FMCG products', 'Point-of-sale units', 'Supermarket shelves'],
                'icon'        => '🏪',
                'image'       => 'products/display.jpg',
                'gallery'     => ['products/display.jpg'],
                'plies'       => '3 Ply',
            ],
            [
                'slug'        => 'master-cartons',
                'name'        => 'Master Cartons',
                'tagline'     => 'Bulk Shipping Redefined',
                'description' => 'Robust outer packaging built for bulk shipments and heavy exports. Our master cartons are engineered to handle the rigors of warehousing and long-haul logistics without compromise.',
                'features'    => ['Heavy export-grade build', 'Stacking strength tested', 'Moisture-resistant options', 'Custom dimensions'],
                'uses'        => ['Bulk exports', 'Warehousing', 'Heavy goods', 'Machinery parts'],
                'icon'        => '🏭',
                'image'       => 'products/master-cartons.jpg',
                'gallery'     => ['products/master-cartons.jpg'],
                'plies'       => '5 or 7 Ply',
            ],
            [
                'slug'        => 'corrugated-sheets',
                'name'        => 'Corrugated Sheets',
                'tagline'     => 'Versatile Protective Layering',
                'description' => 'Flat corrugated sheets and layer pads for wrapping and protective packaging. Used across industries as interleaving, void fill, and surface protection, our sheets provide reliable cushioning.',
                'features'    => ['Flat sheet format', 'Layer pad applications', 'Custom cut sizes', 'Bulk availability'],
                'uses'        => ['Wrapping & cushioning', 'Layer separation', 'Surface protection', 'Fragile goods packing'],
                'icon'        => '📄',
                'image'       => 'products/sheets.jpg',
                'gallery'     => ['products/sheets.jpg'],
                'plies'       => '3, 5, or 7 Ply',
            ],
        ];
    }

    public function index()
    {
        $products = $this->getProducts();

        $plyTypes = [
            ['type' => '3 Ply', 'layers' => '1 flute + 2 liners', 'strength' => 'Light Duty',  'color' => 'green',  'uses' => 'Pharma, bakery, e-commerce'],
            ['type' => '5 Ply', 'layers' => '2 flutes + 3 liners', 'strength' => 'Medium Duty', 'color' => 'yellow', 'uses' => 'Food, beverages, electronics'],
            ['type' => '7 Ply', 'layers' => '3 flutes + 4 liners', 'strength' => 'Heavy Duty',  'color' => 'red',    'uses' => 'Bulk, machinery, oil drums, exports'],
        ];

        return view('pages.products', compact('products', 'plyTypes'));
    }

    public function show(string $product)
    {
        $products = $this->getProducts();
        $found = collect($products)->firstWhere('slug', $product);

        if (! $found) {
            abort(404);
        }

        $related = collect($products)->where('slug', '!=', $product)->take(3)->values()->all();

        return view('pages.product-detail', ['product' => $found, 'related' => $related]);
    }
}
