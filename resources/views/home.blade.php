@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-6">
            <h1>All Orders</h1>
        </div>
    </div>

    <table class="table table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Delivery Date</th>
            <th>Product ID</th>
            <th>Pay Options</th>
            <th>Amount</th>
            <th>Order By</th>
            <th>Order Date</th>
            <th> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></th>
            <th> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></th>
            <th> <span class="glyphicon glyphicon-print" aria-hidden="true"></span></th>
        </tr>

    @foreach($orders as $order)

    @if(($order->status) == 'Delivered')
        <tr style="background: #ff8c8c;">
    @elseif(($order->status) == 'Send')
        <tr style="background: #f5e79e;">
    @elseif(($order->status) == 'Ready')
        <tr style="background: #5cb85c;">
    @else
        <tr>
    @endif
            <td>{{ $order->id }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ $order->delivery_date }}</td>
            <td>{{ $order->product_id }}</td>
            <td>{{ $order->pay_option }}</td>
            <td>{{ $order->amount }}</td>
            <td>{{ $order->order_by }}</td>
            <td>{{ $order->created_at }}</td>
            <td>
                {{ Form::open(['route' => ['order.destroy', $order->id], 'method' => 'delete']) }}
                    <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                {{ Form::close() }}
            </td>
            <td><a href="{{ URL::route('order.edit',$order->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></td>
            <td><a href="{{ URL::route('order.show',$order->id) }}" class="btn btn-primary"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a></td>
        </tr>

    @endforeach

    </table>

    <center>{!! $orders->render() !!}</center>

</div>
@endsection
