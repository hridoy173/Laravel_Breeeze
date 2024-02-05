@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">

    <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

                    <h6 class="card-title">Update Department</h6>

                    <form method="post" class="forms-sample" action="/update/department/{{ $department->id }}" >
                    @csrf
                    @method('put')


                        <div class="mb-3">
                            <label for="department_name" class="form-label">Department Name</label>
                            <input type="text" class="form-control @error('department_name') is-invalid @enderror "
                            id="department_name" name="department_name" value="{{ $department->department_name }}">
                            @error('department_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="department_code" class="form-label">Department Code</label>
                            <input type="text" class="form-control @error('department_code') is-invalid @enderror "
                            id="department_code" name="department_code" value="{{ $department->department_code }}">
                            @error('department_code')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>




                        <button type="submit" class="btn btn-primary me-2">Update</button>

                    </form>

              </div>
                 </div>

            </div>
          </div>
          </div>


@endsection
