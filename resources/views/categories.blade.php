@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kategorier') }}</div>

                <div class="card-body">
                    @foreach($categories as $category)
                    {{-- <p>{{ $category->category_name }}</p>

                    <br> --}}
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                    <label>{{ $category->category_name }}</label>
                    @endforeach

                </div>
                {{-- <select class="form-select" name="tags[]" multiple="multiple">
                    @foreach($categories as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                    @endforeach --}}
                    yo



                </select>
            </div>
        </div>
    </div>
</div>
@endsection
