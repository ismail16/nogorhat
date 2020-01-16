
@extends('author/layouts/dashboard')
@section('title','Author dashboard')

@section('author-content')
    <div class="col-sm-10 col-sm-offset-1 card">
    <h4 class="text-center p-3">Customer Orders</h4>
    <div class="row">
        @if(session()->has('message'))
        <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
            <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                {{session('message')}}
            </div>
        </div>
        @endif
        <div class="container">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#SL</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Phone</th>
                            <th class="text-center">Shipping Address</th>
                            <th class="text-center">Total Ammount</th>
                            <th class="text-center">Payment</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td class="text-center">{{ $loop->index+1 }}</td>
                            <td class="text-center">{{ $order->name }}</td>
                            <td class="text-center">{{ $order->phone_no }}</td>
                            <td class="text-center">{{ $order->shipping_address }}</td>
                            <td class="text-center">{{ $order->payment->amount }} Tk</td>
                            <td class="text-center">
                                @if($order->payment->status == 1 )
                                <span class="badge badge-success p-1">
                                    <i class="fa fa-check-circle"></i> Paid
                                </span>
                                @else
                                <span class="badge badge-warning p-1">
                                    <i class="fa fa-spinner"></i> Pending
                                </span>
                                @endif

                            </td>
                            <td class="text-center">
                                <a href="{{route('author.invoice', $order->id)}}"
                                    class="btn-success btn-sm"><i class="fa fa-eye"></i></a>

                                    <a href="#" class="btn-danger btn-sm  table-action-btn on_delete"
                                    data-content="{{$loop->index+1}}"><i
                                    class="fa fa-trash"></i></a>

                                    <form id="on_delete{{$loop->index+1}}"
                                        action="{{route('author.order_delete', $order->id)}}"
                                        method="PUT" class="delete"
                                        data-content="{{$order->id}}"
                                        style="display: none;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
