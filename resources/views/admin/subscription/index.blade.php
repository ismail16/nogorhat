@extends('admin.layouts.master')
@section('title','All Payment')

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
                                    <th class="text-center">IP Address</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subscriptions as $subscription)
                                <tr>
                                    <td class="text-center">{{ $loop->index+1 }}</td>
                                    <td class="text-center">{{ $subscription->ip }}</td>
                                    <td class="text-center">{{ $subscription->email }}</td>
                                    <td class="text-center">

                                        <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete"
                                           data-content="{{$loop->index+1}}"><i
                                                    class="fa fa-trash"></i></a>

                                       {{--  <form id="on_delete{{$loop->index+1}}"
                                              action="{{route('admin.contact.destroy', $subscription->id)}}"
                                              method="post" class="delete"
                                              data-content="{{$subscription->id}}"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form> --}}
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
