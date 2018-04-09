@foreach($cars as $car)

    <a href="{{ route('single-item',[ 'id' => $car->id]) }}">{{ $car->title }}</a>

@endforeach