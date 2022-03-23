@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card card text-center border border-success shadow-lg rounded-lg p-3">
                <h1>Välkommen!</h1>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  <a href="{{ url('/recipes') }}" class="btn btn-success">Kika på våra användares alldeles utsökta recept!</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
