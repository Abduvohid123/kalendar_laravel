@extends('layouts.master')

@section('sarlavha')Show Lesson @endsection
@section('master-content')



        <div class="col">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2></h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('lessons.index') }}"> Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name: </strong>
                        {{ $lesson->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Class: </strong>
                        {{ $lesson->class->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Weekday: </strong>
                        {{ \App\Models\Lesson::WEEK_DAYS[$lesson->weekday] }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Teacher: </strong>
                        {{$lesson->teacher->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Start Time: </strong>
                        {{$lesson->start_time }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>End Time: </strong>
                        {{$lesson->end_time }}
                    </div>
                </div>

            </div>

        </div>



@endsection
