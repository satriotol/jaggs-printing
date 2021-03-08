@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Product Detail</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Product Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product Detail</h3>
                        </div>
                        <div class="card-body">
                            <div class="float-sm-right">
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning">Edit</a>
                            </div>
                            <h3 class="text-center">{{$product->title}}</h3>
                            <div class="group text-center">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Price : {{$product->price}}</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Material : {{$product->material}}</h4>
                                    </div>
                                </div>
                                <p>Size : {!!$product->size!!}</p>
                                <div class="row image-group">
                                    <div class="col-md-4">
                                        <h4>Image : <img src="{{asset('storage/'.$product->image)}}" class="img-thumbnail" alt=""></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Price List : <img src="{{asset('storage/'.$product->price_list)}}" class="img-thumbnail" alt=""></h4>
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Colour : <img src="{{asset('storage/'.$product->color)}}" class="img-thumbnail" alt=""></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('script')
<script src="{{asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });

</script>
@endsection
