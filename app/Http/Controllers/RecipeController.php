<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;


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
        return view('recipes/index', [
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

        return view('recipes/create', [
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

        return redirect('/recipes/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);

        return view('recipes.show')->with('recipe', $recipe);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        $categories = Category::orderby('category_name')->get();


        return view('recipes.edit',[
            'categories' => $categories,
            'recipe' => $recipe]);
        // ])->with('recipe', $recipe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recipe $recipe)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content'   =>  'required',
        //     'recipe_name' => 'required',
        //     'recipe_desc' => 'required',
        //     'ingredients' => 'required',
        //     'time' => 'required',
        // ]);

        $recipe->save($request->all());

        return redirect()
            ->route('recipes.show', ['recipe' => $recipe])
            ->with('success', 'Recipe succesfully updated');

        // return view('show')->with('recipe', $recipe);
        // return view('recipes.show')->with('recipe', $recipe);
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
    }
}
