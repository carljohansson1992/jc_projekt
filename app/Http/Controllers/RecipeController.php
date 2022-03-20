<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Recipe;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderby('category_name')->get();
        $recipes = Recipe::orderby('recipe_name')->get();
        return view('index', [
            'recipes' => $recipes,
            'categories' => $categories,
        ]);




    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderby('category_name')->get();
        return view('create', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newRecipe = new Recipe;
        $newRecipe->user_id = Auth::user()->id;
        $newRecipe->recipe_name = request('recipeTitle');
        $newRecipe->recipe_desc = request('recipeDesc');
        $newRecipe->ingredients = request('ingredients');
        $newRecipe->time = request('time');

        $newRecipe->save();
        $newRecipe->categories()->sync($request->categories);

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $recipes = Recipe::find($id);

            // 'recipes' => $recipes
            $recipe = Recipe::find($id);

        return view('show')->with('recipe', $recipe);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $Recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
