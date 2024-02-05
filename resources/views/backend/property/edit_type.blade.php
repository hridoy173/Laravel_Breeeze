@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">

    <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
            <div class="card">
              <div class="card-body">

                    <h6 class="card-title">Add property type</h6>

                    <form method="post" class="forms-sample" action="/update/type/{{ $type->id }}" >
                    @csrf
                    @method('put')


                        <div class="mb-3">
                            <label for="type_name" class="form-label">Type Name</label>
                            <input type="text" class="form-control @error('type_name') is-invalid @enderror "
                            id="type_name" name="type_name" value="{{ $type->type_name }}">
                            @error('type_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="type_icon" class="form-label">Type Icon</label>
                            <input type="text" class="form-control @error('type_icon') is-invalid @enderror"
                            id="type_icon" name="type_icon" value="{{ $type->type_icon }}" >
                            @error('type_icon')
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
