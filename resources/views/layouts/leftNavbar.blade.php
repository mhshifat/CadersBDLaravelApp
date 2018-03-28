<div id="leftNavbar">

	<div class="main-logo-box">

		<a class="main-logo-brand" href="/">CodersBD</a>

	</div>

	<div class="left-nav-search-field">

		<input type="text" class="nav_left_search" name="nav_left_search" placeholder="Search">

	</div>

	<div class="left-navbar-box-1">

		<ul class="left-nav-menu">

			<li class="left-navbar-list"><a class="left-navbar-link" href="/"><i class="fas fa-h-square nav-icon"></i> Home</a></li>

			<li class="left-navbar-list"><a class="left-navbar-link" href="/blogs"><i class="fas fa-th-large nav-icon"></i> Blog</a></li>

			<li class="left-navbar-list"><a class="left-navbar-link" href=""><i class="fas fa-cart-arrow-down nav-icon"></i> Shop</a></li>

			<li class="left-navbar-list"><a class="left-navbar-link" href="/gallery"><i class="far fa-images nav-icon"></i> Gallery</a></li>

			<li class="left-navbar-list"><a class="left-navbar-link" href=""><i class="fab fa-stack-exchange nav-icon"></i> Forum</a></li>

		</ul>

	</div>

	<div class="left-navbar-box-1">

		<ul class="left-nav-menu">

			<?php if(Cookie::get('codersbd') !== null) { ?>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/about"><i class="fas fa-heart nav-icon"></i> About me</a></li>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/contact"><i class="fas fa-envelope nav-icon"></i> Contact me</a></li>

			<?php } elseif(isset($_SESSION['username'])) { ?>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/about"><i class="fas fa-heart nav-icon"></i> About me</a></li>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/contact"><i class="fas fa-envelope nav-icon"></i> Contact me</a></li>

			<?php } else { ?>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/login"><i class="fas fa-sign-in-alt nav-icon"></i> Sing in</a></li>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/register"><i class="fas fa-sign-out-alt nav-icon"></i> Get started</a></li>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/about"><i class="fas fa-heart nav-icon"></i> About me</a></li>

				<li class="left-navbar-list"><a class="left-navbar-link" href="/contact"><i class="fas fa-envelope nav-icon"></i> Contact me</a></li>

			<?php } ?>

		</ul>

	</div>

	<div class="left-navbar-box-2">

		<?php if(Cookie::get('codersbd') !== null && Cookie::get('codersbd') === 'Mhshifat') { ?>

			<ul class="nav-menu-2" id="dropdown-click-4">

				<li class="list-item-2"><a href="/images/add" class="list-link-2"><i class="fas fa-image nav-icon-2"></i> Projects</a></li>

			</ul>

		<?php } elseif(isset($_SESSION['username']) && $_SESSION['username'] === 'Mhshifat') { ?>

			<ul class="nav-menu-2" id="dropdown-click-4">

				<li class="list-item-2"><a href="/images/add" class="list-link-2"><i class="fas fa-image nav-icon-2"></i> Projects</a></li>

			</ul>

		<?php } ?>

	</div>

	<div class="left-navbar-box-2">

		<?php if(Cookie::get('codersbd') !== null) { ?>

			<ul class="nav-menu-2" id="dropdown-click">

				<li class="list-item-2"><a class="list-link-2"><i class="fas fa-book nav-icon-2"></i> Content <i class="fas fa-angle-down dropdown-icon"></i></a></li>

			</ul>

		<?php } elseif(isset($_SESSION['username'])) { ?>

			<ul class="nav-menu-2" id="dropdown-click">

				<li class="list-item-2"><a class="list-link-2"><i class="fas fa-book nav-icon-2"></i> Content <i class="fas fa-angle-down dropdown-icon"></i></a></li>

			</ul>

		<?php } ?>

	</div>

	<div class="left-navbar-box-3">

		<ul class="dropdown-navbar" id="dropdown-toggle" style="display: none;">

			<li class="dropdown-list-item"><a class="dropdown-list-link" href="">All posts</a></li>

			<li class="dropdown-list-item"><a class="dropdown-list-link" href="">Add posts</a></li>

		</ul>

	</div>

	<div class="left-navbar-box-2">

		<?php if(Cookie::get('codersbd') !== null) { ?>

			<ul class="nav-menu-2" id="dropdown-click-2">

				<li class="list-item-2"><a class="list-link-2"><i class="fas fa-cubes nav-icon-2"></i> Categories <i class="fas fa-angle-down dropdown-icon"></i></a></li>

			</ul>

		<?php } elseif(isset($_SESSION['username'])) { ?>

			<ul class="nav-menu-2" id="dropdown-click-2">

				<li class="list-item-2"><a class="list-link-2"><i class="fas fa-cubes nav-icon-2"></i> Categories <i class="fas fa-angle-down dropdown-icon"></i></a></li>

			</ul>

		<?php } ?>

	</div>

	<div class="left-navbar-box-3">

		<ul class="dropdown-navbar" id="dropdown-toggle-2" style="display: none;">

			<li class="dropdown-list-item"><a class="dropdown-list-link" href="">All categories</a></li>

			<li class="dropdown-list-item"><a class="dropdown-list-link" href="">Add categories</a></li>

		</ul>

	</div>

	<div class="left-navbar-box-2">

		<?php if(Cookie::get('codersbd') !== null) { ?>

			<ul class="nav-menu-2" id="dropdown-click-3">

				<li class="list-item-2"><a class="list-link-2"><i class="fas fa-users nav-icon-2"></i> Users <i class="fas fa-angle-down dropdown-icon"></i></a></li>

			</ul>

		<?php } elseif(isset($_SESSION['username'])) { ?>

			<ul class="nav-menu-2" id="dropdown-click-3">

				<li class="list-item-2"><a class="list-link-2"><i class="fas fa-users nav-icon-2"></i> Users <i class="fas fa-angle-down dropdown-icon"></i></a></li>

			</ul>

		<?php } ?>

	</div>

	<div class="left-navbar-box-3">

		<ul class="dropdown-navbar" id="dropdown-toggle-3" style="display: none;">

			<li class="dropdown-list-item"><a class="dropdown-list-link" href="">All users</a></li>

			<li class="dropdown-list-item"><a class="dropdown-list-link" href="">Add users</a></li>

		</ul>

	</div>

	<div class="left-navbar-box-4">

		<ul class="left-nav-menu-4">

			<li class="left-navbar-list-4"><a href="" class="left-navbar-link-4"><i class="fas fa-file-alt nav-icon-4"></i> Resume</a></li>

			<?php

				if(isset($_SESSION['username'])) { ?>

					<li class="left-navbar-list-4"><a href="/user/{{$_SESSION['username']}}" class="left-navbar-link-4"><i class="fas fa-user nav-icon-4"></i> Profile</a></li>

				<?php }

			?>

			<li class="left-navbar-list-4"><a href="" class="left-navbar-link-4"><i class="fas fa-cog nav-icon-4"></i> Tools</a></li>

		</ul>

	</div>

</div>
