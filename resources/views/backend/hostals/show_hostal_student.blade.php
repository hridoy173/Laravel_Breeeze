@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">
<nav class="page-breadcrumb">

                <span class="btn btn-inverse-success" >Hostal Student</span>

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
                      <th>Id</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Department</th>
                        <th>Hostal</th>
                        <th>Roll No</th>
                        <th>Reg No</th>
                        <th>Section</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Create_at</th>
                        <th>Update_at</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($students as $student)

                      <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->father_name }}</td>
                        <td>{{ $student->mother_name }}</td>
                        <td>{{ $student->department->department_name }}</td>
                        <td>{{ $student->hostal->hostal_name }}</td>
                        <td>{{ $student->roll_no }}</td>
                        <td>{{ $student->reg_no }}</td>
                        <td>{{ $student->section }}</td>
                        <td>{{ $student->age }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->created_at }}</td>
                        <td>{{ $student->updated_at }}</td>

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
