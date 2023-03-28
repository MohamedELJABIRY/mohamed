<?php

namespace App\Http\Controllers;

use App\Models\Condidat;
use Illuminate\Http\Request;

class CondidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $condidat=Condidat::all();
            
            return view('condidat.index',compact('condidat'));

        }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('condidat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'specialite' => 'required',
            'competence' => 'required', 
            'domaine' => 'required',
            'cv'=> 'required|mimes:doc,docx,xlx,csv,pdf|max:5048',
            'logo' => 'required|mimes:jpg,png,jped,webp|max:5048',
        ]);

        $logo_ex=$request->logo->getClientOriginalExtension();
        $logo_name=time().'.'.$logo_ex;  
        $path='images/offres';
        $request->logo->move($path,$logo_name);
        
      
        $file_name = time().'.'.$request->cv->extension(); 
        $request->cv->move(public_path('/images/offres'), $file_name);

        Condidat::create([
            "specialite" => $request->input('specialite'),
            "competence" => $request->input('competence'),
            "domaine" => $request->input('domaine'),
            "cv" => $file_name,
            "logo" => $logo_name,
            "user_id" => auth()->user()->id
        ]);
        return redirect('/condidat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Condidat $condidat)
    {
        return view('condidat.show')->with('condidat',$condidat);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $condidat=Condidat::where('id',$id)->first();
        $logo=asset("images/condidats".$condidat->logo);
        return view('condidat.edit',compact('condidat','logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Condidat $condidat)
    {
        $request->validate([
            'specialite' => 'required',
            'competence' => 'required', 
            'domaine' => 'required',

    

            // 'cv' => 'required|mimes:doc,docx,xlx,csv,pdf|max:5048',
            // 'logo' => 'required|mimes:jpg,png,jped,webp|max:5048',
        ]);
        $condidat= Condidat::find($condidat);
        if($request->hasFile('logo')){
            $logo_ex=$request->logo->getClientOriginalExtension();
            $logo_name=time().'.'.$logo_ex;  
            $path='images/condidats';
            $request->logo->move($path,$logo_name);
            $condidat-> logo = $logo_name;
        };

        if ($request->hasFile('cv')) {
            $file_name = time().'.'.$request->cv->extension(); 
            $request->cv->move(public_path('images/offres'), $file_name);
            $condidat-> cv = $file_name;
        };
        
        $condidat-> specialite = $request->input('specialite');
        $condidat -> competence = $request->input('competence');
        $condidat -> domaine = $request->input('domaine');
        $condidat->save();

        return redirect('/condidat');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $condidat = Condidat::find($id);
        $condidat->delete();
        return  redirect('/condidat');
    }

    public function searchC(Request $request)
    {
        $request->validate([
            'q' => 'required',
        ]);
        $q=$request->q;
        $filter= Condidat::where('domaine','like','%'.$q.'%')
                ->orWhere('specialite', 'like','%'.$q.'%' )
                ->get();
                
        if($filter->count()){
            return view('condidat.index')->with([
                'condidat' => $filter
            ]); 
        }else{
            return redirect('/condidat')->with([
                'status' => "Pas du resultat"
            ]);
        }
    }
}
