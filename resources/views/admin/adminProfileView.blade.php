@extends('admin.adminDashboard')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">

        <div class="row">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="position-relative">
                <figure class="overflow-hidden mb-0 d-flex justify-content-center">
                  <img src="https://png.pngtree.com/thumb_back/fh260/background/20201028/pngtree-abstract-technology-background-technical-electric-image_443494.jpg" width=100%; alt="profile cover">
                </figure>
                <div class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4">
                  <div>
                    <img class="wd-100 rounded-circle" src="{{ !empty($profileData->photo) ? url('upload/admin_img/'.$profileData->photo) :
                         url('upload/admin_img/no_image.jpg') }}" alt="profile">
                    <span class="h4 ms-3 text-white">{{  $profileData->name }}</span>
                  </div>
                  <div class="d-none d-md-block">
                    <button class="btn btn-primary btn-icon-text">
                      <i data-feather="edit" class="btn-icon-prepend"></i> Edit profile
                    </button>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center p-3 rounded-bottom">
                <ul class="d-flex align-items-center m-0 p-0">
                  <li class="d-flex align-items-center active">
                    <i class="me-1 icon-md text-primary" data-feather="columns"></i>
                    <a class="pt-1px d-none d-md-block text-primary" href="#">Timeline</a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="user"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">About</a>
                  </li>
                  <li class="ms-3 ps-3 border-start d-flex align-items-center">
                    <i class="me-1 icon-md" data-feather="users"></i>
                    <a class="pt-1px d-none d-md-block text-body" href="#">Friends <span class="text-muted tx-12">3,765</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

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

                    <h6 class="card-title">Admin Update Form</h6>

                    <form method="post" class="forms-sample" action="{{ route('admin.profile.store') }}"
                    enctype='multipart/form-data' >
                    @csrf
                    @method('put')

                    <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="username" value="{{ $profileData->username }}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="name" value="{{ $profileData->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{ $profileData->email }} ">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="phone" value="{{ $profileData->phone }}">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="exampleInputUsername1" name="address" value="{{ $profileData->address }}">
                        </div>
                        <div class="mb-3">
                            <label for="photo" class="form-label">Photo</label>
                            <input type="file" class="form-control" id="uploadImage" name="photo">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label"></label>
                            <img id="showImage" class="wd-80 rounded-circle" src="{{ !empty($profileData->photo) ? url('upload/admin_img/'.$profileData->photo) :
                             url('upload/admin_img/no_image.jpg') }}" alt="photo">
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Update</button>

                    </form>

              </div>
                 </div>

            </div>
          </div>
          <!-- middle wrapper end -->

 </div>

</div>




<script type="text/javascript">

  $(documnet).ready(function() {

    $('#uploadImage').change(function(e){

        var reader = new FileReader();
            reader.onload = function (e) {
               $('#showImage').attr('src', e.target.result);
            };

            reader.readAsDataURL(e.target.files[0]);
    });

  });

</script>


@endsection
