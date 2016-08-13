@extends('layouts')

@section('content')

    <div class="container">
        <hr>
        <div class="col-lg-12 table-responsive container">
            <button class="btn btn-default" href="" id="addModal" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-plus"></span> Add
            </button>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

        
    
@stop

@section('custom-js')
    <script>
    $('#addModal').on('shown.bs.modal', function () {
        $('#myModal').focus()
     })
     </script>
@endsection
