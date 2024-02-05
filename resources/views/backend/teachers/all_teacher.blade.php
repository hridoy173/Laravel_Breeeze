@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">
<nav class="page-breadcrumb">

                <a href="{{ route('add.teacher') }}" class="btn btn-inverse-success" >Add Teacher</a>

				</nav>

			<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">Data Table</h6>
                <div class="table-responsive">

                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Education Background</th>
                        <th>Address</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($allTeacher as $teacher)

                      <tr>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->department }}</td>
                        <td>{{ $teacher->education_background }}</td>
                        <td>{{ $teacher->address }}</td>
                        <td>
                            <a href="{{ route('edit.teacher',$teacher->id) }}" class="btn btn-sm btn-inverse-primary">Edit</a>
                            <a href="{{ route('delete.teacher',$teacher->id) }}" onclick="alert('Do you want to delete type property?')" class="btn btn-sm btn-inverse-warning">Delete</a>
                        </td>
                      </tr>
                    @endforeach

                    </tbody>
                  </table>

                </div>
              </div>
            </div>
					</div>
				</div>
</div>


<!-- pahe-content-end  -->

@endsection
