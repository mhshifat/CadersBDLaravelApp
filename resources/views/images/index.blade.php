@extends('master')

@section('content')

	<div id="images">

		<h1 class="library-header">Media Library <form class="upload-form" action="/upload_gallery" method="POST" enctype="multipart/form-data">

			{{csrf_field()}}

			<button type="submit" class="library-link">Add New</button>

			<input type="file" name="image" required>

		</form></h1>

		<hr>

		<div class="uploaded-img-box">

			@foreach ($images as $image)

				<div class="img-box">

					<img class="uploded-img" src="/images/{{$image->image}}">

					<a class="delete-icon" href="/images/delete/{{$image->id}}"><i class="far fa-times-circle"></i></a>

				</div>

			@endforeach

		</div>

	</div>

@stop('content')
