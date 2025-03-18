@if($rooms->count())
    @foreach($rooms as $room)

        @include('home.partials.room', ['class' => 'col-md-4 col-sm-6 items-grid'])

    @endforeach
@endif
@if($markers)
    <script type="text/javascript">
        /*
        var markers = [@foreach ($markers as $marker)[{{$marker['geo_lon']}}, {{$marker['geo_lat']}}], @endforeach],
                infoWindowContent = [@foreach ($rooms as $room)[{"id" : "{{$room->id}}","alias":"{{ $room->alias }}","name":{!! json_encode($room->contentload->name) !!},"address":"{{ $room->location['address'] }}" ,"city":"{{ $room->prop_location->contentload->location }}" ,"country":"{{ $room->location['country'] }}" ,"phone":"{{ $room->contact['tel1'] }}", "icon":"{{ $room->category->map_icon }}", "featured":"{{ $room->featured }}", "image":@if(count($room->images))"{{ $room->images[0]->image }}" @else "no_image.jpg" @endif}], @endforeach];
        for(var i = 0; i < markers.length; i++ ) {
            addMarkerToMap(markers[i][0], markers[i][1], infoWindowContent[i], 'room');
        }
        */
    </script>
    @endif
