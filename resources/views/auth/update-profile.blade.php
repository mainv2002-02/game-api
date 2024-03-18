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
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Personal Info</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Form-->
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-7">
                    <form id="contactForm" data-sb-form-api-token="" method="POST" action="">
                        {{--                        <input type="hidden" name="_token" value="{{ app('session')->token() }}">--}}
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="phone" type="tel" placeholder="0987654321" data-sb-validations="required" />
                            <label for="phone">Phone number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="title" type="text" placeholder="Title" />
                            <label for="title">Title</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select id="department" name="department" class="form-control form-select">
                                <option value="Supply Chain">Supply Chain</option>
                                <option value="Sales & Commercial">Sales & Commercial</option>
                                <option value="People">People</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Legal">Legal</option>
                                <option value="PACS">PACS</option>
                                <option value="Strategy">Strategy</option>
                            </select>
                            <label for="department">Phòng ban</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select id="area" name="area" class="form-control form-select">
                                <option value="HO (trụ sở chính)">HO (trụ sở chính)</option>
                                <option value="HCM">HCM</option>
                                <option value="Mekong">Mekong</option>
                                <option value="South Provinces">South Provinces</option>
                                <option value="Da Nang">Da Nang</option>
                                <option value="Hanoi">Hanoi</option>
                                <option value="North East">North East</option>
                                <option value="North">North</option>
                            </select>
                            <label for="department">Vùng miền</label>
                        </div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        <!-- Submit Button-->
                        <button class="btn btn-primary btn-xl" id="submitButton" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="{{url('assets/js/login.js')}}"></script>
@stop
