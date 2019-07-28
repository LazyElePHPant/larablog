@csrf

@if ($post->image)
	<img src="{{ Storage::url($post->image) }}" class="w-100">
@endif

<div class="form-group">
	<label for="image">Image</label>
	<input
		type="file"
		class="form-control"
		name="image"
		value="{{ old('image', $post->image) }}">
</div>

<div class="form-group">
	<label for="title">Title</label>
	<input
		type="text"
		class="form-control"
		name="title"
		value="{{ old('title', $post->title) }}"
		required>
</div>

<div class="form-group">
	<label for="body">Content</label>
	@quill([
		'content' => $post->body,
		'field' => ['name' => 'body']
	])
	@endquill
</div>

<div class="form-group">
	<label for="slug">Slug</label>
	<input
		type="text"
		class="form-control"
		name="slug"
		value="{{ old('slug', $post->slug) }}"
		required>
</div>

<div class="form-group">
	<label for="meta_title">Meta Title</label>
	<input
		type="text"
		class="form-control"
		name="meta_title"
		value="{{ old('meta_title', $post->meta_title) }}"
		required>
</div>

<div class="form-group">
	<label for="meta_keywords">Meta Keywords</label>
	<textarea
		class="form-control"
		name="meta_keywords"
		required>{{ old('meta_keywords', $post->meta_keywords) }}</textarea>
</div>

<div class="form-group">
	<label for="meta_description">Meta Description</label>
	<textarea
		class="form-control"
		name="meta_description"
		required>{{ old('meta_description', $post->meta_description) }}</textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
	<a href="{{ '/posts' }}" class="btn btn-default">Cancel</a>
</div>

@include ('errors')
