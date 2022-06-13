@extends('master')
@section('title','About')
@section('content')
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container px-4 px-lg-5 mt-5 mb-4">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 text-center mt-5 mb-4">
                        <h2 class="text-white mt-0">{{ $title }}</h2>
                        <hr class="divider divider-light" />
                        <p class="text-white-75 mt-5 mb-4">{{ $detail }}</p>
                        <a class="btn btn-light btn-xl mt-5 mb-4" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
@endsection