@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">

    <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

                    <h6 class="card-title">Add User</h6>

                    <form method="post" class="forms-sample" action="{{ route('add.user.store') }}" >
                    @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror "
                            id="name" name="name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" >
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" >
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select type="text" class="form-select" name="status" id="status">
                            <option value="active">Active</option>
                            <option value="deactive">Diactive</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select type="text" class="form-select" name="role" id="role">
                            <option value="admin">Admin</option>
                            <option value="agent">Agent</option>
                            <option value="user">User</option>
                            </select>
                        </div>




                        <button type="submit" class="btn btn-primary me-2">Save</button>

                    </form>

              </div>
                 </div>

            </div>
          </div>
          </div>


@endsection
