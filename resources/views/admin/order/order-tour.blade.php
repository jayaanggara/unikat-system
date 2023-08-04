@extends('layouts.admin.index')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Order Tour</h1>
</div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name User Order</th>
            <th scope="col">Total Price</th>
            <th scope="col">Booking Date</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($ordertour as $i => $item)
            <tr>
                <th scope="row">{{ $i+1 }}</th>
                <td>{{ $item['name'] }}</td>
                <td>{{ $item['total_price'] }}</td>
                <td>{{ $item['bookingdate'] }}</td>
                <td> {{ $item['status'] }} </td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalOrder{{ $i+1 }}"> View </button>
                    <!-- Modal -->
                    <div class="modal fade" id="ModalOrder{{ $i+1 }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header"> Invoice <strong>{{ $item['created_at'] }}</strong>
                                    <span class="float-right text-danger">
                                        <strong>Status:</strong> {{ $item['status'] }} </span>
                                    </div>
                                    <div class="card-body">
                                    <div class="row mb-4">
                                        <div class="col-sm-6">
                                        <h6 class="mb-3">Id Order :  <a href="/invoice/{{ $item['id'] }}" target="_blank">{{ $item['id'] }}</a></h6>
                                        <h6 class="mb-3">item Detail : </h6>
                                        <div>
                                            <strong>{{ $item['name'] }}</strong>
                                        </div>
                                        <table class="table border mt-3">
                                            <tr>
                                                <td>Phone</td>
                                                <td>:</td>
                                                <td><a href="https://wa.me/{{ $item['phone'] }}" target="_blank">{{ $item['phone'] }}</a></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>:</td>
                                                <td>{{ $item['email'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Booking Date</td>
                                                <td>:</td>
                                                <td>{{ $item['bookingdate'] }}</td>
                                            </tr>
                                            <tr>
                                                <td>Country</td>
                                                <td>:</td>
                                                <td>{{ $item['country'] }}</td>
                                            </tr>
                                        </table>
                                        </div>
                                    </div>
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped border">
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
                                            <td class="left strong">{{$item->tour->name}}</td>
                                            <td class="left">Tour Packet</td>
                                            <td class="right">{{$item->tour->price}}</td>
                                            <td class="center">1</td>
                                        </tr>
                                        @foreach ($item->orderaddons as $i => $items)
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
                                        <div class="col-lg-6 col-sm-5"></div>
                                        <div class="col-lg-6 col-sm-5 ms-auto">
                                        <table class="table table-clear border">
                                            <tbody>
                                            <tr>
                                                <td class="left">
                                                <strong>People</strong>
                                                </td>
                                                <td class="right">{{$item['qty']}}</td>
                                            </tr>
                                            <tr>
                                                <td class="left">
                                                <strong>Total</strong>
                                                </td>
                                                <td class="right">
                                                <strong>{{ $item['total_price'] }}</strong>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
