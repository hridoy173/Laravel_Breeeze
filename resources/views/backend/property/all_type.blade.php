@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">
<nav class="page-breadcrumb">

                <a href="{{ route('add.type') }}" class="btn btn-inverse-success" >Add Property Type</a>

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
                        <th>Type Name</th>
                        <th>Type Icon</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($allType as $type)

                      <tr>
                        <td>{{ $type->type_name }}</td>
                        <td>{{ $type->type_icon }}</td>
                        <td>
                            <a href="{{ route('edit.type',$type->id) }}" class="btn btn-sm btn-inverse-primary">Edit</a>
                            <a href="{{ route('delete.type',$type->id) }}" onclick="alert('Do you want to delete type property?')" class="btn btn-sm btn-inverse-warning">Delete</a>
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
