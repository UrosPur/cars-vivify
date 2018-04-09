@extends('layouts.default')
@section('title')

    list of cars

@endsection



@section('content')
    <div class="row">
        @foreach($cars as $car)
            <div class="col-md-4">
                <h2>{{ $car->title }}</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor
                    mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna
                    mollis euismod. Donec sed odio dui. </p>
                <p><a class="btn btn-default" href="{{ route('single-item',[ 'id' => $car->id]) }}" role="button">View
                        details &raquo;</a></p>
            </div>
        @endforeach
    </div>

@endsection

