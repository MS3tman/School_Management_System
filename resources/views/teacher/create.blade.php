@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div style="margin-left:20px">
                <form action="{{ url('teacher/store') }}" method="post">
                @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-1 col-form-label">Full Name</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputEmail3" name="full_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="phone_number">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Address</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="address">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Email</label>
                        <div class="col-sm-4">
                        <input type="email" class="form-control" id="inputPassword3" name="email">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Departmant</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="department">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-1 col-form-label">Salary</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="salary">
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-1 col-form-label">Gander</label>
                        <select class="form-select" aria-label=".form-select-sm example" name="gander">
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
