<div class="header-two-top">
    <div class="container">
        <div class="header-top-items">
            <ul class="header-address">
                @forelse (Config::get("dehbi.phones") as $item)
                    <li><a class="text-decoration-none white-color" target="_blank" href="{{$item["href"] . $item["number"] }}"> <span><i class='{{ $item["icons"] }}'></i></span>{{ $item["number"] }} </a></li>

                @empty

                @endforelse
                <li><span><i class="bx bx-map"></i></span>{{ Config::get("dehbi.address") }}

            </ul>
            <div class="header-top-right d-flex align-items-center">
                <div class="header-top-flag-drops d-flex align-items-center">
                    <div class="header-top-drpodowns me-3">
                        <div class="dropdown header-dropdown country-flag">
                            <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                href="javascript:void(0);">
                                <img src="{{ URL::asset( Helpers::getDefaultLanguage("flagPath")) }}"
                                    alt="Img">{{ Helpers::getDefaultLanguage('language') }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                {{-- @dd(Language::get()); --}}
                                @forelse (Language::get() as $languge)
                                    <a href="{{ route("change_lang",["lang"=>$languge->code]) }}" class="dropdown-item">
                                        <img src="{{ URL::asset($languge->flagPath) }}" alt="Img">{{ $languge->language ?? '' }}
                                    </a>
                                @empty

                                @endforelse


                            </div>
                        </div>
                    </div>
                    {{-- <div class="header-top-drpodowns">
                        <div class="dropdown header-dropdown country-flag">
                            <a class="dropdown-toggle nav-tog" data-bs-toggle="dropdown"
                                href="javascript:void(0);">
                                <i class="bx bx-globe me-2"></i>USD
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:void(0);" class="dropdown-item">
                                    Euro
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    INR
                                </a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="header-top-social-links">
                    <ul>
                        @forelse (Config::get("dehbi.social") as $item)
                            <li>
                                <a title="{{ $item["name"] ?? '' }}" target="_blank" href="{{ $item["link"] ?? '' }}"><i class="{{ $item["icon"] ?? '' }}"></i></a>
                            </li>
                        @empty

                        @endforelse

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
