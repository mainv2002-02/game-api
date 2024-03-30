@extends('master')

@section('title', $question->title)

@section('style-libraries')

@stop

@section('styles')
@stop

@section('content')
    <div class="masthead bg-primary text-white text-center">
        <div class="container">
            <div class="row">
                <h4 class="text-uppercase mb-4">{{$track->name}} </h4>
            </div>
            <div class="row">
                <h4 class="text-uppercase mb-4">{{$question->id. ' - '. $track->title. ' - '. $question->group. ' - '. $hero->name}} </h4>
                <p class="lead mb-0">
                    {!! $question->description !!}
                    {!! $question->group !!}
                    {!! $question->infer !!}
                    {!! $question->suggest !!}
                    {!! $question->explain !!}
                </p>

                {{--                <h3>Include Template</h3>--}}
                {{--                @if(!empty($question->template))--}}
                {{--                    @include($question->template)--}}
                {{--                @endif--}}
                <div class="navbar-nav ms-auto">
                    {{--                    @if(Session::has('message'))--}}
                    {{--                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>--}}
                    {{--                    @endif--}}
                    <form method="POST" action="/game/question">
                        @if(!empty($result['msg']))
                            <div class="form-control">
                                <span class="error text-danger">{!! $result['msg'] !!}</span>
                            </div>
                        @endif
                        @if(!empty($result['canAnswer']))
                            <div>
                                <span class="success text-bg-info">Vui lòng chọn câu trả lời</span>
                            </div>
                            <div class="form-control">
                                <input type="text" name="answer">
                            </div>
                            <div class="form-control">
                                <button type="submit">Answer</button>
                            </div>
                        @else
                            <div class="form-control">
                                <button type="submit" name="next_question" value="1">Next Question</button>
                            </div>
                        @endif

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div>
@stop

@section('scripts')
@stop
