@extends('admin.layouts.master')
@section('title','All Category')

@push('css')
<link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables/dataTables.bootstrap4.css')}}">
@endpush

@section('content')
<section class="content session_contect">
        <div class="row">
            @if(session()->has('message'))
                <div class="col-lg-12 col-xl-12 d-flex justify-content-center session_message">
                    <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                        {{session('message')}}
                        <button type="button" class="close ml-4" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">#SL</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Shipping Address</th>
                                    <th class="text-center">Payment</th>
                                    <th class="text-center">Amin Approval</th>
                                    <th class="text-center">Status</th>
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
                                    <td class="text-center">
                                        @if($order->payment->status == 1)
                                            <a href="{{route('admin.payment.edit', $order->payment->id)}}" class="btn btn-xs btn-success"> <i class="fa fa-check-circle"> Confirmed</i>
                                        @else
                                            <a href="{{route('admin.payment.edit', $order->payment->id)}}" class="btn btn-xs btn-warning"> <i class="fa fa-spinner"> Pending</i></a>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($order->is_seen_by_admin == 1 && $order->is_completed == 0)
                                            <a href="{{route('admin.order.show', $order->id)}}" class="btn btn-xs btn-success"> 
                                                <i class="fa fa-check-circle"> Confirmed </i>
                                            </a>
                                        @elseif($order->is_seen_by_admin == 1 && $order->is_completed == 1)
                                            <a href="{{route('admin.order.show', $order->id)}}" class="btn btn-xs btn-success"> 
                                                <i class="fa fa-check-circle"> Order Completed</i>
                                            </a>
                                        @else
                                            <a href="{{route('admin.order.show', $order->id)}}" class="btn btn-xs btn-warning"> <i class="fa fa-spinner"> Pending</i></a>

                                        @endif
                                    </td>
                                    <td class="text-center">
                                        @if($order->is_seen_by_admin == 1 && $order->is_completed == 1)
                                            <a href="#" class="btn btn-xs btn-success"> <i class="fa fa-check-circle"> Order Completed</i>
                                        @elseif($order->is_seen_by_admin == 1 && $order->is_completed == 0)
                                            <a href="#" class="btn btn-xs btn-warning"> 
                                                <i class="fa fa-spinner"> Pending</i>
                                            </a>
                                            <span class="badge badge-primary p-1">
                                                <i class="fa fa-check-circle"></i> On the Way
                                            </span>
                                        @else
                                            <a href="#" class="btn btn-xs btn-warning"> 
                                                <i class="fa fa-spinner"> Pending</i>
                                            </a>
                                        @endif
                                    </td>                                    
                                    <td class="text-center">
                                        <a href="{{route('admin.order.show', $order->id)}}"
                                            class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>

                                            <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete"
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
        </div>
    </section>

{{--     <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit-modal-label">Payment Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pb-0" id="attachment-body-content">
                    <form id="edit-form" class="form-horizontal p-2 pb-0" method="POST" action="">
                        <div class="form-group row">
                            <label class="col-form-label col-md-5">Order ID </label>
                            <input type="text" name="order_id" class="form-control form-control-sm col-md-7" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-5">Payment Method </label>
                            <input type="text" name="peyment_method" class="form-control form-control-sm col-md-7" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-5">Transaction ID</label>
                            <input type="text" name="transaction_id" class="form-control form-control-sm col-md-7" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-5">Total Ammount</label>
                            <input type="text" name="totalAmount" class="form-control form-control-sm col-md-7" required>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-5">Payment Confirmation</label>
                            <select class="form-control form-control-sm col-md-7" name="">
                                <option value="0">NO</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-xs btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-xs btn-primary" data-dismiss="modal">Confirm</button>
                </div>
            </div>
        </div>
    </div> --}}
    @endsection

    @push('scripts')
    <script src="{{asset('backend_assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('backend_assets/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('js/bootbox.min.js')}}"></script>
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>
    <script>
        $(document).on("click", ".on_delete", function (e) {
            var index = $(this).data('content');

            bootbox.confirm({
                message: "Do you want to remove this?",
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-sm btn-danger'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-sm btn-default'
                    }
                },
                callback: function (result) {
                    if (result) {
                        $("#on_delete" + index).submit();
                    }
                }
            });
        });
    </script>
    <script>
        // $(document).ready(function() {

        //     $(document).on('click', "#edit-item", function() {
        //         $(this).addClass('edit-item-trigger-clicked');

        //         var options = {
        //             'backdrop': 'static'
        //         };
        //         $('#edit-modal').modal(options)
        //     })

        //     $('#edit-modal').on('show.bs.modal', function() {
        //         var el = $(".edit-item-trigger-clicked");
        //         var row = el.closest(".data-row");

        //         var id = el.data('item-id');
        //         var name = row.children(".name").text();
        //         var description = row.children(".description").text();

        //         $("#modal-input-id").val(id);
        //         $("#modal-input-name").val(name);
        //         $("#modal-input-description").val(description);

        //     })

        //     $('#edit-modal').on('hide.bs.modal', function() {
        //         $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
        //         $("#edit-form").trigger("reset");
        //     })
        // })
    </script>

@endpush
