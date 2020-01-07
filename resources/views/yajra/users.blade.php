@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-bordered" id="laravel_datatable">
                    <thead>
                       <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Created at</th>
                       </tr>
                    </thead>
                 </table>
                </div>
            </div>
        </div>
    </div>
</div>
@section('javascript')
<script language="javascript" type="text/javascript">>
    $(document).ready( function () {
     $('#laravel_datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('userlist') }}",
            columns: [
                     { data: 'id', name: 'id' },
                     { data: 'name', name: 'name' },
                     { data: 'email', name: 'email' },
                     { data: 'created_at', name: 'created_at' }
                  ]
         });
      });
   </script>
@endsection
@endsection
