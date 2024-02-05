@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">

    <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

                    <h6 class="card-title">Add Teacher</h6>

                    <form method="post" class="forms-sample" action="{{ route('add.teacher.store') }}" >
                    @csrf


                        <div class="mb-3">
                            <label for="teacher_name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror "
                            id="name" name="name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror "
                            id="email" name="email">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="department" class="form-label">Department</label>
                            <input type="text" class="form-control @error('department') is-invalid @enderror "
                            id="department" name="department">
                            @error('department')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="education_background" class="form-label">Education Background</label>
                            <textarea type="text" class="form-control @error('education_background') is-invalid @enderror"
                            id="education_background" name="education_background" ></textarea>
                            @error('education_background')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea type="text" class="form-control @error('address') is-invalid @enderror"
                            id="address" name="address" ></textarea>
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
