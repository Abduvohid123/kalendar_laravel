@extends('layouts.master')

@section('sarlavha')Lessons @endsection
@section('master-content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2></h2>
            </div>
            <div class="pull-right">

                    <a class="btn btn-success" href="{{ route('lessons.create') }}"> Create New Lesson</a>

            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Class</th>
            <th>WeekDay</th>
            <th>Teacher</th>
            <th>Start time</th>
            <th>End time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($lessons as $lesson)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $lesson->name }}</td>
                <td>{{ $lesson->class->name }}</td>
                <td>{{ \App\Models\Lesson::WEEK_DAYS[$lesson->weekday] }}</td>
                <td>{{ $lesson->teacher->name }}</td>
                <td>{{ $lesson->start_time }}</td>
                <td>{{ $lesson->end_time }}</td>
                <td>
                    <form action="{{ route('lessons.destroy',$lesson->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('lessons.show',$lesson->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('lessons.edit',$lesson->id) }}">Edit</a>


                        @csrf
                        @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $lessons->links() !!}


@endsection
