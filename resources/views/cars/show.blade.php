@section('title')

    single car

@endsection

@extends('layouts.default')


@section('content')
    <div class="row">
            <div class="col-md-4">
                <h2>{{ $car->title }}</h2>
                <p>The car {{ $car->title }} is the best production car by {{ $car->producer }}. This model has {{$car ->number_of_doors}} doors</p>
            </div>
    </div>

@endsection


