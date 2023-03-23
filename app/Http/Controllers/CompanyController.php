<?php

namespace App\Http\Controllers;

use App\Models\company;
use App\Models\Offre_condidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{


    public function index()
    {
        $company= company::all();
        return view('offres.index', compact('company'));
    }

    public function create()
    {
        return view('offres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomCompany' => 'required',
            'adresse' => 'required',
            'domaine' => 'required',
            'nbrPoste' => 'required',
            'nomPoste' => 'required',
            'description' => 'required',
            'logo' => 'required|mimes:jpg,png,jped,webp|max:5048',
        ]);

        $logo_ex=$request->logo->getClientOriginalExtension();
        $logo_name=time().'.'.$logo_ex;  
        $path='images/offres';
        $request->logo->move($path,$logo_name);
        
        company::create([
            "nomCompany" => $request->input('nomCompany'),
            "adresse" => $request->input('adresse'),
            "domaine" => $request->input('domaine'),
            "nbrPoste" => $request->input('nbrPoste'),
            "nomPoste" => $request->input('nomPoste'),
            "description" => $request->input('description'),
            "logo" => $logo_name,
            "user_id" => auth()->user()->id
        ]);
        return redirect('/offre');
    }

    
    public function show($company)
    {
        return view('offres.show')->with('offre',company::where('nomCompany',$company)->first());
    }

    
    public function edit($id)
    {
        $offre=company::where('id',$id)->first();
        $logo=asset("images/".$offre->logo);
        return view('offres.edit',compact('offre','logo'));
    }

    public function update(Request $request,$company)
    {
        $request->validate([
            'nomCompany' => 'required',
            'adresse' => 'required',
            'domaine' => 'required',
            'nbrPoste' => 'required',
            'nomPoste' => 'required',
            'description' => 'required',
            'logo' => 'mimes:jpg,png,jped,webp|max:5048',
        ]);

        $company= company::find($company);
        if($request->hasFile('logo')){
            $logo_ex=$request->logo->getClientOriginalExtension();
            $logo_name=time().'.'.$logo_ex;  
            $path='images/offres';
            $request->logo->move($path,$logo_name);
            $company-> logo = $logo_name;
        }
        
        $company-> nomCompany = $request->input('nomCompany');
        $company -> adresse = $request->input('adresse');
        $company -> domaine = $request->input('domaine');
        $company->nbrPoste = $request->input('nbrPoste');
        $company-> nomPoste = $request->input('nomPoste');
        $company-> description = $request->input('description');
        
        $company->save();

        return redirect('/offre');

    }

    
    public function destroy($id)
    {
        $company = company::find($id);
        $company->delete();
        return  redirect('/offre');
    }

    public function search(Request $request)
    {
        $request->validate([
            'q' => 'required',
        ]);
        $q=$request->q;
        $filter= company::where('nomCompany','like','%'.$q.'%')
                ->orWhere('domaine','like',"%".$q.'%')
                ->orWhere('description','like',"%".$q.'%')
                ->orWhere('nomPoste','like',"%".$q.'%')
                ->get();
        if($filter->count()){
            return view('offres.index')->with([
                'company' => $filter
            ]); 
        }else{
            return redirect('/offre')->with([
                'status' => "Pas du resultat"
            ]);
        }
    }

    public function nbrPostuler($id){
        $company =DB::table('offre_condidats as o')
        ->join('users as u', 'o.user_id', '=', 'u.id')
        ->select('o.*', 'u.*')->where('company_id',$id)
        ->get();
        return view('offres.nbrPostuler',['data'=>$company]);
    }
}
