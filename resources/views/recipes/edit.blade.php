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



                <form method="POST" action="{{ route('recipes.update', ['recipe' => $recipe]) }}" id="">
                    {{ csrf_field() }}
                    @method('PUT')

                    <label for="NewRecipe">Edit your recipe!</label>
                    <h3>Name</h3>
                    <input type="text" value="{{$recipe->recipe_name}}" name="recipeTitle" id=""> <br>
                    <h3>Instructions</h3>
                    <input type="text" value="{{$recipe->recipe_desc}}" name="recipeDesc" id=""> <br>
                    <h3>Ingredients</h3>
                    {{-- <input type="text" required name="ingredients" id=""> <br> --}}
                          {{-- hidden input for ingredients array --}}
                    <input type="hidden" id="ingredients" value="{{$recipe->ingredients}}" name="ingredients">
                    <h3>Cookingtime (Minutes)</h3>
                    <input type="number" value="{{$recipe->time}}" name="time" id=""> <br>

{{--
                    @foreach($categories as $category)

                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                    <label>{{ $category->category_name }}</label>
                    @endforeach
                    <script src="{{asset('../js/ingredients.js')}}"></script>
                    <div id="ingList"></div>
                    <br> --}}
                    {{-- my brain loading rn  --}}
                    <button type="submit" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection