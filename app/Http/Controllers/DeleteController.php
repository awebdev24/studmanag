<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use App\Models\User;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($id)
    {
        $enquiries = Enquiry::findOrFail($id);
        $enquiries->delete();

        return back()->with('status', 'Enquiry deleted successfully.');
    }

}
