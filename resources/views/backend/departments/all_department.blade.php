@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">
<nav class="page-breadcrumb">

                <a href="{{ route('add.department') }}" class="btn btn-inverse-success" >Add Department</a>

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
                        <th>Code</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($allDepartment as $department)

                      <tr>
                        <td><a href="{{ route('all.department.student',$department->id) }}">{{ $department->department_name }}</a></td>
                        <td>{{ $department->department_code }}</td>
                        <td>
                            <a href="{{ route('edit.department',$department->id) }}" class="btn btn-sm btn-inverse-primary">Edit</a>
                            <a href="{{ route('delete.department',$department->id) }}" onclick="alert('Do you want to delete type property?')" class="btn btn-sm btn-inverse-warning">Delete</a>
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
