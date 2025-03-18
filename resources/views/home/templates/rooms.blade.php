@if($rooms->count())
@foreach($rooms as $room)
    
    @include('home.partials.room')

@endforeach
@endif