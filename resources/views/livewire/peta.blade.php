<x-landing-layout>
    <div class="text-center">
        <h3 class="my-2">Peta Persebaran Jalan</h3>
        <x-maps-leaflet
            :markers="[['lat' => 5.595950, 'long' =>  95.394131]]"
            :zoomLevel="9.2"
            :centerPoint="['lat' => 4.697014867601287, 'long'=> 96.70027405656897]"
        ></x-maps-leaflet>
    </div>

    <script>
        var states = [{
            "type": "Feature",
            "properties": {"lokasi": "Tibang"},
            "geometry": {
                "type": "Polygon",
                "coordinates": [
                    [
                        [
                            95.37349441355798,
                            5.590408562264912
                        ],
                        [
                            95.31807707163091,
                            5.574149135396439
                        ],
                        [
                            95.31151027677981,
                            5.537005815954103
                        ],
                        [
                            95.36564629288341,
                            5.539875340216284
                        ],
                        [
                            95.39367529529522,
                            5.565541020936024
                        ],
                        [
                            95.37349441355798,
                            5.590408562264912
                        ]
                    ]
                ]
            }
        }, {
            "type": "Feature",
            "properties": {"lokasi": "AlueNaga"},
            "geometry": {
                "type": "Polygon",
                "coordinates": [[
                    [
                        95.43145236895487,
                        5.543737456110648
                    ],
                    [
                        95.26512508720822,
                        5.46889536672623
                    ],
                    [
                        95.2730996829078,
                        5.3452720863429874
                    ],
                    [
                        95.4474015603555,
                        5.3327949463030535
                    ],
                    [
                        95.65588027651836,
                        5.502915666324711
                    ],
                    [
                        95.43145236895487,
                        5.543737456110648
                    ]
                ]]
            }
        }];

        function TampilPopUp(feature, layer) {
            // does this feature have a property named popupContent?
            if (feature.properties && feature.properties.lokasi) {
                layer.bindPopup(feature.properties.lokasi);
            }
        }

        new L.geoJSON(states, {
            onEachFeature: TampilPopUp,
            style: function (feature) {
                switch (feature.properties.lokasi) {
                    case 'Tibang':
                        return {color: "#ff0000"};
                    case 'AlueNaga':
                        return {color: "#0000ff"};
                }
            }
        }).addTo(mymap);
    </script>

</x-landing-layout>
