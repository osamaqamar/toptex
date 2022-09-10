@extends('layouts.app')

@section('content')

    <main>
        <div class="container">
            <div class="justify-content-center">
                <table class="table border-primary" id="yourselector">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">phone Number</th>
                        <th scope="col">Customer Address</th>
                        <th scope="col">Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as  $order)
                    <tr>
                        <td>Ord_<b>{{ $order->id }}</b></td>
                        <td>{{ $order->product_id }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->phone }}</td>
                        <td>{{ $order->address }}</td>
                        @if($order->date < date('Y-m-d'))
                            <td><label class="badge badge-danger">{{ date('Y-m-d',strtotime($order->date)) }}</label></td>
                        @else
                            <td><h5><label class="badge badge-success">{{ date('Y-m-d',strtotime($order->date)) }}</label></h5></td>
                        @endif

                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </main>

    <script type="text/javascript" src="~/Scripts/jquery.js"></script>
    <script type="text/javascript" src="~/Scripts/data-table/jquery.dataTables.js"></script>

    <script>
        $(document).ready(function () {
            $.noConflict();
            var table = $('#yourselector').DataTable({
                "bSort" : false
            });
        });
    </script>

@endsection
