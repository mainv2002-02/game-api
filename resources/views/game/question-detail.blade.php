@extends('master')

@section('title', $question->title)

@section('style-libraries')

@stop

@section('styles')
@stop

@section('content')
    <div>
        <h2>Question: {{$question->title}}</h2>
        {!! $question->description !!}
        {!! $question->group !!}
        {!! $question->infer !!}
        {!! $question->suggest !!}
        {!! $question->explain !!}
        {!! $question->answer !!}

        <h3>Include Template</h3>
        @if(!empty($question->template))
            @include($question->template)
        @endif

        <h2> Track</h2>
        {!! $track->name !!}
        {!! $track->title !!}
    </div>
@stop

@section('scripts')
@stop
