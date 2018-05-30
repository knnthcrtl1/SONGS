@extends('layouts.default')
 
@section('content')
    

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Song</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('songCRUD.create') }}"> Create New Song</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


<!--     <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Artist</th>
            <th>Lyrics</th>
            <th>Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->artist }}</td>
        <td>{{ $item->lyrics }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('songCRUD.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('songCRUD.edit',$item->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['songCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table -->

    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Lyrics</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Artist</th>
                    <th>Lyrics</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                 @foreach ($items as $key => $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->artist }}</td>
                    <td>{{ str_limit($item->lyrics, 25) }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('songCRUD.show',$item->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('songCRUD.edit',$item->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['songCRUD.destroy', $item->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      </div>


    {!! $items->render() !!}


@endsection