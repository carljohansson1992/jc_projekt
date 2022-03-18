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
                    <?php print_r($recipes); ?>
                    {{ auth()->user()->name}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection