@extends('layouts.default')
 

@section('content')


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('songCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {!! $item->id !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {!! $item->title !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Atist:</strong>
                {!! $item->artist !!}
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Lyrics:</strong>
                {!! $item->lyrics !!}
            </div>
        </div>


    </div>


@endsection