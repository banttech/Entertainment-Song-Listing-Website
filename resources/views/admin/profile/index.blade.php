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
		            <th scope="col" width="33%">No</th>
		            <th scope="col" width="33%">Make</th>
		            <th scope="col" width="34%">Actions</th>

		        </tr>
		    </thead>
		    <tbody>

		        @if (Session::has('success'))
		        <div class="alert alert-success">
		            {{ Session::get('success') }}
		        </div>
		        @endif
		        @foreach($makes as $key => $make)
		        <tr>
		            <td data-label="Contact Info">{{ ++$key }}</td>
		            <td data-label="Bought Vehicles">{{ $make->name }}</td>
		            <td data-label="Bought Vehicles">
		                <a href="{{ route('make.edit', ['id' => $make->id]) }}" class="btn btn-delete">Edit</a> |
		                <a href="{{ route('make.delete', ['id' => $make->id]) }}" class="btn btn-delete">Delete</a>
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