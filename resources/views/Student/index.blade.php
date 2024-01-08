@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div style="margin-left:20px">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Student Table</h3>
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
                      <th>Full Name</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Level</th>
                      <th>GPA</th>
                      <th>Gander</th>
                      <th>Picture</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->full_name}}</td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->level}}</td>
                            <td>{{$student->gpa}}</td>
                            <td>
                            @if($student->gander == 1)
                                male
                            
                            @else
                               female
                            
                            @endif
                            </td>
                            <td>
                                @if($student->picture)
                                    <img src="data:image/png;base64,{{ base64_encode($teacher->picture) }}" alt="Picture">
                                @else
                                    <p>No Picture Found</p>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <a href="{{url('student/create')}}"><button class="btn btn-primary">New Student</button></a>
          </div>
        </div>
        </div>
    </section>
</div>
@endsection

