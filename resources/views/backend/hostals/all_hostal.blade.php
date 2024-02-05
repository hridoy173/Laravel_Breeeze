@extends('admin.adminDashboard')
@section('admin')

<!-- page content  -->
<div class="page-content">

    <nav class="page-breadcrumb">
    <a href="" class="btn btn-inverse-success" >Add Hostal</a>
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
                        <th>Name</th>
                        <th>Code</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach($allHostal as $hostal)

                      <tr>
                      <td><a href="{{ route('all.hostal.student',$hostal->id) }}">{{ $hostal->hostal_name }}</a></td>
                        <td>{{ $hostal->hostal_code }}</td>
                        <td>
                            <a href="{{ route('delete.hostal',$hostal->id) }}" onclick="alert('Do you want to delete type property?')" class="btn btn-sm btn-inverse-warning">Delete</a>
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
