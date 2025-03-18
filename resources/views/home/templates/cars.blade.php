@if($cars->count())
@foreach($cars as $car)
    
    @include('home.partials.car')

@endforeach
@endif