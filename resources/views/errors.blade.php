@if ($errors->{ $bag ?? 'default' }->any())
	<ul class="">
		@foreach ($errors->{ $bag ?? 'default' }->all() as $error)
			<li class="">{{ $error }}</li>
		@endforeach
	</ul>
@endif
