@extends('HomeM')

@section('content')
    <section class="inner-banner mb-4">
        <div class="container">
            <div class="caption">
                <h2>Istar Studio</h2>
                <p>Get Any Service you want</p>
            </div>
        </div>
    </section>
    <div class="container mb-5">
        <h2 class="text-center">Our Service</h2>
        <div class="row justify-content-center">
            <div
                class=" col-sm-12 m-3"
                style="width: 20rem; "
            >
                <div class=" text-center">
                    <img
                        src="{{ url('/images/signup.gif') }}"
                        class="d-block w-100"
                        alt="Image"
                    />
                    <h2 class="my-4">Delivery Service</h2>
                </div>
            </div>

            <div
                class="col-4  m-3"
                style="width: 20rem; "
            >
                <div class=" text-center">
                    <img
                        src="{{ url('/images/Start-learning.gif') }}"
                        class="d-block w-100"
                        alt="Image"
                    />
                    <h2 class="my-4">Pakage Delivery</h2>
                </div>
            </div>
            <div
                class=" col-4  m-3"
                style="width: 20rem; "
            >
                <div class=" text-center">
                    <img
                        src="{{ url('/images/achieve-goals.gif') }}"
                        class="d-block w-100"
                        alt="Image"
                    />
                    <h2 class="my-4">Trip</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
