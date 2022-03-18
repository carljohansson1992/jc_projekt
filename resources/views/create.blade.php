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
                <form method="post" action="{{ route('createRecipe') }}">
                    {{ csrf_field() }}
                    <label for="NewRecipe">Create a new recipe!</label>
                    <h3>Name</h3>
                    <input type="text" name="recipeTitle" id=""> <br>
                    <h3>Instructions</h3>
                    <input type="text" name="recipeDesc" id=""> <br>
                    <h3>Ingredients</h3>
                    {{-- my brain loading rn  --}}
                    <button type="submit"></button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script>console.log("please");</script>