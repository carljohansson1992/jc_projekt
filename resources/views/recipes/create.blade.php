@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

{{--
                <div class="card-body">
                    @foreach($recipes as $recipe)
                    <p>{{ $recipe->recipe_name }}</p>

                    <br>
                    @endforeach

                </div> --}}
                <form method="POST" action="/recipes" id="createForm">
                    {{ csrf_field() }}
                    <label for="NewRecipe">Create a new recipe!</label>
                    <h3>Name</h3>
                    <input type="text" required name="recipeTitle" id=""> <br>
                    <h3>Instructions</h3>
                    <input type="text" required name="recipeDesc" id=""> <br>

                    {{-- <input type="text" required name="ingredients" id=""> <br> --}}
                          {{-- hidden input for ingredients array --}}
                    <input type="hidden" id="ingredients" name="ingredients">
                    <h3>Cookingtime (Minutes)</h3>
                    <input type="number" required name="time" id=""> <br>
                    <h3>Ingredients</h3>
                    <br>
                    <script src="{{asset('../js/ingredients.js')}}"></script>
                    <div id="ingList"></div>

                    @foreach($categories as $category)

                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                    <label>{{ $category->category_name }}</label>
                    @endforeach
                    <br>


                    {{-- my brain loading rn  --}}
                    <button class="btn btn-success" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script>console.log("please");</script>