@extends('layouts.app')
@section('title', 'Home')
@section('content')
<div class="container p-y-125">
    <div class="card">
      <div class="card-header"> Invoice <strong>{{ $order['created_at'] }}</strong>
        <span class="float-right text-danger">
          <strong>Status:</strong> {{ $order['status'] }} </span>
      </div>
      <div class="card-body">
        <div class="row mb-4">
          <div class="col-sm-6">
            <h6 class="mb-3">Order Detail : </h6>
            <div>
              <strong>{{ $order['name'] }}</strong>
            </div>
            <div>Phone : {{ $order['phone'] }}</div>
            <div>Email : {{ $order['email'] }}</div>
            <div>Booking Date : {{ $order['bookingdate'] }}</div>
            <div>Country : {{ $order['country'] }}</div>
          </div>
        </div>
        <div class="table-responsive-sm">
          <table class="table table-striped">
            <thead>
              <tr>
                <th class="center">#</th>
                <th>Item</th>
                <th>Description</th>
                <th class="right">Unit Cost</th>
                <th class="center">Qty</th>
              </tr>
            </thead>
            <tbody>
            <tr>
                <td class="center">1</td>
                <td class="left strong">{{$order->tour->name}}</td>
                <td class="left">Tour Packet</td>
                <td class="right">{{$order->tour->price}}</td>
                <td class="center">1</td>
            </tr>
            @foreach ($order->Orderaddons as $i => $items)
              <tr>
                <td class="center">{{$i+2}}</td>
                <td class="left strong">{{$items->Addons->name}}</td>
                <td class="left">Addons</td>
                <td class="right">{{$items->Addons->price}}</td>
                <td class="center">1</td>
              </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-5"></div>
          <div class="col-lg-4 col-sm-5 ms-auto">
            <table class="table table-clear">
              <tbody>
                <tr>
                  <td class="left">
                    <strong>People</strong>
                  </td>
                  <td class="right">{{$order['qty']}}</td>
                </tr>
                <tr>
                  <td class="left">
                    <strong>Total</strong>
                  </td>
                  <td class="right">
                    <strong>{{ $order['total_price'] }}</strong>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
