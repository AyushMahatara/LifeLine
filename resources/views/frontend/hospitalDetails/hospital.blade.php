@extends('frontend.apphos')
@section('content')
<main>
    <section class="hero section-hero section-padding">

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 text-center mx-auto">
                    <div class="section-hero-text">
                        <h1><small class="small-title text-warning">HOSPITAL DETAILS</small></h1>

                        {{-- <h1 class="text-white">Conference</h1> --}}
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="projects section-padding">
        @foreach ($hos as $hos)
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 mb-5" style="text-align: justify">
                    <h5 class="mb-3">{{$hos->title}}
                    </h5>
                    <p> <b>{{ $hos->name }}</b>
                        <br>
                        {!! $hos->description !!}
                    </p>
                    <br>
                    <hr>
                </div>

            </div>

            @endforeach

    </section>

</main>
@endsection