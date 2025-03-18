@if($cars->count())
    @foreach($cars as $car)

        @include('home.partials.car', ['class' => 'col-md-6 col-sm-6 items-grid'])

    @endforeach
@endif
