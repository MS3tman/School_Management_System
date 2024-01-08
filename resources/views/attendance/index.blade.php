@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div style="margin-left:20px">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Attendance Table</h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 450px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>History</th>
                      <th>Teacher Name</th>
                      <th>Student Name</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($attendances as $attendance)
                        <tr>
                            <td>{{$attendance->id}}</td>
                            <td>{{$attendance->history}}</td>
                            <td>{{$attendance->teacher_name}}</td>
                            <td>{{$attendance->student_name}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <a href="{{url('attendance/create')}}"><button class="btn btn-primary">New Attendance</button></a>
          </div>
        </div>
        </div>
    </section>
</div>
@endsection

