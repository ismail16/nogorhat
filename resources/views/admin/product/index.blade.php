@extends('admin.layouts.master')
@section('title','All Product')

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
                            <a href="{{route('admin.product.create')}}" class="pull-right btn btn-sm btn-primary float-right ml-2"> <i class="fa fa-plus"></i> Add New</a>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>#SL</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                <?php
                                    $product_images = App\Models\ProductImage::where('product_id', $product->id )->get();
                                    $product_image = $product_images->toArray();
                                ?>
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td><img height="50" width="50" src="{{asset('images/product_image/'.$product_image[0]['image'])}}"
                                             alt="{{$product->name}}"></td>
                                    <td>{{ \App\Models\Category::find($product->category_id)->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        @if($product->status == 1)
                                            <a href="" class="btn btn-xs btn-success">Active</a>
                                        @else
                                            <a href="" class="btn btn-xs btn-danger">Deactive</a>
                                        @endif

                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.product.edit', $product->id)}}"
                                           class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>

                                        <a href="#" class="btn btn-xs btn-danger table-action-btn on_delete" data-content="{{$loop->index+1}}"><i class="fa fa-trash"></i></a>

                                        <form id="on_delete{{$loop->index+1}}"
                                              action="{{route('admin.product.destroy', $product->id)}}"
                                              method="post" class="delete"
                                              data-content="{{$product->id}}"
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
