@extends('master')

@section('content')

	<div id="register">

		<div class="back-box">

			<div class="back-box-2"></div>

			<div class="register-main-box">

				<div class="register-left-side" style="left:0;">

					<h1 class="register-header">Your Code</h1>

					<form class="register-form" action="/activate" method="POST">

						{{ csrf_field() }}

						<div class="form-group">

							<div class="icon-box">

								<i class="fas fa-code icon"></i>

							</div>

							<div class="input-box">

								<input class="input" type="text" name="activation_code" placeholder="Code">

							</div>

						</div>

						<center><button style="border:2px solid #<?php echo rand(100000, 999999) ?>;" class="btn" name="submit" type="submit">Send <i class="fab fa-telegram-plane btn-icon"></i></button></center>

					</form>

				</div>

				<div class="register-right-side" style="margin-left:50%;">

					<h1 class="register-right-side-header">Notice</h1>

					<p class="register-right-side-subheader">We have send you an email with an activation code. Grab that code and paste it in here to activate your account!</p>

				</div>

			</div>

		</div>

	</div>

@stop('content')
