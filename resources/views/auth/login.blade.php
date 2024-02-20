@extends('master')

@section('title', 'Login Page')

@section('style-libraries')
    <link rel="stylesheet" href="{{url('assets/css/login.css')}}">
@stop
    @section('styles')
@stop

@section('content')
    <div id="background_branding_container" data-tenant-branding-background-color="true">
        <img id="background_background_image" data-tenant-branding-background="true" src="{{url('assets/img/login.png')}}" alt="Background Image" aria-hidden="true">
    </div>
    <div class="panel" id="panel">
        <table class="panel_layout" role="presentation">
            <tbody>
            <tr class="panel_layout_row">
                <td id="panel_left">
                </td><td id="panel_center">
                    <div class="inner_container">
                        <div class="api_container normaltext">
                            <img alt="Company Logo" class="companyLogo" style="display: none;" data-tenant-branding-logo="true">
                            <div id="api" role="main">
                                <form method="POST">
                                    <button type="submit" value="Login" name="submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@stop

@section('scripts')
    <script src="{{url('assets/js/login.js')}}"></script>
@stop
