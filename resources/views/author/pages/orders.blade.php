
@extends('author/layouts/dashboard')
@section('title','Author dashboard')

@section('author-content')
<div class="col-sm-10 col-sm-offset-1 card">
    <h4 class="text-center p-3">Customer Orders</h4>


    <div class="row">
        <div class="container">
           <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>phone_no</th>
                        <th>shipping_address</th>
                        <th>is_paid</th>
                        <th>is_completed</th>
                        <th>is_seen_by_admin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->phone_no }}</td>
                        <td>{{ $order->shipping_address }}</td>
                        <td>{{ $order->is_paid }}</td>
                        <td>{{ $order->is_completed }}</td>
                        <td>{{ $order->is_seen_by_admin }}</td>
                        <td class="text-center">
                            <a href="{{route('author.invoice', $order->id)}}"
                             class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>

                             <a href="#" class="btn btn-sm btn-danger table-action-btn on_delete"
                             data-content="{{$loop->index+1}}"><i
                             class="fa fa-trash"></i></a>

                             <form id="on_delete{{$loop->index+1}}"
                              action="{{route('admin.order.destroy', $order->id)}}"
                              method="post" class="delete"
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
