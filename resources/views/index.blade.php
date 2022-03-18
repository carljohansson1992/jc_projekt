@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @foreach($recipes as $recipe)
                    <h3><a href="/showTheRecipe/{{$recipe->id}}">{{ $recipe->recipe_name }}</a></h3>


                    <br>
                    <p>{{ $recipe->recipe_desc }}</p>

                    <br>

                    <hr>
                    @endforeach
                    {{ auth()->user()->name}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection