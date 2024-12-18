<div>
    <link type="text/css" href="{{ asset('css/floating-label.css') }}" rel="stylesheet" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUVQ6Qn1MqMrgH25iE31qUA3yGxPvmW8M"></script>

    <script>
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 13.7212183,
                    lng: 102.4056754,
                },
                zoom: 11,
            });

            const bounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(13.49223664565579, 102.229600318951),
                new google.maps.LatLng(14.01677900982144, 102.5865471944948)
            );

            let image = "{{ asset('kml2/Layer0.png') }}";

            new google.maps.GroundOverlay(
                image, // URL to the PNG file
                bounds
            ).setMap(map);

        }

        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
    <div style="min-height: 500px;">
        <div id="map" style="height: 750px; padding:20"></div>
    </div>
</div>
