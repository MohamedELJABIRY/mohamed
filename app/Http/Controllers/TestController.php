<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\company;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $company = DB::table('users as u')
        ->select('cp.*')
        ->join('offre_condidats as o', 'u.id', '=', 'o.user_id')
        ->join('companies as cp', 'o.company_id', '=', 'cp.id')
        ->where('o.user_id',$id)
        ->get();
        return view('condidat.offerPostule' ,  compact('company') ) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(Request $request)
    {
        $select=$request->select;
        $inp=$request->inp;
        dd($request);
        $company=company::where('ville','like','%'.$select.'%')
                ->orWhere('domaine','like',"%".$inp.'%')
                ->get();

                if($company->count()){
                    return view('/pages/home',compact('company')); 
                }
    }
}
