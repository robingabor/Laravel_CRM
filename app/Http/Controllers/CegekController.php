<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ceg;
use Illuminate\Support\Facades\Gate;

class CegekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //select * from table cegek        
        $cegek = Ceg::all();

        // dd($cegek);

        return view('cegek.cegek',[
            'cegek' => $cegek
        ]);

        // we need to check if the Gate allows our user  or not
        if(Gate::allows('admin-only', auth()->user())){
            return view('cegek.cegek',[
                'cegek' => $cegek
            ]);
        }else{
            return view('cegek.isNotAdmin',[
                'cegek' => $cegek
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cegek.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // method we can use on request : guessExtension(); getMimeType(); store(); asStrore(); storePublicly(); move(); getClientOriginalName();getSize(); getError(); isValid();
        $test = $request->file('logo')->getSize();
        

        $request->validate([
            'logo' => 'required|mimes:jpg,png,jpeg|max:5048',
            'nev' => 'required',
            'email' => 'email'
        ]);
        // get a new name for our image
        $newImageName = time() . '-' . $request->nev . '.'. $request->logo->extension();

        // lets store the image from the current tmp to our 
        $request->logo->move(public_path('images'),$newImageName);
            
           $ceg = Ceg::create([
            'nev' =>$request->input('nev'),
            'email' =>$request->input('email'),
            'logo' =>$newImageName,
            'website'=>$request->input('website')
            ]);

        return redirect('/cegek');    
       
   }
   
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        // dd($id);
        $ceg = Ceg::find($id);

        return view('cegek.show')->with('ceg',$ceg);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ceg = Ceg::find($id)->first();

        // go to our edit view with the form
        return view('cegek.edit',[
            'ceg' =>$ceg
        ]);
        
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
        
        // get a new name for our image
        $newImageName = time() . '-' . $request->nev . '.'. $request->logo->extension();

        // lets store the image from the current tmp to our 
        $request->logo->move(public_path('images'),$newImageName);        

        $ceg = Ceg::where('id',$id)
            ->update([
                'nev' =>$request->input('nev'),
                'email' =>$request->input('email'),
                'logo' =>$newImageName,
                'website'=>$request->input('website')
        ]);

        return redirect('/cegek');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find our ceg to delete
        $ceg = Ceg::find($id)->first();

        $ceg->delete();

        return redirect('/cegek');
    }
}
