@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Admin panel
            </div>
            <div class="card-body">

                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#newPost">
                    New post
                </button>

                <form action="{{ route('post') }}" method="post">
                    @csrf
                    <div class="modal" tabindex="-1" id="newPost">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New post</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="title">Subject</span>
                                        <input type="text" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text">Message</span>
                                        <textarea class="form-control" aria-label="With textarea" id="body" name="body"></textarea>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Post it</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <button type="button" class="btn btn-secondary" id="createNewButton" data-bs-toggle="modal"
                    data-bs-target="#createProduct">
                    Create new product
                </button>

                <div class="modal" tabindex="-1" id="createProduct">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header"> <button type="button" class="btn-close"
                                    data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Type</label>
                                    <select class="form-select" id="productTypes">
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupSelect01">Brand</label>
                                    <select class="form-select" id="brandTypes">
                                    </select>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-secondary">Create</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.getElementById('createNewButton').addEventListener('click', function() {
            fetch('http://localhost:8087/getforadmin')
                .then(response => response.json())
                .then(data => {

                    let productTypes = document.getElementById('productTypes');
                    let productBrands = document.getElementById('brandTypes');

                    for (let i of data) {
                        let typeOption = document.createElement('option');
                        typeOption.innerHTML = i.type.type;
                        productTypes.appendChild(typeOption);

                        let brandOption = document.createElement('option');
                        brandOption.innerHTML = i.brand.brand;
                        productBrands.appendChild(brandOption);
                    }
                });
        })
    </script>
@endsection
