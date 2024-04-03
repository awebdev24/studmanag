<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Add your logic here to fetch data or perform any other operations
        // Return the view for the main dashboard page.
        return view('index.review');
    }
}
