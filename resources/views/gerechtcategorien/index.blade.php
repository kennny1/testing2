@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h4>LARAVEL</h4>
                        <a href="{{ url('add-gerechtcategorien') }}" class="btn btn-primary float-end">Gerechtcategorien Toevoegen</a>
                    </div>

                    <div class="card-body">
                        <div class="table table table-borderland table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Code</th>
                                    <th>Naam</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($gerechtcategorien as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->naam }}</td>
                                    <td>
                                        <a href="{{ url('edit-gerechtcategorien/'.$item->id) }}" class="btn btn-primary btn-sm">
                                                Edit
                                        </a>
                                    </td>
                                    <td>
{{--                                        <a href="{{ url('delete-gerechtcategorien/'.$item->id) }}" class="btn btn-danger btn-sm">--}}
{{--                                                Delete--}}
{{--                                        </a>--}}
                                        <form action="{{ url('delete-gerechtcategorien/'.$item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Verwijder</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
