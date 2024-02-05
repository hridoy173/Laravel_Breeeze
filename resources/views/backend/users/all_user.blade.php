@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">
<nav class="page-breadcrumb">
<a href="{{ route('add.user') }}" class="btn btn-inverse-success" >Add User</a>

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
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Email_verified_a</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Remember_token</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Create_at</th>
                        <th>Update_at</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>

                    @foreach($users as $user)

                      <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->email_verified_at }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->status }}</td>
                        <td>{{ $user->remember_token }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>{{ $user->updated_at }}</td>



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
