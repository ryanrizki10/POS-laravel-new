@extends('layouts.main')
@section('title', 'Data Categories')

@section('content')
<section>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">New Categories</h5>
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="col-form-label">Category Name</label>
                            <input type="text" class="form-control" name="category_name" placeholder="Enter Category" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <button class="btn btn-danger" type="reset">Cancel</button>
                            <a href="{{ url()->previous() }}" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
