@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div style="margin-left:20px">
                <form action="{{ url('student/store') }}" method="post">
                @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-1 col-form-label">Full Name</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="full_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="address">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Level</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="level">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputPassword3" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">GPA</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="gpa">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-1 col-form-label">Gander</label>
                        <select class="form-select" aria-label="Default select example" name="gander">
                            <option selected>choose one</option>
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Picture</label>
                        <div class="col-sm-4">
                        <input type="file"  name="picture">
                        </div>
                    </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </div>
    </section>
</div>
@endsection
