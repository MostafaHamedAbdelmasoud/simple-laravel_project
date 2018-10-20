<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $films=Film::get();
        //dd($films);
        return view('films.index',compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('films.create');
    }

    /**
     * Store a newly created resource in storage.
      *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=\Validator::make($request->all(),
                                   [
                'filmname'=>'required|max:191|min:3',
                'filmdescription'=>'required|max:1000|min:5'
               ,'image'=>'required|image|max:10240|mimes:png'                       
                                   ]);
        
        
        
        if ($validator->fails()) {
            return redirect('films/create')
                        ->withErrors($validator)
                        ->withInput();
        }

      // if i want use this code, i must out the image required| upward.
        $image=$request->file('image');
            $imageName = time().$image->getClientOriginalName();
            $img = \Image::make($image->getRealPath());
            $img->resize(350, 350);
            $img->save(public_path().'/assets/images/films/'.$imageName);
           // $newFilm->img=$imageName;

        
        
        
        //
        $film=new film();
        $film->filmname=$request->filmname;
        $film->filmdescription=$request->filmdescription;
        $film->image=$imageName;
        $film->save();
        
        return view('films.show',compact('film'));
        
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
        $film=Film::find($id);
        
        return view('films.show',compact('film'));
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
        $film=Film::find($id);
        
        return view('films.edit',compact('film'));
        
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
        $film=Film::find($id);
        $film->filmname=$request->filmname;
        $film->filmdescription=$request->filmdescription;
		
		 $image=$request->file('image');
            $imageName = time().$image->getClientOriginalName();
            $img = \Image::make($image->getRealPath());
            $img->resize(350, 350);
            $img->save(public_path().'/assets/images/films/'.$imageName);
		$film->image = $imageName;
		
        $film->save();
        
        return redirect('/films/show/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
    public function destroy($id)
    {
        //
        //
        Film::destroy($id);
        
        return redirect('/films');
        
    }

	
	public function addse()
    {
         
        return view('films.addse');
    }
	
	
	public function search(Request $request)
    {
        
        $keyword=$request->keyword;
		$films=Film::where('filmname','like','%'.$keyword.'%' , 'or','filmdescription' ,'like','%'.$keyword.'%' )->get();
        
        return view('films.search',compact('films'));
        
    }
	
	
	
	
	
	
	
	
	
}
