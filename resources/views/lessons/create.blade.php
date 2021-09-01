@extends('layouts.master')

@section('sarlavha')

    Add New Lesson
@endsection
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


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="col">
        <form action="{{ route('lessons.store') }}" method="POST">
            @csrf


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="weekday">WeekDay</label>
                        <select class="form-control" id="weekday" name="weekday">

                            @foreach (\App\Models\Lesson::WEEK_DAYS as $id => $value) {
                               <option value="{{ $id }}" {{ old('weekday') == $id ? 'selected' : '' }}>{{ $value }}</option>;
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="class_id">Class</label>
                        <select class="form-control" id="class_id" name="class_id">
                            @foreach(\App\Models\Univercity_class::all() as $id => $class)
                                <option value="{{ $id+1}}" {{ old('class_id') == $id ? 'selected' : '' }}>{{ $class->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="teacher_id">Teacher</label>
                        <select class="form-control" id="teacher_id" name="teacher_id">

                            @foreach(\App\Models\User::all() as $id => $teacher)
                                @if ($teacher->can('teacher')&&$teacher->cannot('admin'))
                                    <option value="{{ $id+1 }}" {{ old('teacher_id') == $id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Start Time:</strong>
                        <input type="time" name="start_time" class="form-control" placeholder="Start Time">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>End Time:</strong>
                        <input type="time" name="end_time" class="form-control" placeholder="End Time">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


        </form>


    </div>





@endsection
