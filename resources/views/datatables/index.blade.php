@extends('layouts.datat')

@section('content')
    <div class="container">
        <table id="users" class="table table-hover table-condensed" style="width:100%">
            <thead>
            <tr>
                <th>Id</th>
                <th>Book Title</th>
                <th>Author</th>

            </tr>
            </thead>
        </table>
    </div>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            oTable = $('#books').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax":  "{{ route('datatable.getposts') }}",
                "columns": [
                    {data: 'id', name: 'id'},
                    {data: 'book_title', name: 'book_title'},
                    {data: 'author', name: 'author'}

                ]
            });
        });
    </script>

    @endsection