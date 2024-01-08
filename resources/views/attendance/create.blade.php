@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div style="margin-left:20px">
                <form action="{{ url('attendance/store') }}" method="post">
                @csrf
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-1 col-form-label">History</label>
                        <div class="col-sm-4">
                        <input type="date" class="form-control" id="inputEmail3" value="{{date('m/d/y')}}" name="history">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Teacher Name</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="teacher_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Student Name</label>
                        <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPassword3" name="student_name">
                        </div>
                    </div>
                    
                <button type="submit" class="btn btn-primary">Done</button>
            </form>
        </div>
    </section>
</div>
@endsection
