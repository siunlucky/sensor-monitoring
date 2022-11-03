@extends('layout.main')

@section('styles')
<link rel="stylesheet" href="css/smart-switch.css">
@endsection

@section('main-content')
<div class="container-top">
    <div class="title-smartswitch">
        Smart Switch
    </div>
</div>
<div class="container-center">
    <form class="form-control" action="/smart-switch" method="get">
        <input type="text" name="name" placeholder="Cari SmartSwitch">
        <button class="search-smartswitch-btn" type="submit">Cari</button>
    </form>

    @foreach ($places as $place)
    <div class="card">
        <div class="header-card" onclick="showContent({{ $place->id }})">
            <div class="icon-show">
                <svg fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20px" height="20px"
                    fill-rule="evenodd">
                    <path fill-rule="evenodd"
                        d="M 11 2 L 11 11 L 2 11 L 2 13 L 11 13 L 11 22 L 13 22 L 13 13 L 22 13 L 22 11 L 13 11 L 13 2 Z" />
                </svg>
            </div>
            <div class="title-area">{{ $place->name }}</div>
        </div>
        <div class="full-content" id="show{{ $place->id }}">

            @foreach ($areas as $area)
            @if ($area->place_id === $place->id)
            <div class="content">
                <div class="content-left">
                    <img src="img/map/{{ $area->area_image }}" class="map-img" />
                    @foreach ($spots as $spot)
                    @if ($spot->area_id === $area->id)
                    <div class="blob red-inactive" style="left: 51%;top: 79%;" id="pulse"></div>
                    @endif
                    @endforeach
                    {{-- <script>
                        PSPDFKit.load({
                        container: "#{{ $area->place_id }}",
                          document: "{{ $area->area_image }}" // Add the path to your document here.
                    })
                    .then(function(instance) {
                        console.log("PSPDFKit loaded", instance);
                    })
                    .catch(function(error) {
                        console.error(error.message);
                    });
                    </script> --}}

                </div>

                <div class="content-right">
                    <div class="power-total">
                        <div class="power-left">
                            <svg fill="#1565c0" width="20px"
                                style="display: flex; align-items: center; justify-content: center" version="1.1"
                                id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 392 392"
                                style="enable-background:new 0 0 392 392;" xml:space="preserve">
                                <polygon
                                    points="329.481,136 244.017,136 303.319,0 147.983,0 62.519,196 147.983,196 62.519,392 " />
                            </svg>
                        </div>
                        <div class="power-right">
                            <div class="title-power-top">
                                Total Power
                            </div>
                            <div class="title-power-bot">
                                62,102 kWh
                            </div>
                        </div>
                    </div>
                    <div class="switch-card">
                        @foreach ($spots as $spot)
                        @if ($spot->area_id === $area->id)
                        <hr class="separator" aria-orientation="horizontal">
                        <div class="list-switch" tabindex="-1">
                            <div class="switch-content">
                                <div class="title-spot">{{ $spot->name }}</div>
                                @livewire('status', [
                                'status' => $spot
                                ])
                            </div>
                            <div class="switch-action">
                                <div class="onoffswitch">
                                    @livewire('toggle-switch', [
                                    'model' => $spot,
                                    'field' => 'status',
                                    ])
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            @endif

            @endforeach
        </div>
    </div>
    @endforeach
</div>
@endsection