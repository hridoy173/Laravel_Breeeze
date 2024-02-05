@extends('admin.adminDashboard')

@section('admin')



<div class="page-content">

<div class="row profile-body">

          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <h2 class="card-title">{{  $profileData->name }}</h2>
                </div>
                <p>Hi! I'm Admin of shekhhridoy.com I. We hope you enjoy the design and quality of Social.</p>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Username</label>
                  <p class="text-muted">{{  $profileData->username }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
                  <p class="text-muted">{{  $profileData->address }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{  $profileData->email }}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                  <p class="text-muted">{{  $profileData->phone }}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->


          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

                    <h6 class="card-title">Admin change Password</h6>

                    <form method="post" class="forms-sample" action="{{ route('admin.update.password') }}" >
                    @csrf
                    @method('put')

                        <div class="mb-3">
                            <label for="old_password" class="form-label">Old Password</label>
                            <input type="password" class="form-control @error('old_password') is-invalid @enderror "
                            id="old_password" name="old_password" ">
                            @error('old_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" name="new_password" ">
                            @error('new_password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm Password </label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password">
                        </div>

                        <button type="submit" class="btn btn-primary me-2">Change Password</button>

                    </form>

              </div>
                 </div>

            </div>
          </div>
          <!-- middle wrapper end -->

 </div>

</div>

@endsection
