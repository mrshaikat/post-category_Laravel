@extends('layouts.app')

@section('main-content')
<div class="wrap-table ">
	<a class=" btn btn-info" href="{{ route('post.create') }}">Add New Post</a>
	<a class=" btn btn-primary" href="{{ route('category.index') }}">Category</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>All Posts</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>SL</th>
						<th>Post Title</th>
						<th>Slug</th>
						<th>Category</th>  
						<th>Action</th>  
						
					</tr>
				</thead>
				<tbody>

					@foreach($all_post as $post)
						
					
					<tr>
						<td>{{ $loop -> index +1 }}</td>
						<td>{{ $post -> title }}</td>
						<td>{{ $post -> slug }}</td>
						<td>
							@foreach($post -> categories as $cat)
							{{ $cat -> name }} ,
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


