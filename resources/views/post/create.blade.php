<!DOCTYPE html>
<html lang="en">
@extends('layouts.app')

@section('main-content')

<div class="wrap ">
	<a class=" btn btn-primary" href="{{ route('post.index') }}">All Posts</a>
	<div class="card shadow">
		<div class="card-body">
			<h2>Add New Post</h2>
			<form action="{{ route('post.store') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="">Post Title</label>
					<input class="form-control" name="title" class="form-control" type="text">
				</div>

				<div class="form-group">
					<label for="">Category </label>
					 <select class=" form-control" multiple name="category[]" id="">

						@foreach($category as $cat)
					 <option value="{{ $cat -> id }}">{{ $cat -> name }}</option>
						@endforeach
						 
					 </select>
				</div>

				<div class="form-group">
					<label for="">Post Content</label>
					<textarea class=" form-control" name="content" id="" cols="30" rows="5"></textarea>
				</div>


				
				<div class="form-group">
					<input class="btn btn-primary" type="submit" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>


	
@endsection
