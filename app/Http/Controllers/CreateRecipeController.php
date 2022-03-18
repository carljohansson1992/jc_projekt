<?php

namespace App\Http\Controllers;

use App\Models\CreateRecipe;
use Illuminate\Http\Request;

class CreateRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateRecipe  $createRecipe
     * @return \Illuminate\Http\Response
     */
    public function show(CreateRecipe $createRecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateRecipe  $createRecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateRecipe $createRecipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateRecipe  $createRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateRecipe $createRecipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateRecipe  $createRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateRecipe $createRecipe)
    {
        //
    }
}
