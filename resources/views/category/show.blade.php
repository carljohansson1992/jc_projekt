@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <p><?php echo "$category->recipes"?></p>

                    @foreach($category->recipes as $recipe)
                    <h3><a href="/showTheRecipe/{{$recipe->id}}">{{ $recipe->recipe_name }}</a></h3>


                    <br>
                    <p>{{ $recipe->recipe_desc }}</p>
                    @endforeach


                    {{-- @foreach($recipes as $recipe)
                    <p>{{ $recipe->recipe_name }}</p>
                    <br>
                    <p>{{ $recipe->recipe_desc }}</p>
                    <p>{{$recipe->user->name }}</p>
                    <br>

                    <hr> --}}
                    {{-- @endforeach --}}
                    {{-- <p>{{ $recipe->recipe_name }}</p> --}}
                    {{-- {{ auth()->user()->name}} --}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection