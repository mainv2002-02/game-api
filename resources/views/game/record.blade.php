@extends('master')

@section('content')
    <div class="masthead bg-primary text-white text-center">
        <div class="container">
            <div class="row">
                <h4 class="text-uppercase mb-4">Total: {{$records->sum('points')}} </h4>
            </div>
            <div class="row">
                <table class="table">
                    <tr>
                        <th>QuestionId</th>
                        <th>Point</th>
                    </tr>
                @foreach($records as $row)
                   <tr>
                       <td>{{$row->question_id}}</td>
                       <td>{{$row->points}}</td>
                   </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@stop