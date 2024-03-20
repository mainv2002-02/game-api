@extends('master')

@section('title', 'Home Page')

@section('style-libraries')

@stop

@section('styles')
    <link rel="stylesheet" href="{{ url('assets/css/home/home.css') }}">
@stop

@section('content')
    <div class="background">
        <div id="lottie-background" class="lottie-background"></div>
        <div class="container">
            <form class="form">
                <div class="input-container" id="input1Container">
                    <div class="lottie-input-background" id="input1Animation"></div>
{{--                    <input type="text" placeholder="Input 1" class="form-input">--}}
                </div>
{{--                <input type="text" placeholder="Input 1" class="form-input">--}}
{{--                <input type="text" placeholder="Input 2">--}}
                <select>
                    <option value="">Dropdown 1</option>
                </select>
                <select>
                    <option value="">Dropdown 2</option>
                </select>
                <select>
                    <option value="">Dropdown 3</option>
                </select>
{{--                <div class="form-field" id="buttonAnimation"></div>--}}
                <button type="submit"  id="lottie-button-animation"></button>
            </form>
        </div>
    </div>
@stop

@section('scripts')
    <script>
        $(document).ready(function() {
            lottie.loadAnimation({
                container: document.getElementById('lottie-background'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '{{url('assets/img/home/background.json')}}' // path to your animation JSON file
            });

            lottie.loadAnimation({
                container: document.getElementById('input1Animation'),
                renderer: 'svg',
                loop: false,
                autoplay: true,
                path: '{{url('assets/img/home/input.json')}}'
            });
            lottie.loadAnimation({
                container: document.getElementById('lottie-button-animation'),
                renderer: 'svg',
                loop: false,
                autoplay: true,
                path: '{{url('assets/img/home/next.json')}}'
            });
        });
    </script>
@stop
