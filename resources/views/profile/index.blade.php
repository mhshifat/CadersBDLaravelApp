@extends('master')

@section('content')

	<div id="user">

		<div class="identity">

			<h1 class="label">Username</h1>

			<h4 class="answer">{{ $username }}</h4>

			<h1 class="label">Email</h1>

			<h4 class="answer">{{ $email }}</h4>

			<h1 class="label">Position</h1>

			<h4 class="answer">{{ $position }}</h4>

		</div>

		<div class="password">

			<form class="pwd_form" action="/pwdReset/{{$id}}" method="GET">

				<h1 class="label">New Password</h1>

				<input type="password" class="input" name="password">

				<h1 class="label">Confirm Password</h1>

				<input type="password" class="input" name="confirm_password">

				<button class="btn" tupe="submit" name="submit">Save</button>

			</form>

		</div>

	</div>

@stop('content')
