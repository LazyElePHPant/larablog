@extends('layouts.admin')

@section('content')
	@forelse ($posts as $post)
		<div class="card mb-3 w-50 mx-auto">
			<img class="card-img-top" src="{{ $post->image ? Storage::url($post->image) : 'https://images.unsplash.com/photo-1555606090-1640be5631c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80' }}" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">
					<a href="{{ "post/{$post->id}/edit" }}" class="">
						{{ $post->title }}
					</a>
				</h5>

				<p class="card-text">
					{{ str_limit(strip_tags($post->body), 400) }}
				</p>
			</div>
		</div>
	@empty
		there are no posts to display..
	@endforelse
@endsection
