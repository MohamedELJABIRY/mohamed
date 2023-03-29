<?php

namespace App\Http\Controllers;

use App\Models\Offre_condidat;
use App\Models\company;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class OffreCondidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
        $cc=new Offre_condidat();
        $cc->user_id= $request -> input("id_us") ;
        $cc->company_id=  $request -> input("id_of") ;
        $cc->save();
        return back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Offre_condidat $offre_condidat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offre_condidat $offre_condidat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offre_condidat $offre_condidat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request) 
    {    
        $id_o =  $request -> input('id_u');
        $id_u =  $request -> input('id_o');
        DB::table('offre_condidats')->where('user_id', $id_o ) 
        ->where( 'company_id',$id_u)
        ->delete();
        return  back() ;  
    }



    


}
