@extends('admin.layouts.master')
@section('title','All Payment')

@push('css')
    <link rel="stylesheet" href="{{asset('backend_assets/plugins/datatables/dataTables.bootstrap4.css')}}">
@endpush

@section('content')
    <section class="content">
        <div class="row">
            @if(session()->has('message'))
                <div class="col-lg-12 col-xl-12 d-flex justify-content-center">
                    <div class="alert alert-success text-center pr-3 pl-3 p-1 mb-1">
                        {{session('message')}}
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
                                    <th class="text-center">Order Id</th>
                                    <th class="text-center">User ID</th>
                                    <th class="text-center">Transaction ID</th>
                                    <th class="text-center">Payment Method</th>
                                    <th class="text-center">Ammount</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment)
                                <tr>
                                    <td class="text-center">{{ $loop->index+1 }}</td>
                                    <td class="text-center">{{ $payment->name }}</td>
                                    <td class="text-center">{{ $payment->order_id }}</td>
                                    <td class="text-center">{{ $payment->user_id }}</td>
                                    <td class="text-center">
                                        <span style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; width: 80px;">
                                            {{ $payment->transaction_id }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; width: 50px; ">
                                            {{ $payment->payment_method }}
                                        </span>
                                    </td>
                                    <td class="text-center">{{ $payment->amount }}</td>
                                    <!-- <td>{{ $payment->receipt_url }}</td> -->
                                    <td class="text-center">
                                        <a href="{{route('admin.payment.edit', $payment->id)}}"
                                           class="btn btn-xs btn-success"><i class="fa fa-eye"></i></a>

                                        <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete"
                                           data-content="{{$loop->index+1}}"><i
                                                    class="fa fa-trash"></i></a>

                                        <form id="on_delete{{$loop->index+1}}"
                                              action="{{route('admin.payment.destroy', $payment->id)}}"
                                              method="post" class="delete"
                                              data-content="{{$payment->id}}"
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
@endpush
