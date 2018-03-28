@extends('master')

@section('content')

	<div id="home_header">

		<div class="bc_video">

			<video autoplay loop mute class="video">

				<source src="videos/Fire_and_Ice_Nebula_4K_Motion_Background.mp4" type="video/mp4">

			</video>

		</div>

		<div class="intro_div">

			<div class="intro-box">

				<h1 class='intro-header'>Hi, I am Mehedi Hassan Shifat</h1>


				<h2 class='intro-slogan'>Full Stack Web Developer</h2>


				<a href="/about" class="intro-link">Learn more &nbsp;<i class="fas fa-angle-right"></i></a>

			</div>

		</div>

	</div>

	<div class="my-expertise">

		<div class="my-expertise-header-box">

			<h1 class="my-expertise-header">My Expertise</h1>

		</div>

		<div class="my-expertise-card-box">

			<div class="my-expertise-card">

				<div class="my-expertise-card-icon-box">

					<i class="fas fa-gem my-expertise-card-icon"></i>

				</div>

				<div class="my-expertise-card-box-header">

					<center><h1 class="my-expertise-card-header">Ideas</h1></center>

				</div>

				<div class="my-expertise-card-box-para">

					<center><p class="my-expertise-card-para">I collaborate with clients and peers to nurture and transform ideas into well thought out design specs. After all, that is where the majority of amazing user experiences start.</p></center>

				</div>

			</div>

			<div class="my-expertise-card">

				<div class="my-expertise-card-icon-box">

					<i class="fas fa-magic my-expertise-card-icon"></i>

				</div>

				<div class="my-expertise-card-box-header">

					<center><h1 class="my-expertise-card-header">UX/UI</h1></center>

				</div>

				<div class="my-expertise-card-box-para">

					<center><p class="my-expertise-card-para">I sketch and wireframe interfaces focusing on content structure, intuitive UI patterns and simple interactions. I am a minimalist who truly believes that less is more.</p></center>

				</div>

			</div>

			<div class="my-expertise-card">

				<div class="my-expertise-card-icon-box">

					<i class="fas fa-code my-expertise-card-icon"></i>

				</div>

				<div class="my-expertise-card-box-header">

					<center><h1 class="my-expertise-card-header">Code</h1></center>

				</div>

				<div class="my-expertise-card-box-para">

					<center><p class="my-expertise-card-para">I design in the browser with HTML(5), CSS(3) and a touch of JavaScript. I love coding things from scratch, but I can work with front-end frameworks like Bootstrap too.</p></center>

				</div>

			</div>

		</div>

	</div>

	<div class="home-gallery">

		<div class="home-gallery-header-box">

			<h1 class="home-gallery-header">My Projects</h1>

		</div>

		<div class="home-gallery-image-box">

			@foreach ($images as $image)

				<div class="home-gallery-image">

					<img class="home-gallery-image-img" src="/images/{{$image->image}}">

					<a data-lightbox="project-img" href="/images/{{$image->image}}" class="home-gallery-image-link">View</a>

				</div>

			@endforeach

		</div>

	</div>

	<div class="recent-blog">

		<div class="recent-blog-header-box">

			<h1 class="recent-blog-header">Recent Blog</h1>

		</div>

		<div class="recent-blog-blog-box">

			<div class="recent-blog-blog-card">

				<div class="recent-blog-card-box">

					<h1 style="color:<?= '#'.rand(100000, 999999) ?>;" class="recent-blog-card-header"><i class="fab fa-html5"></i> Tech</h1>

				</div>

				<div class="recent-blog-img-box">

					<img class="recent-blog-img" src="/images/language.png">

				</div>

				<div class="recent-blog-content-box">

					<h2 class="recent-blog-content-header">What Do Essay Contests Consider Part of Their Character Count?</h2>

					<h6 class="recent-blog-content-author">by <strong>Billy Forester</strong>, 15/07/2016</h6>

					<p class="recent-blog-content-desc">Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.  </p>

					<center><a href="/blog" style="background:<?='#'.rand(100000, 999999) ?>;" class="recent-blog-content-link">Read More</a></center>

				</div>

			</div>

			<div class="recent-blog-blog-card">

				<div class="recent-blog-card-box">

					<h1 style="color:<?= '#'.rand(100000, 999999) ?>;" class="recent-blog-card-header"><i class="fab fa-html5"></i> Tech</h1>

				</div>

				<div class="recent-blog-img-box">

					<img class="recent-blog-img" src="/images/language.png">

				</div>

				<div class="recent-blog-content-box">

					<h2 class="recent-blog-content-header">What Do Essay Contests Consider Part of Their Character Count?</h2>

					<h6 class="recent-blog-content-author">by <strong>Billy Forester</strong>, 15/07/2016</h6>

					<p class="recent-blog-content-desc">Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.  </p>

					<center><a href="" style="background:<?='#'.rand(100000, 999999) ?>;" class="recent-blog-content-link">Read More</a></center>

				</div>

			</div>

			<div class="recent-blog-blog-card">

				<div class="recent-blog-card-box">

					<h1 style="color:<?= '#'.rand(100000, 999999) ?>;" class="recent-blog-card-header"><i class="fab fa-html5"></i> Tech</h1>

				</div>

				<div class="recent-blog-img-box">

					<img class="recent-blog-img" src="/images/language.png">

				</div>

				<div class="recent-blog-content-box">

					<h2 class="recent-blog-content-header">What Do Essay Contests Consider Part of Their Character Count?</h2>

					<h6 class="recent-blog-content-author">by <strong>Billy Forester</strong>, 15/07/2016</h6>

					<p class="recent-blog-content-desc">Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.  </p>

					<center><a href="" style="background:<?='#'.rand(100000, 999999) ?>;" class="recent-blog-content-link">Read More</a></center>

				</div>

			</div>

			<div class="recent-blog-blog-card">

				<div class="recent-blog-card-box">

					<h1 style="color:<?= '#'.rand(100000, 999999) ?>;" class="recent-blog-card-header"><i class="fab fa-html5"></i> Tech</h1>

				</div>

				<div class="recent-blog-img-box">

					<img class="recent-blog-img" src="/images/language.png">

				</div>

				<div class="recent-blog-content-box">

					<h2 class="recent-blog-content-header">What Do Essay Contests Consider Part of Their Character Count?</h2>

					<h6 class="recent-blog-content-author">by <strong>Billy Forester</strong>, 15/07/2016</h6>

					<p class="recent-blog-content-desc">Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.  </p>

					<center><a href="" style="background:<?='#'.rand(100000, 999999) ?>;" class="recent-blog-content-link">Read More</a></center>

				</div>

			</div>

			<div class="recent-blog-blog-card">

				<div class="recent-blog-card-box">

					<h1 style="color:<?= '#'.rand(100000, 999999) ?>;" class="recent-blog-card-header"><i class="fab fa-html5"></i> Tech</h1>

				</div>

				<div class="recent-blog-img-box">

					<img class="recent-blog-img" src="/images/language.png">

				</div>

				<div class="recent-blog-content-box">

					<h2 class="recent-blog-content-header">What Do Essay Contests Consider Part of Their Character Count?</h2>

					<h6 class="recent-blog-content-author">by <strong>Billy Forester</strong>, 15/07/2016</h6>

					<p class="recent-blog-content-desc">Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.  </p>

					<center><a href="" style="background:<?='#'.rand(100000, 999999) ?>;" class="recent-blog-content-link">Read More</a></center>

				</div>

			</div>

			<div class="recent-blog-blog-card">

				<div class="recent-blog-card-box">

					<h1 style="color:<?= '#'.rand(100000, 999999) ?>;" class="recent-blog-card-header"><i class="fab fa-html5"></i> Tech</h1>

				</div>

				<div class="recent-blog-img-box">

					<img class="recent-blog-img" src="/images/language.png">

				</div>

				<div class="recent-blog-content-box">

					<h2 class="recent-blog-content-header">What Do Essay Contests Consider Part of Their Character Count?</h2>

					<h6 class="recent-blog-content-author">by <strong>Billy Forester</strong>, 15/07/2016</h6>

					<p class="recent-blog-content-desc">Lorem ipsum dolor sit amet,sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,  At vero eos et accusam et justo duo dolores et ea rebum.  Lorem ipsum dolor sit amet,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  Stet clita kasd gubergren,  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  no sea takimata sanctus est Lorem ipsum dolor sit amet.  sed diam voluptua.  </p>

					<center><a href="" style="background:<?='#'.rand(100000, 999999) ?>;" class="recent-blog-content-link">Read More</a></center>

				</div>

			</div>

		</div>

	</div>

	<div class="newsletter">

		<div class="back"></div>

		<div class="newsletter-box">

			<div class="cross-icon-box">

				<i class="far fa-times-circle"></i>

			</div>

			<div class="newsletter-content">

				<div class="newsletter-content-box">

					<i class="fas fa-envelope-open"></i>

				</div>

				<div class="newsletter-content-box-news">

					<h1 class="newsletter-content-box-news-header">Join Our Newsletter!</h1>

					<p class="newsletter-content-box-news-decs">Join Our mailing list to recive the latest news and updates from our team!</p>

				</div>

			</div>

			<div class="newsletter-content-input">

				<div class="newsletter-content-input-field">

					<form action="" method="">

					  {{ csrf_field() }}

						<input class="newsletter-content-input-field-email" type="email" name="newsletter" placeholder="Email">

						<button type="submit" name="submit" class="newsletter-content-button">Join</button>

					</form>

				</div>

			</div>

		</div>

	</div>

	<div class="wanttowork">

		<div class="wanttowork-box">

			<h1 class="wanttowork-box-header">Want to work together?</h1>

			<p class="wanttowork-box-desc">I am currently accepting new projects and would love to hear about yours. Please take a few minutes to tell me about it.</p>

			<a href="" class="wanttowork-box-link">Get started</a>

		</div>

	</div>

@stop('content')
