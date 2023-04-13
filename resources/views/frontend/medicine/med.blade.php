@extends('frontend.apphos')
@section('content')

<section class="about section-padding" id="section_2">
    <div class="container">
        <div class="row">

            {{-- <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="about-image-wrap h-100">
                    <img src="images/peter-jones-WZROBIlY8Rg-unsplash.jpg" class="img-fluid about-image" alt="">

                    <div class="about-image-info">
                        <h4 class="text-white">Dr. Mahatara</h4>

                        <p class="text-white mb-0">Skipping meals can lead to overeating later in the day. Try to eat
                            regular meals and snacks throughout the day to keep your hunger and energy levels stable.
                        </p>
                    </div>
                </div>
            </div> --}}
            @foreach ($med as $m)
            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">{{ $m->name }}</h5>
                        <p>{{ $m->description }}</p>
                    </div>

                </div>

            </div>
            @endforeach

            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">Aspirin</h5>
                        <p>Aspirin is a nonsteroidal anti-inflammatory drug (NSAID) that is commonly used to reduce
                            pain, fever, and inflammation. It works by blocking the production of certain chemicals in
                            the body that cause pain and inflammation. Aspirin is also used to prevent blood clots and
                            reduce the risk of heart attack or stroke in people who have cardiovascular disease.</p>
                    </div>

                </div>

            </div>
            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">Aspirin</h5>
                        <p>Aspirin is a nonsteroidal anti-inflammatory drug (NSAID) that is commonly used to reduce
                            pain, fever, and inflammation. It works by blocking the production of certain chemicals in
                            the body that cause pain and inflammation. Aspirin is also used to prevent blood clots and
                            reduce the risk of heart attack or stroke in people who have cardiovascular disease.</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">Aspirin</h5>
                        <p>Aspirin is a nonsteroidal anti-inflammatory drug (NSAID) that is commonly used to reduce
                            pain, fever, and inflammation. It works by blocking the production of certain chemicals in
                            the body that cause pain and inflammation. Aspirin is also used to prevent blood clots and
                            reduce the risk of heart attack or stroke in people who have cardiovascular disease.</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">Aspirin</h5>
                        <p>Aspirin is a nonsteroidal anti-inflammatory drug (NSAID) that is commonly used to reduce
                            pain, fever, and inflammation. It works by blocking the production of certain chemicals in
                            the body that cause pain and inflammation. Aspirin is also used to prevent blood clots and
                            reduce the risk of heart attack or stroke in people who have cardiovascular disease.</p>
                    </div>

                </div>

            </div>


            <div class="col-lg-6 col-12 d-flex flex-column">
                <div class="about-thumb bg-white shadow-lg">

                    <div class="about-info">
                        <h5 class="mb-3 text-warning">Aspirin</h5>
                        <p>Aspirin is a nonsteroidal anti-inflammatory drug (NSAID) that is commonly used to reduce
                            pain, fever, and inflammation. It works by blocking the production of certain chemicals in
                            the body that cause pain and inflammation. Aspirin is also used to prevent blood clots and
                            reduce the risk of heart attack or stroke in people who have cardiovascular disease.</p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

@endsection