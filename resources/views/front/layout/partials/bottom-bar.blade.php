<ul class="floating-buttons">

    @forelse (Config::get("dehbi.phones") as $item)
        <li>
            <a class="" target="_blank" href="{{ $item['href'] . $item['number'] }}">
                <span class="fa-stack fa-lg">
                    <i class="{{ $item['icons'] }} fa-stack-1x fa-inverse"></i>
                    {{-- <i class='{{ $item['icons'] }}'></i> --}}
                </span>
            </a>
        </li>

    @empty
    @endforelse



    <li>
        <a href="mailto:{{ Config::get('dehbi.primary_emails') }}">
            {{-- <i class="fa fa-envelope"></i> --}}
            <span class="fa-stack fa-lg">
                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
            </span>
        </a>
    </li>

</ul>
