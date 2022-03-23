@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
         
                    <p>{{ $recipe->recipe_name }}</p>
                    <?php $listAll = explode(",", $recipe->ingredients); ?>
                    @foreach($listAll as $listEl)
                    <p>{{$listEl}}</p>
                    @endforeach

                  
                    <p>{{ $recipe->recipe_desc }}</p>
                    @foreach($recipe->categories as $category)
                    <p>{{ $category->category_name }}</p>
                    @endforeach



                    <p>{{ $recipe->time }} minutes</p>
                   

                    @if (Auth::id() == $recipe->user_id)
                        <button type="button"  class="btn btn-success"><a style="color: white; text-decoration: none;" href="/recipes/{{$recipe->id}}/edit">Edit</a></button>



                        <form action="{{ route('recipes.destroy', ['recipe' => $recipe]) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection