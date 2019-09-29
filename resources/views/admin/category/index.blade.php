@extends('admin.layouts.master')
@section('title','All Category')

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
                        <div class="text-right mb-2">
                            <a href="{{route('admin.category.create')}}" class="pull-right btn btn-sm btn-primary"> <i
                                    class="fa fa-plus"></i> Add New</a>
                        </div>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>#SL</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $category->name }}</td>
                                <td><img height="65" width="100" src="{{asset('images/category_image/'.$category->image)}}"
                                         alt="{{$category->name}}"></td>
                                <td>{{ $category->status }}</td>
                                <td class="text-center">
                                    <a href="{{route('admin.category.edit', $category->id)}}"
                                       class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>

                                    <a href="#" class="btn btn-sm btn-danger table-action-btn on_delete"
                                       data-content="{{$loop->index+1}}"><i
                                                class="fa fa-trash"></i></a>

                                    <form id="on_delete{{$loop->index+1}}"
                                          action="{{route('admin.category.destroy', $category->id)}}"
                                          method="post" class="delete"
                                          data-content="{{$category->id}}"
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
                        className: 'btn-vinndo'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-default'
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