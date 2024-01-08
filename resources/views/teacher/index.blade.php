@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div style="margin-left:20px">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Teacher Table</h3>
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
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Departmant</th>
                      <th>salary</th>
                      <th>Gander</th>
                      <th>Picture</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->full_name}}</td>
                            <td>{{$teacher->phone_number}}</td>
                            <td>{{$teacher->address}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->department}}</td>
                            <td>{{$teacher->salary}}</td>
                            <td>
                            @if($teacher->gander == 1)
                                male
                            
                            @else
                               female
                            
                            @endif
                            </td>
                            <td>
                                @if($teacher->picture)
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
            <a href="{{url('teacher/create')}}"><button class="btn btn-primary">New Teacher</button></a>
          </div>
        </div>
        </div>
    </section>
</div>
@endsection

