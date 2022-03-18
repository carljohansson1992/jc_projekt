@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kategorier') }}</div>

                <div class="card-body">
                    @foreach($categories as $category)
                    <p>{{ $category->category_name }}</p>

                    <br>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection