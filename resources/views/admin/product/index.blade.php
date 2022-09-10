@extends('layouts.app')

@section('content')

<main>
    <div class="container">
        <div class="justify-content-center">
            <a href="{{ route('product.create') }}" class="btn btn-primary m-3">Add Product</a>
            <table class="table" id="yourselector">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">product id</th>
                    <th scope="col">photo</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($Products as $product)
                <tr>

                    <td>{{ $product->id }}</td>
                   <td> <img src="{{ getImage($product->image) }}" alt="image" height="100px" width="100px"  class="mb-4" /></td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ date('Y-m-d', strtotime($product->date)) }}</td>
                    <td>{{ $product->price }}</td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-info">Edit</a>
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
