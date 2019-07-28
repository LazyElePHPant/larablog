@extends('layouts.admin')

@section('content')
	<div class="card">
  		<div class="card-body">
			<form action="/posts"
			  method="POST"
			  enctype="multipart/form-data">
			@include ('post.form', [
				'post' => new App\Post,
				'buttonText' => 'Create Post'
			])
			</form>
 		</div>
	</div>
@endsection
