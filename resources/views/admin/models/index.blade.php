		@extends('layouts.admin.app')

		@section('content')
		<div class="app-title">
			<div>
				<h1>{{ $pageTitle}}</h1>
			</div>
		</div>
		<table class="resp">

			<thead>
				<tr>
					<th scope="col" width="25%">No</th>
					<th scope="col" width="25%">Makes</th>
					<th scope="col" width="25%">Models</th>
					<th scope="col" width="25%">Actions</th>

				</tr>
			</thead>
			<tbody>

				@if (Session::has('success'))
				<div class="alert alert-success">
					{{ Session::get('success') }}
				</div>
				@endif
				@foreach($models as $key => $model)
				<tr>
					<td data-label="Contact Info">{{ ++$key }}</td>
					<td data-label="Bought Vehicles">{{ $model->make->name }}</td>
					<td data-label="Bought Vehicles">{{ $model->name }}</td>
					<td data-label="Bought Vehicles">
						<a href="{{ route('model.edit', ['id' => $model->id]) }}" class="btn btn-delete">Edit</a> |
						<a href="{{ route('model.delete', ['id' => $model->id]) }}" class="btn btn-delete">Delete</a>
					</td>
					<td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="text-center">
			<nav class="" aria-label="Page navigation example">
				<ul class="pagination">
					<li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
					<li class="page-item"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
					<li class="page-item"><a class="page-link" href="#">5</a></li>
					<li class="page-item"><a class="page-link" href="#">Next</a></li>
				</ul>
			</nav>
		</div>
		@endsection