@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card text-center border border-success shadow-lg rounded-lg p-3">
                <form id="editContainer" method="POST" action="{{ route('recipes.update', ['recipe' => $recipe]) }}" id="">
                    {{ csrf_field() }}
                    @method('PUT')

                    <h2>Redigera ditt recept!</h2>
                    <hr>
                    <h3>Namn</h3>
                    <input type="text" value="{{$recipe->recipe_name}}" name="recipeTitle" id=""> <br>
                    <h3>Instruktioner</h3>
                    <textarea type="text" value="{{$recipe->recipe_desc}}" name="recipeDesc" rows="15" cols="50" id="">{{$recipe->recipe_desc}}</textarea> <br>
                    <h3>Ingredienser</h3>
                    <div id="editForm"></div>
                    <div id="ingList"></div>
                    <input type="hidden" id="ingredients" value="{{$recipe->ingredients}}" name="ingredients">
                    <h3>Tillagningstid (Minuter)</h3>
                    <input type="number" value="{{$recipe->time}}" name="time" id=""> <br>
                    <h3>Kategorier</h3>
                    <div id="catChange">

                    @foreach($categories as $category)


                        <input type="checkbox" name="categories[]"value="{{ $category->id }}"
                        @if($recipe->categories->contains($category->id)) checked=checked @endif

                        >
                        <label>{{ $category->category_name }}</label>
                    @endforeach


                </div>
                    <script src="{{asset('../js/show-ingredients.js')}}"></script>
                    <div id="ingList"></div>
                    <br>

                    <br>

                    <script src="{{asset('../js/show-ingredients.js')}}"></script>
                    <button type="submit" class="btn btn-success" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection