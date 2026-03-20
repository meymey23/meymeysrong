<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class ListingController extends Controller
// {
//     //
// }

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function show($id)
    {
        // For now, hardcode the listing details
        $listing = [
            'title' => 'Cozy Villa',
            'location' => 'Claraburgh, Tunisia',
            'host' => 'Test User',
            'bedrooms' => 6,
            'bathrooms' => 2,
            'price' => 298,
            'description' => 'A beautiful villa with spacious rooms and modern amenities.',
            'images' => [
                'main' => 'main.jpg',
                'bedroom' => 'bedroom.jpg',
                'kitchen' => 'kitchen.jpg',
                'bathroom' => 'bathroom.jpg',
                'view' => 'view.jpg',
            ]
        ];

        return view('listing.show', compact('listing'));
    }
}
