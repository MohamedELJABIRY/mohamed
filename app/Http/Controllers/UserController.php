<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\company;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        return view('espace.profile.index',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function Count()
    {
        $count = DB::table('companies')->count();
        // dd($count);
        return view('pages.home',compact('count'));
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
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
       $v=DB::table('users')->where('id', auth()->user()->id)
                    ->update([
                        'email' => $request->email,
                        'name' => $request->name,
                        'ville' => $request->ville,
                        'tel' => $request->tel,
                    ]);
                return  redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function search(Request $request)
    {
        $search=$request->search;
        // dd($search);
        $filter= company::where('ville','like','%'.$search.'%')->get();
                // ->orWhere('domaine','like',"%".$search.'%')
                // ->get();
        //    return (count($filter));
        if($filter->count()){
            return view('/pages/affiche',compact('filter'));
        }else{
            return redirect('/')->with(['status'=>'pas de resultat !']);
        }
    }
}
