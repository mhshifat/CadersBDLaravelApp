<nav id="topNavbar">

	<div class="hamburger-box" id="hamburger-icon">

		<i class="fas fa-bars hamburger-icon"></i>

	</div>

	<div class="navbarTop">

		<?php if(Cookie::get('codersbd') !== null) { ?>

			<div class="comment-icon-box">

				<a href=""><i class="fas fa-comments comment-icon">

					<span class="comment-count-number">50</span>

				</i></a>

			</div>

			<div class="message-icon-box">

				<a><i class="fas fa-envelope message-icon">

					<span class="message-count-number">50</span>

				</i></a>

			</div>

		<?php } elseif(isset($_SESSION['username'])) { ?>

			<div class="comment-icon-box">

				<a href=""><i class="fas fa-comments comment-icon">

					<span class="comment-count-number">50</span>

				</i></a>

			</div>

			<div class="message-icon-box">

				<a><i class="fas fa-envelope message-icon">

					<span class="message-count-number">50</span>

				</i></a>

			</div>

		<?php } ?>

		<div class="top-profile-logo-box">

			<?php if(Cookie::get('codersbd') !== null) { ?>

				<a href=""><p class="top-pro-username">Hi, <?= Cookie::get('codersbd') ?> !</p></a>

			<?php } elseif(isset($_SESSION['username'])) { ?>

				<a href=""><p class="top-pro-username">Hi, <?= $_SESSION['username'] ?> !</p></a>

			<?php } else { ?>

				<a href=""><p class="top-pro-username">Hi, Guest !</p></a>

			<?php } ?>

			<div class="profile-logo-box">

				<div class="middle-profile-logo-box">

					<img src="/images/user.png" class="profile-logo" alt="profile-logo">

				</div>

			</div>

		</div>

	</div>

	<div class="profile-link-box">

		<ul class="profile-link-box-menu">

			<?php if(Cookie::get('codersbd') !== null) { ?>

				<li class="profile-link-box-list"><a href="/user/{{Cookie::get('codersbd')}}" class="profile-link-box-link"><i class="fas fa-user profile-link-box-icon">&nbsp;&nbsp;&nbsp;&nbsp;Profile</i></a></li>

				<li class="profile-link-box-list"><a href="/logout" class="profile-link-box-link"><i class="fas fa-sign-out-alt profile-link-box-icon">&nbsp;&nbsp;&nbsp;&nbsp;Logout</i></a></li>

			<?php } elseif(isset($_SESSION['username'])) { ?>

				<li class="profile-link-box-list"><a href="/user/{{$_SESSION['username']}}" class="profile-link-box-link"><i class="fas fa-user profile-link-box-icon">&nbsp;&nbsp;&nbsp;&nbsp;Profile</i></a></li>

				<li class="profile-link-box-list"><a href="/logout" class="profile-link-box-link"><i class="fas fa-sign-out-alt profile-link-box-icon">&nbsp;&nbsp;&nbsp;&nbsp;Logout</i></a></li>

			<?php } else { ?>

				<li class="profile-link-box-list"><a href="/login" class="profile-link-box-link"><i class="fas fa-sign-in-alt profile-link-box-icon">&nbsp;&nbsp;&nbsp;&nbsp;Login</i></a></li>

			<?php } ?>

		</ul>

	</div>

	<div class="message-box-link-box">

		<div class="message-box-header">

			<h1 class="message-header">Messages</h1>

		</div>

		{{-- // Messages --}}


		<div class="message-content-box">

			<div class="main-message-content">

				<div class="user-message-profile-logo-box">

					<div class="user-message-profile-logo-box-round">

						<img src="images/user.png" class="user-message-profile-logo-box-round-img">

					</div>

				</div>

				<div class="user-profile-message-content-box">

					<a href=""><h1 class="user-profile-message-content-header">Mehedi Hassan</h1></a>

					<p class="user-profile-message-content-message">Lorem ipsum dolor sit amet,no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.</p>

				</div>

			</div>

			<div class="main-message-content">

				<div class="user-message-profile-logo-box">

					<div class="user-message-profile-logo-box-round">

						<img src="images/user.png" class="user-message-profile-logo-box-round-img">

					</div>

				</div>

				<div class="user-profile-message-content-box">

					<h1 class="user-profile-message-content-header">Mehedi Hassan</h1>

					<p class="user-profile-message-content-message">Lorem ipsum dolor sit amet,no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.</p>

				</div>

			</div>

			<div class="main-message-content">

				<div class="user-message-profile-logo-box">

					<div class="user-message-profile-logo-box-round">

						<img src="images/user.png" class="user-message-profile-logo-box-round-img">

					</div>

				</div>

				<div class="user-profile-message-content-box">

					<h1 class="user-profile-message-content-header">Mehedi Hassan</h1>

					<p class="user-profile-message-content-message">Lorem ipsum dolor sit amet,no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.</p>

				</div>

			</div>

		</div>


		{{-- // End Messages --}}

		<div class="message-box-footer">

			<a href=""><h1 class="message-footer">See All Messages</h1></a>

		</div>

	</div>

</nav>
