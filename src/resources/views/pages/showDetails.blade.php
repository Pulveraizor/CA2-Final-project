@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 border-end">
            <div class="images p-3">
                <div class="text-center p-4"> 
                    <img id="main-image" src="
                    @if ($product->image != null) 
                    {{URL::asset("storage/product_images/$product->image")}}
                    @else {{URL::asset('storage/no_image.png')}}
                    @endif
                    " width="250" />
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form action="" method="post">
                @csrf
                <div class="product p-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <a href="/shop" class="ml-1 text-decoration-none link-secondary">Back</a> </div> <i class="fa fa-shopping-cart text-muted"></i>
                    </div>
                    <div class="mt-4 mb-3">
                        <h5 class="text-uppercase">{{$product->brand->brand}}</h5>
                        <h5 class="text-uppercase">{{$product->model}}</h5>
                        <div class="price d-flex flex-row align-items-center">
                            <div class="ml-2">{{$product->price}} EUR</div>
                            <input type="hidden" value="{{$product->price}}" name="total">
                        </div>
                    </div>
                    <p class="about">{{$product->description}}</p>
                    <input type="hidden" value="{{$product->id}}" name="product_id">
                    @error('product_id')
                    <span>{{$message}}</span>
                    @enderror
                    <div class="cart mt-4 align-items-center">
                        <a href="{{route('add.to.cart', $product->id)}}" class="btn btn-dark text-uppercase mr-2 px-4">Add to cart</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection