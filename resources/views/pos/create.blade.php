@extends('layouts.main') @section('title', 'Point Of Sale')
@section('content')
<section>
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Select Categories</h5>
                    <form
                        action="{{ route('products.store') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div align="left" class="mt2">
                            <a
                                href="{{ url()->previous() }}"
                                class="btn btn-warning"
                                >Back</a
                            >
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label"
                                >Category Name</label
                            >
                            <select
                                name="category_id"
                                id=""
                                class="form-control"
                            >
                                <option value="">Select One</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->category_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="col-form-label">Product Name *</label>
                            <select name="" id="product_id" class="form-control">
                                <option value="">Select One</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">
                                Save
                            </button>
                            <button class="btn btn-danger" type="reset">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Select Categories</h5>
                    <form
                        action="{{ route('products.store') }}"
                        method="post"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <div align="left" class="mt2">
                            <a
                                href="{{ url()->previous() }}"
                                class="btn btn-warning"
                                >Back</a
                            >
                        </div>
                        <div class="mb-3">
                            <label for="" class="col-form-label"
                                >Category Name</label
                            >
                            <select
                                name="category_id"
                                id=""
                                class="form-control"
                            >
                                <option value="">Select One</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->category_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="" class="col-form-label">Product Name *</label>
                            <select name="" id="product_id" class="form-control">
                                <option value="">Select One</option>
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">
                                Save
                            </button>
                            <button class="btn btn-danger" type="reset">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
