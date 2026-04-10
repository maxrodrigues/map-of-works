<x-layouts.app>
    <x-header 
        title="Mapa de Obras" 
        description="Visualize as obras em um mapa interativo." 
    />
    <div id="map" class="w-full h-dvh"></div>
    @section('scripts')
        <script
            src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap&libraries=marker&v=beta&solution_channel=GMP_CCS_infowindows_v2"
            defer
        ></script>
        <script>
            let map, activeInfoWindow, markers = [];
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    mapId: "DEFAULT_MAP_ID",
                    center: {
                        lat: -20.319440,
                        lng: -40.337780,
                    },
                    zoom: 9
                });

                initMarkers();
            }

            function initMarkers() {
                const initialMarkers = @json($locations)

                for (let index = 0; index < initialMarkers.length; index++) {
                    const markerData = initialMarkers[index];
                    const marker = new google.maps.Marker({
                        map,
                        position: {
                            lat: parseFloat(markerData.latitude),
                            lng: parseFloat(markerData.longitude),
                        },
                        title: "Work Description",
                    });
                    
                    markers.push(marker);
                    
                    const infowindow = new google.maps.InfoWindow({
                        content: markerWindowContent(markerData),
                    });

                    marker.addListener("click", (event) => {
                        if(activeInfoWindow) {
                            activeInfoWindow.close();
                        }
                        infowindow.open({
                            anchor: marker,
                            shouldFocus: false,
                            map
                        });

                        activeInfoWindow = infowindow;
                    });
                }
            }

            function markerWindowContent(markerData) {
                return `
                    <div>
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">location_on</span>
                            <span class="text-primary">${markerData.location}</span>
                        </div>
                        <h3 class="my-2">${markerData.description}</h3>
                        <p class="text-sm text-gray-500">${markerData.latitude}, ${markerData.longitude}</p>
                    </div>
                `;
            }

            window.initMap = initMap;
        </script>
        @endsection
</x-layouts.app>