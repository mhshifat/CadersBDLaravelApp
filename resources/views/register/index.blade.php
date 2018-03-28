@extends('master')

@section('content')

	<div id="register">

		<div class="back-box">

			<div class="back-box-2"></div>

			<div class="register-main-box">

				<div class="register-left-side">

					<h1 class="register-header"><i class="fas fa-lock register-icon"></i> Get started</h1>

					<form class="register-form" action="/register" method="POST">

						{{ csrf_field() }}

						<div class="form-group">

							<div class="icon-box">

								<i class="fas fa-users icon"></i>

							</div>

							<div class="input-box">

								<input class="input" type="text" name="username" placeholder="Username">

							</div>

						</div>

						<div class="form-group">

							<div class="icon-box">

								<i class="fas fa-at icon"></i>

							</div>

							<div class="input-box">

								<input class="input" type="email" name="email" placeholder="Email">

							</div>

						</div>

						<div class="form-group">

							<div class="icon-box">

								<i class="fas fa-key icon"></i>

							</div>

							<div class="input-box">

								<input class="input" type="password" name="password" placeholder="Password">

							</div>

						</div>

						<center><button style="border:2px solid #<?php echo rand(100000, 999999) ?>;" class="btn" type="submit">Register <i class="fab fa-telegram-plane btn-icon"></i></button></center>

					</form>

				</div>

				<div class="register-right-side">

					<h1 class="register-right-side-header">Sign In</h1>

					<p class="register-right-side-subheader">Already have an account? Click the button bellow to Login to your account.Have fun!</p>

					<a class="register-right-side-link" href="/login">Login</a>

				</div>

			</div>

		</div>

	</div>

@stop('content')
