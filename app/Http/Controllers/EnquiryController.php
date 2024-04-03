<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Enquiry;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiries=Enquiry::all();
         // Add your logic here to fetch data or perform any other operations
        // Return the view for the main dashboard page
        return view('index.enquiry');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'type' => 'required|string|max:255',
            'contact_message' => 'nullable|string',
        ]);

      
        $enquiries = new Enquiry;
        $enquiries->username = $validatedData['username'];
        $enquiries->email = $validatedData['email'];
        $enquiries->phone = $validatedData['phone'];
        $enquiries->type = $validatedData['type'];
        $enquiries->contact_message = $validatedData['contact_message'];
        $enquiries->save();

        // Redirect back or wherever you want
        return redirect('enquiry.index')->back()->with('success', 'Inquiry submitted successfully!');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
  {
    $post = Enquiry::find($id);
    $post->delete();
    return redirect()->route('enquiry.index')
      ->with('success', 'Post deleted successfully');
  }
}
