@extends('master')

@section('content')

	<div class="gallery">

		<div class="gallery-header-box">

			<h1 class="gallery-header">Project Gallery</h1>

		</div>

		<div class="gallery-content-area">

			@foreach ($images as $image)

				<div class="gallery-image-box">

					<img class="gallery-image-img" src="/images/{{$image->image}}">

					<a data-lightbox="project-img" href="/images/{{$image->image}}" class="gallery-image-link">View</a>

				</div>

			@endforeach

		</div>

	</div>

@stop('content')
