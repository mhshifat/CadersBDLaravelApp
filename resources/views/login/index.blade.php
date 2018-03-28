@extends('master')


@section('content')

	<div id="register">

		<div class="back-box">

			<div class="back-box-2"></div>

			<div class="register-main-box">

				<div class="register-left-side" style="left:0;">

					<h1 class="register-header"><i class="fas fa-unlock register-icon"></i> Login</h1>

					<form class="register-form" action="/signin" method="GET">

						{{ csrf_field() }}

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

						<div class="input-box" style="margin-left:50px;margin-bottom:20px;display:flex;align-items:center;">

							<input class="input" type="checkbox" name="checkbox" id="checkbox">

							<label for="checkbox" style="color:#fff;margin-left:10px;cursor:pointer;">remember me the next time !</label>

						</div>

						<center><button style="border:2px solid #<?php echo rand(100000, 999999) ?>;" class="btn" type="submit">Login <i class="fab fa-telegram-plane btn-icon"></i></button></center>

					</form>

					<a style="margin-top:50px;" href="/forgot">&#9825; Forgot Your Password! &#9825;</a>

				</div>

				<div class="register-right-side" style="margin-left:50%;">

					<h1 class="register-right-side-header">Get started</h1>

					<p class="register-right-side-subheader">Join us in our journry. I bet you will have fun, lots of new thing and unlimited free resource. Click the button bellow to register an account. Have fun!</p>

					<a class="register-right-side-link" href="/register">Sign Up</a>

				</div>

			</div>

		</div>

	</div>

@stop('content')
