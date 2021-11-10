@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>Add Gerechtcategorien</h4>
                        <a href="{{ url('gerechtcategorien') }}" class="btn btn-danger float-end">Terug</a>
                    </div>

                    <div class="card-body">

                        <form action="{{ url('update-gerechtcategorien'.$gerechtcategorien->id)  }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Code</label>
                                <input type="text" name="code" class="form-control" value="{{$gerechtcategorien->code}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Naam</label>
                                <input type="text" name="naam" class="form-control" value="{{$gerechtcategorien->naam}}>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
