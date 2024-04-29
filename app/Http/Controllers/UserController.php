<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Main;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // num 1
        //$user = User::with('main')->get();
 
        //num 2
        // $user = User::withWhereHas('main',function($q){
        //     $q->where('id',3);
        // })->get();
        

        // num 3 
        $user = User::where('email','mostofa@gmail.com')->withWhereHas('main',function($q){
            $q->where('id',3);
        })->get();
        return $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $student = User::create([
            'name' => 'salmanx khan',
            'email' => 'salmanx@khan.com',
            'password' => 'salmankhancom',

        ]);

        $student->Main()->create([
            'city' => 'dhile',
            'phone' => '32432432423'
        ]);
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
