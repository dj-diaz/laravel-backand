@extends('layouts')

@section('content')
    <div class="container">
        <hr>
        <div class="col-lg-12 table-responsive container">
            <a class="btn btn-default" href=""><span class="glyphicon glyphicon-plus"></span> Add</a>
            <hr>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Todo Id</th>
                        <th>Todo Title</th>
                        <th>Todo Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($todos as $todo)
                            <td>{{ $todo->id }}</td>
                            <td>{{ $todo->title }}</td>
                            <td>{{ $todo->description }}</td>
                            <td><button type="button" class="btn btn-success" aria-label="Left Align">
                              <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit
                            </button></td>
                            <td><button type="button" class="btn btn-danger" aria-label="Left Align">
                              <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Delete
                            </button></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
                
            
        </div>
    </div>
   
@stop
