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
                    <p>{{ $recipe->user_id }}</p>
                    {{-- {{ auth()->user()->name}} --}}
                
                    @if (Auth::id() == $recipe->user_id) 
                        {{ "IT'S A MATCH" }}
                    @endif
{{-- time for a if statement for users  --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection