@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">


        {{-- Filters section --}}
        <div class="col-3">
            <form action="{{ route('products') }}" method="GET">
                <div class="col mt-2">

                    <div class="type p-2 mb-2">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Category</h6>
                        </div>

                        @foreach ($types as $type)
                            <div class="d-flex justify-content-between mt-2">
                                <div class="form-check"> <input class="form-check-input" type="checkbox"
                                        value="{{ $type->id }}" id="type-{{ $type->id }}" name="type_id">
                                    <label class="form-check-label"
                                        for="type-{{ $type->id }}">{{ $type->type }}</label> </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="brand p-2">
                        <div class="heading d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase">Brand</h6>
                        </div>
                        @foreach ($brands as $brand)
                            <div class="d-flex justify-content-between mt-2">
                                <div class="form-check"> <input class="form-check-input" type="checkbox"
                                        value="{{ $brand->id }}" id="brand-{{ $brand->id }}" name="brand_id">
                                    <label class="form-check-label"
                                        for="brand-{{ $brand->id }}">{{ $brand->brand }}</label> </div>
                            </div>
                        @endforeach
                    </div>

                    <select class="form-select mb-2" aria-label="Default select example" name="order_by">
                        <option disabled selected>Sort by</option>
                        <option value="newest">Newest</option>
                        <option value="price">Price</option>
                        <option value="type">Type</option>
                    </select>
                    <button class="btn btn-secondary col-12">Filter</button>
                </div>

            </form>

        </div>
        {{-- End of Filters section --}}


        <div class="col-9">
            <div class="row">
                @foreach ($items as $item)
                <div class="col-3 card">
                    <img src="
                    @if ($item->image != null) 
                    {{"storage/product_images/$item->image"}}
                    @else storage/no_image.png
                    @endif
                    " class="card-img-top" alt="image" style="max-height: 18rem">
                    <div class="card-body ">
                        <h5 class="card-title">{{ $item->brand->brand . ' ' . $item->model }}</h5>
                        <p class="card-text">Type: {{ $item->type->type }}</p>
                        <h5>€{{$item->price}}</h5>
                        
                            <div class="text-center mb-1">
                                <a href="{{ route('shop.show', $item->id) }}" class="btn btn-dark">Details</a>
                            </div>
                            <div class="text-center">
                                <a href="{{ route('add.to.cart', $item->id) }}" class="btn btn-dark">Add to cart</a>

                            </div>
                        
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
