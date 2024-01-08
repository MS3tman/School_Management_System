@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div style="margin-left:20px">
                <form action="{{ url('subject/store') }}" method="post">
                @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Subject Name</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="price">
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </section>
</div>
@endsection
