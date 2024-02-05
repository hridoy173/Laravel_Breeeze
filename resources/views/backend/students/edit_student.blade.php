@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">

    <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

                    <h6 class="card-title">Add Student</h6>

                    <form method="post" class="forms-sample" action="/update/student/{{ $student->id }}" >
                    @csrf
                    @method('put')


                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror "
                            id="name" name="name" value="{{ $student->name }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="father_name" class="form-label">Father Name</label>
                            <input type="text" class="form-control @error('father_name') is-invalid @enderror"
                            id="father_name" name="father_name" value="{{ $student->father_name }}" >
                            @error('father_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="mother_name" class="form-label">Mother Name</label>
                            <input type="text" class="form-control @error('mother_name') is-invalid @enderror"
                            id="mother_name" name="mother_name" value="{{ $student->mother_name }}">
                            @error('mother_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age</label>
                            <input type="text" class="form-control @error('age') is-invalid @enderror"
                            id="age" name="age" value="{{ $student->age }}" >
                            @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" value="{{ $student->email }}" >
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <input type="text" class="form-control @error('section') is-invalid @enderror"
                            id="section" name="section" value="{{ $student->section }}">
                            @error('section')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="roll_no" class="form-label">Roll No</label>
                            <input type="text" class="form-control @error('roll_no') is-invalid @enderror"
                            id="roll_no" name="roll_no" value="{{ $student->roll_no }}" >
                            @error('roll_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="reg_no" class="form-label">Reg No</label>
                            <input type="text" class="form-control @error('reg_no') is-invalid @enderror"
                            id="reg_no" name="reg_no" value="{{ $student->reg_no }}" >
                            @error('reg_no')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea type="text" class="form-control @error('address') is-invalid @enderror"
                            id="address" name="address" >{{ $student->address }}</textarea>
                            @error('address')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary me-2">Save</button>

                    </form>

              </div>
                 </div>

            </div>
          </div>
          </div>


@endsection
