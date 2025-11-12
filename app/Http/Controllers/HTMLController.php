<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // For external fetches

class HTMLController extends Controller
{
    public function showDynamicContent()
    {
        // Example: Fetch dynamic HTML from an external API or generate it
        $response = Http::get('https://example.com/dynamic-html'); // Or pull from DB
        $dynamicHtml = $response->body(); // Assume this is a string of HTML

        // Pass to view
        return view('dynamic', ['htmlContent' => $dynamicHtml]);
    }
}