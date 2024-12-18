<x-leaf.theme mode="navbar-dark" title="KML" description="แผนที่ GIS" image="{{ url('leaf/assets/img/our-mission.jpg') }}">
    <!-- Hero -->
    <section class="section section-lg bg-secondary overlay-primary text-white" data-background="{{ asset('leaf/assets/img/our-mission.jpg') }}">
        <div class="container">
            <div class="row justify-content-center pt-5">
                <div class="col-10 mx-auto text-center">
                    <!-- Heading -->
                    <h1 class="display-1 font-weight-bold">
                        KML
                    </h1>
                    <p class="lead mb-4 font-weight-bold">
                        ...
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <div class="section pt-0">
        <div class="container mt-n5">
            <div class="row">
                <div class="col">
                    <x-leaf.predict.map-kml ></x-leaf.predict.map-kml>
                </div>                
            </div>
        </div>
    </div>

</x-leaf.theme>
