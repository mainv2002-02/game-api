@extends('master')

@section('content')
    <div class="bg-primary text-white text-center">
        <div class="container">
            <div class="row">
                <h4 class="text-uppercase mb-4">Total: {{$records->sum('points')}} </h4>
            </div>
            <div class="row">
                <table class="">
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
            <div class="row">
                <button class="btn btn-primary btn-xl" id="submitButton" type="submit">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded active" href="/character">Tro ve</a>
                </button>
            </div>
        </div>
    </div>
@stop