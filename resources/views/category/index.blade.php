@extends('layouts.app')

@section('main-content')
<div class="wrap-table ">
	<a class=" btn btn-info" href="{{ route('category.create') }}">Add New Category</a>
	<a class=" btn btn-primary" href="{{ route('post.index') }}">Posts</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>All Category</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>SL</th>
						<th>Category Name</th>
						<th>Post Title</th>
						
					</tr>
				</thead>
				<tbody>

					@foreach($all_category as $category)
						
					
					<tr>
						<td>{{ $loop -> index +1 }}</td>
						<td>{{ $category -> name }}</td>
						<td>
							@foreach($category -> posts as $post)
								{{ $post -> title }} |
							@endforeach	
							
						</td>
						
						<td>
							<a class="btn btn-sm btn-info" href="#">View</a>
							<a class="btn btn-sm btn-warning" href="#">Edit</a>
							<a class="btn btn-sm btn-danger" href="#">Delete</a>
						</td>
					</tr>
					@endforeach
					

				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection


