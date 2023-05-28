<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gig;
use Illuminate\Validation\Rule;

class GigController extends Controller
{
    //show all listing
    public function index()
    {
        $tag = request()->tag;
        return view('gigs.index', [
            'heading' => 'Latest Gigs',
            // 'gigs' => Gig::all()
            // 'gigs'=>Gig::latest()->get()
            // 'gigs' - a collection of Gig models that represent the latest gigs. 
            // The latest() method is used to sort the gigs in reverse chronological order by their creation date. 
            // The filter() method is used to filter the gigs based on the provided tag. 
            // This assumes that the Gig model has a filter() method that can be used to filter the gigs based on a given tag. 
            // Finally,
            //  get() is used to retrieve the filtered gigs from the database.
            // 'gigs' => Gig::latest()->filter(request(['tag','search']))->get()
            'gigs' => Gig::latest()->filter(request(['tag', 'search']))->paginate(5)
            //you can use paginate or simplePaginate
        ]);
    }
    //show all listings
    public function show(Gig $gig)
    {
        return view('gigs.show', [
            'gig' => $gig
        ]);

    }
    public function create_gig()
    {
        return view('gigs.create_gig');
    }
    public function store(Request $req)
    {
        $formField = $req->validate([
            'company' => ['required', Rule::unique('gigs', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'title' => 'required'
        ]);
        Gig::create($formField);
        //    Session::flash('message','Gig Created');

        return redirect('/')->with('message', 'Gig Created Successfully!');
    }

    public function update(Gig $gig)
    {
        // we pass our current gig into the template to be edited
        // return view('gigs.update',['gig'=>$gig]);
    }

    public function save_update(Request $req, Gig $gig)
    {
        $formField = $req->validate([
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
            'title' => 'required'
        ]);
        //    call theGig model to update our gotten data
        $gig->update($formField);
        return back()->with('message', 'listing updated successfully');
    }
}