@extends('layouts.master')

@section('sarlavha')Show Class @endsection
@section('master-content')


    <div class="row">
        <div class="col">

            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2></h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('univercity_classes.index') }}"> Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $class->name }}
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
