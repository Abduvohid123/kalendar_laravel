@extends('layouts.master')

@section('sarlavha')
    Calendar
@endsection
@section('master-content')
    <table class="table table-bordered">
        <tr>
            <th>Time</th>
            @foreach(\App\Models\Lesson::WEEK_DAYS as $day)
                <th>{{$day}}</th>
            @endforeach

        </tr>


        @foreach (  DB::table('lessons')->select('start_time','end_time')->get() as $lesson)
            <tr>
                <td>{{ $lesson->start_time }} ---- {{ $lesson->end_time }}</td>


            </tr>
        @endforeach
    </table>
@endsection
