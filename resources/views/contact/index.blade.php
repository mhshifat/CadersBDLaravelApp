@extends('master')

@section('content')

	<div class="contact">

		<div class="content-main">

			<div class="contact-box">

				<div class="map-area" id="map"></div>

				<div class="contact-form-box">

					<center><h1 class="contact-form-header">Contact Us</h1></center>

					<form class="contact-form" action="" method="">

						{{ csrf_field() }}

						<div class="form-group-1">

							<input class="form-control" type="text" name="name" placeholder="Name">

						</div>

						<div class="form-group-1">

							<input class="form-control" type="email" name="email" placeholder="Email">

						</div>

						<div class="form-group-1">

							<input class="form-control" type="text" name="subject" placeholder="Subject">

						</div>

						<div class="form-group-2">

							<textarea class="form-control-1" name="message" placeholder="Message"></textarea>

						</div>

						<center><button type="submit" name="contact-submit" class="contact-submit">SEND &nbsp;<i class="fas fa-paper-plane"></i></button></center>

					</form>

				</div>

			</div>

		</div>

	</div>

@stop('content')

