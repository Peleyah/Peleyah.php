@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Novo produto</h2>
        </div>
    </div>
    <hr>
    <div class="createForm mx-auto">
        <form action="/products" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <input type="text" name="productname" class="form-control" id="productname"
                        placeholder="Product name">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <textarea name="productdesc" class="form-control" id="productdesc"
                        placeholder="Product description"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <label for="img">Product Image:</label>
                    <input type="file" name="image" class="form-control-file">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary">Create product</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
</div>
@endsection