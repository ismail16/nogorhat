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

                                    <th>#SL</th>
                                    <th>Name</th>
                                    <th>Order Id</th>
                                    <th>User ID</th>
                                    <th>transaction_id</th>
                                    <th>payment_method</th>
                                    <th>amount</th>
                                    <!-- <th>receipt_url</th> -->
                                    <th>pay_type</th>
                                    <th>card_type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $payment->name }}</td>
                                    <td>{{ $payment->order_id }}</td>
                                    <td>{{ $payment->user_id }}</td>
                                    <td>
                                        <span style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; width: 80px;">
                                            {{ $payment->transaction_id }}
                                        </span>
                                    </td>
                                    <td>
                                        <span style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 1; width: 50px;">
                                            {{ $payment->payment_method }}
                                        </span>
                                    </td>
                                    <td>{{ $payment->amount }}</td>
                                    <!-- <td>{{ $payment->receipt_url }}</td> -->
                                    <td>{{ $payment->pay_type }}</td>
                                    <td>{{ $payment->card_type }}</td>
                                    <td class="text-center">
                                        <a href="{{route('admin.payment.show', $payment->id)}}"
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
