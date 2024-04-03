<?php

namespace App\Http\Controllers;

use App\Models\Ratings;
use Illuminate\Http\Request;

class ReviewdeleteController extends Controller
{
    
    public function delete($id)
    {
        $ratings = ratings::findOrFail($id);
        $ratings->delete();

        return back()->with('status', 'Enquiry deleted successfully.');
    }
}
