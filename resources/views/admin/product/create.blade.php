@extends('layouts.admin')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{isset($product)? 'Edit Product':'Product Form'}}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{isset($product)? 'Edit Product':'Product Form'}}</li>
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
                            <h3 class="card-title">{{isset($product)? 'Edit Product':'Product Form'}}</h3>
                        </div>
                        @include('admin.partials.errors')
                        <form role="form"
                            action="@isset($product) {{route('product.update',$product->id)}} @endisset @empty($product) {{route('product.store')}} @endempty"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if(isset($product))
                            @method('PUT')
                            @endif
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" type="text" class="form-control" id="Product"
                                        placeholder="Enter Product..." value="{{isset($product) ? $product->title:''}}">
                                </div>
                                <div class="form-group">
                                    <label for="Price">Price</label>
                                    <input name="price" type="number" class="form-control" id="Product"
                                        placeholder="Enter Price..." value="{{isset($product) ? $product->price:''}}">
                                </div>
                                <div class="form-group">
                                    <label for="Material">Material</label>
                                    <input name="material" type="text" class="form-control" id="Product"
                                        placeholder="Enter Material..." value="{{isset($product) ? $product->material:''}}">
                                </div>
                                <div class="form-group">
                                    <label for="Size">Size</label>
                                    <textarea name="size" class="textarea" placeholder="Place some text here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;">
                                        {{isset($product) ? $product->size:''}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="ImageInput">Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="image" type="file" class="custom-file-input" id="ImageInput">
                                            <label class="custom-file-label" for="ImageInput">Choose image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Price List</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="price_list" type="file" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose Price
                                                List</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Colour</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input name="color" type="file" class="custom-file-input"
                                                id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose
                                                Colour</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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
