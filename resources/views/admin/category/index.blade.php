
@extends('layouts.app')

@section('content')

    <main>
        <div class="container">
            <div class="justify-content-center">
                <a href="{{ route('category.create') }}" class="btn btn-primary m-3">Add Product</a>
                <table class="table" id="yourselector">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Category id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($catogeries as $key => $catogery)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $catogery->name }}</td>
                        <td>{{ date('Y-m-d', strtotime($catogery->created_at)) }}</td>
                         <td>{{ $catogery->is_active }}</td>
                        <td>
                            <a href="{{ route('category.edit',$catogery->id) }}" class="btn btn-info">Edit</a>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </main>

    <script type="text/javascript" src="~/Scripts/jquery.js"></script>
    <script type="text/javascript" src="~/Scripts/data-table/jquery.dataTables.js"></script>

    <script>$(document).ready(function () {
            $.noConflict();
            var table = $('#yourselector').DataTable({
                "bSort" : false
            });
        });</script>

@endsection
