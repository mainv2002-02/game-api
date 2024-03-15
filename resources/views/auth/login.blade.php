@extends('master')

@section('title', 'Login Page')

@section('style-libraries')
@stop

@section('styles')
@stop

@section('content')
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Login</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7 align-content-center">
                    <form id="contactForm" data-sb-form-api-token="" method="POST" action="">
                        <button class="btn btn-primary btn-xl align-content-center" id="submitButton" type="submit">
                            Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="{{url('assets/js/login.js')}}"></script>
@stop
