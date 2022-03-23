@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center border border-success shadow-lg rounded-lg">


                <div class="card-body">

                    <h2>{{ $recipe->recipe_name }}</h2>
                    <hr>
                    <h3>Ingredienser</h3>

                    <?php $listAll = explode(",", $recipe->ingredients); ?>
                    @foreach($listAll as $listEl)
                    <p>{{$listEl}}</p>
                    @endforeach

                    <h3>Instruktioner</h3>

                    <p>{{ $recipe->recipe_desc }}</p>
                    <h3>Kategorier</h3>
                    @foreach($recipe->categories as $category)
                    <p>{{ $category->category_name }}</p>
                    @endforeach


                    <h3>Tillagningstid</h3>

                    <p>{{ $recipe->time }} minuter</p>


                    @if (Auth::id() == $recipe->user_id)
                    <div class="spaceBtn">
                        <button type="button"  class="btn btn-success d-inline"><a style="color: white; text-decoration: none;" href="/recipes/{{$recipe->id}}/edit">Edit</a></button>



                        <form action="{{ route('recipes.destroy', ['recipe' => $recipe]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger d-inline" type="submit">Delete</button>
                        </form>
                    </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection