@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @foreach($recipes as $recipe)
                    <p>{{ $recipe->recipe_name }}</p>
                    <br>
                    <p>{{ $recipe->recipe_desc }}</p>
                    <p>{{$recipe->user->name }}</p>
                    <br>

                    <hr> --}}
                    {{-- @endforeach --}}
                    <p>{{ $recipe->recipe_name }}</p>
                    <p>{{ $recipe->recipe_desc }}</p>
                    <p>{{ $recipe->categories }}</p>



                    <p>{{ $recipe->time }} minutes</p>
                    {{-- @foreach($recipe->ingredients as $ingredient)
                        <p>{{ $recipe->$ingredient }}</p>
                    @endforeach --}}
                    {{-- {{ auth()->user()->name}} --}}

                    @if (Auth::id() == $recipe->user_id)
                        <a href="/recipes/{{$recipe->id}}/edit">Edit</a>

                        <a href="{{ route('recipes.destroy', $recipe->id) }}">Delete</a>

                        <form action="{{ route('recipes.destroy', ['recipe' => $recipe]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit">Delete</button>
                        </form>
                    @endif
{{-- time for a if statement for users  --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection