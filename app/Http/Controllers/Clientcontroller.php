<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class Clientcontroller extends Controller
{
    public function http()
    {
        // Define the API endpoint
        $apiUrl = 'https://65f41bb4f54db27bc02079d9.mockapi.io/Faculty';

        // Make a GET request to the API
        $response = Http::get($apiUrl);

        // Check if the request was successful
        if ($response->successful()) {
            // Decode the JSON response into an array
            $data = $response->json();

            // Pass the data to a view or return as JSON
            return view('client', ['data' => $data]);
        }

        // Handle errors
        return response()->json([
            'error' => 'Failed to fetch data from API.',
            'status' => $response->status()
        ], $response->status());
    }
}
