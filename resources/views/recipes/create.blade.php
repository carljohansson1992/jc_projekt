@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @if (Route::has('login'))

        @auth
        <div class="col-md-8">
            <div class="card text-center border border-success shadow-lg rounded-lg p-3">

                <h2>Skapa ett nytt recept!</h2>
                <hr>
                <form method="POST" action="/recipes" id="createForm">
                    {{ csrf_field() }}

                    <h3>Namn</h3>
                    <input type="text" required name="recipeTitle" id=""> <br>
                    <h3>Instruktioner</h3>
                    <textarea type="text" required name="recipeDesc" id=""></textarea> <br>


                    <h3>Tillagningstid (Minuter)</h3>
                    <input type="number" required name="time" id=""> <br>

                    <h3>Ingredienser</h3>
                    <input type="text" required name="ingredients" id="ingredients" oninvalid="setCustomValidity('You have to add at least one ingredient!')">

                    <script src="{{asset('../js/ingredients.js')}}"></script>
                    <div id="ingList"></div>

                    <h3>Kategorier</h3>

                    @foreach($categories as $category)

                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                    <label>{{ $category->category_name }}</label>
                    @endforeach
                    <br>
                    <button class="btn btn-success" type="submit">Spara</button>
                </form>
            </div>
        </div>
        @else


            @if (Route::has('register'))
            <p>Du måste <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">logga in</a> eller          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">registrera dig</a> för att skapa recept!</p>
            @endif
        @endauth
    </div>
@endif

    </div>
</div>
@endsection
