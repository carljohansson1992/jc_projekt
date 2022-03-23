@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-header">{{ __('Dashboard') }}</div>
                <div>
                    @foreach($categories as $category)
                    <a href="/categories/{{$category->id}}">{{$category->category_name}}</a>

                    @endforeach
                </div>

                <div class="card-body">
                    @foreach($recipes as $recipe)
                    <h3><a href="/recipes/{{$recipe->id}}">{{ $recipe->recipe_name }}</a></h3>


                    <br>
                    <p>{{ $recipe->recipe_desc }}</p>
                    @foreach($recipe->categories as $categories)
                    <p>{{ $categories->category_name }}</p>
                    @endforeach
                    <br>

                    <hr>
                    @endforeach
                  


                </div>
            </div>
        </div>
    </div>
</div>
@endsection