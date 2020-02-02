@extends('admin.layouts.master')
@section('title','All about')

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
                            <a href="{{route('admin.about.create')}}" class="pull-right btn btn-sm btn-primary float-right ml-2"> <i class="fa fa-plus"></i> Add New</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($abouts as $about)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $about->title }}</td>
                                    
                                    <td class="text-center">
                                        <a href="{{route('admin.about.edit', $about->id)}}"
                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                                        <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete" data-content="{{$loop->index+1}}"><i class="fa fa-trash"></i></a>

                                        <form id="on_delete{{$loop->index+1}}"
                                              action="{{route('admin.about.destroy', $about->id)}}"
                                              method="post" class="delete"
                                              data-content="{{$about->id}}"
                                              style="display: none;">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
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
