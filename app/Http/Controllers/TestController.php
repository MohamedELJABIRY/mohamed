<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id){
            $company = DB::table('condidats as c')
            ->join('users as u', 'c.user_id', '=', 'u.id')
            ->join('offre_condidats as o', 'u.id', '=', 'o.user_id')
            ->join('companies as cp', 'o.company_id', '=', 'cp.id')
            ->where('company_id',$id)
            ->select('cp.company_id')
            ->get();
            dd($company);
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
    public function destroy(string $id)
    {
        //
    }
}
