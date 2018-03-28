@extends('master')

@section('content')

	<div id="register">

		<div class="back-box">

			<div class="back-box-2"></div>

			<div class="register-main-box">

				<div class="register-left-side" style="left:0;">

					<h1 class="register-header">Your Email</h1>

					<form class="register-form" action="/forgot" method="POST">

						{{ csrf_field() }}

						<div class="form-group">

							<div class="icon-box">

								<i class="fas fa-at icon"></i>

							</div>

							<div class="input-box">

								<input class="input" type="email" name="email" placeholder="Email">

							</div>

						</div>

						<center><button style="border:2px solid #<?php echo rand(100000, 999999) ?>;" class="btn" type="submit">Send <i class="fab fa-telegram-plane btn-icon"></i></button></center>

					</form>

				</div>

				<div class="register-right-side" style="margin-left:50%;">

					<h1 class="register-right-side-header">Notice</h1>

					<p class="register-right-side-subheader">We will send you an email with the necessary things to do to get your account back.Please check your inbox.If it is not in your inbox then try to open the spam folder to get the email!</p>

					<a class="register-right-side-link" href="/login">Get back</a>

				</div>

			</div>

		</div>

	</div>

@stop('content')
