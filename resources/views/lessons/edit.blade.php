@extends('layouts.master')

@section('sarlavha')
    Edit Lesson
@endsection
@section('master-content')

    <div class="row">
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
            <form action="{{ route('lessons.update',$lesson->id) }}" method="POST">
                @csrf
                @method('PUT')


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $lesson->name }}" class="form-control"
                                   placeholder="Name">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="weekday">WeekDay</label>
                            <select class="form-control" id="weekday" name="weekday">
                                <option
                                    value="{{ $lesson->weekday }}">{{\App\Models\Lesson::WEEK_DAYS[$lesson->weekday]}}</option>

                                @foreach (\App\Models\Lesson::WEEK_DAYS as $id => $value) {
                                @if($id==$lesson->weekday)
                                    @continue
                                @endif
                                <option
                                    value="{{ $id }}" {{ old('weekday') == $id ? 'selected' : '' }}>{{ $value }}</option>
                                ;
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="class_id">Class</label>
                            <select class="form-control" id="class_id" name="class_id">
                                <option selected value="{{$lesson->class_id}}">{{$lesson->class->name}}</option>
                                @foreach(\App\Models\Univercity_class::all() as $id => $class)
                                    @if($id+1==$lesson->class_id)
                                        @continue
                                    @endif
                                    <option
                                        value="{{ $id+1}}" {{ old('class_id') == $id ? 'selected' : '' }}>{{ $class->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <label for="teacher_id">Teacher</label>
                            <select class="form-control" id="teacher_id" name="teacher_id">
                                <option value="{{$lesson->teacher_id}}">{{ $lesson->teacher->name }}</option>
                                @foreach(\App\Models\User::all() as $id => $teacher)
                                    @if ($teacher->can('teacher')&&$teacher->cannot('admin'))
                                        @if($id+1==$lesson->teacher->id)
                                            @continue
                                        @endif
                                        <option
                                            value="{{ $id+1 }}" {{ old('teacher_id') == $id ? 'selected' : '' }}>{{ $teacher->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Start Time:</strong>
                            <input type="time" name="start_time" class="form-control" placeholder="Start Time" value="{{$lesson->start_time}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>End Time:</strong>
                            <input type="time" name="end_time" class="form-control" placeholder="End Time" value="{{$lesson->start_time}}">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>


            </form>

        </div>
    </div>





@endsection
