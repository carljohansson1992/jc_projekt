@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center border border-success shadow-lg rounded-lg p-3">


                <h2>Recept</h2>
                <hr>
                <div class="m-3">
                    @foreach($categories as $category)
                    <a class="btn btn-success m-2" href="/categories/{{$category->id}}">{{$category->category_name}}</a>

                    @endforeach
                </div>

                <div class="card-body m-3">
                    @foreach($recipes as $recipe)
                    <h3><a class="text-success" href="/recipes/{{$recipe->id}}">{{ $recipe->recipe_name }}</a></h3>


                    <br>
                    {{-- <p>{{ $recipe->recipe_desc }}</p> --}}
                    <div>

                        @foreach($recipe->categories as $category)
                        <a href="/categories/{{$category->id}}">{{$category->category_name}}</a>
                        @endforeach
                     </div>
                    <br>

                    <hr>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</div>
@endsection