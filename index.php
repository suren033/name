<?php
	function f($name) {
		include('conf/connectDb.php');
		$query = $db->query(" SELECT * FROM `content` WHERE `name`='$name' ");
		$query = mysqli_fetch_assoc( $query ); 
		echo $query['value'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Maha - Personal CV/Resume Template</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
	<header class="header" id="home">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<nav class="nav">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#skills">Skills</a></li>
							<li><a href="#experiences">Experiences</a></li>
							<li><a href="#portfolio">Portfolio</a></li>
							<li><a href="#pricing">Pricing</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>




	<section class="header__2 py-5">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="wow">
						<span><?php f('Hello'); ?></span>
					</div>
					<h2 class="alex"><?php f('myName'); ?></h2>
					<h5 class="text__product"><?php f('product'); ?></h5>
					<div class="mail">
						<i class="fas fa-envelope"></i>
						<p><?php f('mail'); ?></p>
					</div>
					<div class="phone">
						<i class="fas fa-phone-alt"></i>	
						<p><?php f('phoneNumber'); ?></p>
					</div>
					<div class="gps">
						<i class="fas fa-map-marker-alt"></i>
						<p><?php f('gps'); ?></p>
					</div>
					<div class="icons">
						<a href="https://www.facebook.com/" target="_blank" class="fac"><i class="fab fa-facebook-f facebook"></i></a>
						<a href="https://twitter.com/?lang=en" class="tw" target="_blank"><i class="fab fa-twitter twetter"></i></a>
						<a href="https://github.com/" class="git" target="_blank"><i class="fab fa-github github"></i></a>
					</div>
				</div>

				<div class="col-sm-6">
					<div class="hero">
						<div class="hero__border">
							<img src="img/hero.png" alt="Hero" class="hero__img">			
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="img/ab-img.png" alt="ab" class="ab">				
				</div>	

				<div class="col-sm-6">
					<div class="about__left">
						<div class="about-me">
							<p class="about__text"><?php f('aboutMe'); ?></p>
							<h5 class="patrick"><?php f('patrick'); ?></h5>
						</div>
						<div class="about__menu">
							<ul>
								<li>
									<sapn>php</sapn>
								</li>
								<li>
									<sapn>html</sapn>
								</li>
								<li>
									<sapn>css</sapn>
								</li>
								<li>
									<sapn>php</sapn>
								</li>
								<li>
									<sapn>wordprees</sapn>
								</li>
								<li>
									<sapn>React</sapn>
								</li>
								<li>
									<sapn>Javascript</sapn>
								</li>
							</ul>
						</div>
						<br><br><br><br><button class="download">
							<span>Downlaod CV</span>
							<i class="fas fa-download"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="what-i-do">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<p class="what"><?php f('what'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="about__3">
						<div class="design">
							<i class="fa fa-bullseye purple-color bull"></i><br>
							<p class="design__text"><?php f('ul'); ?></p>
							<h6 class="lorem"><?php f('lorem'); ?></h6><br>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about__3">
						<div class="development">
							<i class="fa fa-code iron-color teg"></i><br>
							<p class="design__text"><?php f('webDevelopment'); ?></p>
							<h6 class="lorem"><?php f('lorem'); ?></h6><br>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about__3">
						<div class="development__2">
							<i class="fa fa-object-ungroup sky-color ungroup"></i><br>
							<p class="design__text"><?php f('appDevelopment'); ?></p>
							<h6 class="lorem"><?php f('lorem'); ?></h6><br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="projects py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="title"><?php f('projects'); ?></p>	
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
					<div class="sl">
						<img src="img/img__slider.png" alt="slider" class="sl__img">
					</div>
				</div>
				<div class="col-sm-5">
					<div class="block">
						<p class="web"><?php f('webDesign'); ?></p>
						<h5 class="wrap"><?php f('wrap'); ?></h5>
						<h4 class="design__development"><?php f('designDevelopment'); ?></h4>
						<h3 class="stamp">Stamp is a clean and elegant Multipurpose Landing Page Template. 
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme. 
                            All variations are organized separately so you can use / customize the template very easily.
                        </h3>
                        <button class="view"><span>View Detalls</span></button>
                        <blockquote>
                        	<q><?php f('template'); ?></q>
                        </blockquote>
                        <p class="shane"><?php f('shane'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="skills" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="technical"><?php f('skills'); ?></p>
					<div class="javascript">
						<p class="script"><?php f('javascript'); ?></p>
						<p class="deg"><?php f('deg'); ?></p>
					</div>
					<div class="line__1"><div class="line__2"></div></div>
					<div class="javascript">
						<p class="script"><?php f('java'); ?></p>
						<p class="deg"><?php f('deg'); ?></p>
					</div>
					<div class="line__1"><div class="line__3"></div></div>
					<div class="javascript">
						<p class="script"><?php f('python'); ?></p>
						<p class="deg"><?php f('deg'); ?></p>
					</div>
					<div class="line__1"><div class="line__4"></div></div>
					<div class="javascript">
						<p class="script"><?php f('php'); ?></p>
						<p class="deg"><?php f('deg'); ?></p>
					</div>
					<div class="line__1"><div class="line__5"></div></div>
					<div class="javascript">
						<p class="script"><?php f('ruby'); ?></p>
						<p class="deg"><?php f('deg'); ?></p>
					</div>
					<div class="line__1"><div class="line__6"></div></div>
					<div class="javascript">
						<p class="script"><?php f('c'); ?></p>
						<p class="deg"><?php f('deg'); ?></p>
					</div>
					<div class="line__1"><div class="line__7"></div></div>
				</div>
				<div class="col-lg-6">
					<p class="professional"><?php f('profesionalSkills'); ?></p>
					<div class="cirkle__1">
						<div class="cirkle__2">
							<span>95%</span>
						</div>
						<h5 class="cirkle__text"><?php f('communication'); ?></h5>
					</div>
				</div>
			</div>
		</div>
	</section>





	<section class="experiences" id="experiences">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="education__text"><?php f('education'); ?></p>
					<div class="oxford">
						<h4 class="art"><?php f('art'); ?>
							<a href="#" class="oxford__text">Oxford University</a>
						</h4>
						<h4 class="eduyear"><?php f('num'); ?></h4>
						<p class="long"><?php f('long'); ?></p>
					</div>
					<div class="oxford">
						<h4 class="art"><?php f('art'); ?>
							<a href="#" class="oxford__text">Oxford University</a>
						</h4>
						<h4 class="eduyear"><?php f('num'); ?></h4>
						<p class="long"><?php f('long'); ?></p>
					</div>
					<div class="oxford">
						<h4 class="art"><?php f('art'); ?>
							<a href="#" class="oxford__text">Oxford University</a>
						</h4>
						<h4 class="eduyear"><?php f('num'); ?></h4>
						<p class="long"><?php f('long'); ?></p>
					</div>
				</div>
				<div class="col-lg-6">
					<p class="work">Work Experience</p>
					<div class="oxford">
						<h4 class="ux"><?php f('ux'); ?>
							<a href="#" class="iron">IronSketch</a>
						</h4>
						<h4 class="eduyear"><?php f('num'); ?></h4>
						<p class="bility"><?php f('responsibility'); ?></p>
						<ul class="ul">
							<li><i class="fa fa-circle point"></i><?php f('validate'); ?></li>
							<li><i class="fa fa-circle point"></i><?php f('managment'); ?></li>
						</ul>
					</div>
					<div class="oxford">
						<h4 class="ux"><?php f('art'); ?>
							<a href="#" class="iron">Oxford University</a>
						</h4>
						<h4 class="eduyear"><?php f('num'); ?></h4>
						<p class="bility"><?php f('responsibility'); ?></p>
						<ul class="ul">
							<li><i class="fa fa-circle point"></i><?php f('validate'); ?></li>
							<li><i class="fa fa-circle point"></i><?php f('management'); ?></li>
						</ul>
					</div>
					<div class="oxford">
						<h4 class="ux"><?php f('art'); ?>
							<a href="#" class="iron">Oxford University</a>
						</h4>
						<h4 class="eduyear"><?php f('num'); ?></h4>
						<p class="bility"><?php f('responsibility'); ?></p>
						<ul class="ul">
							<li><i class="fa fa-circle point"></i><?php f('validate'); ?></li>
							<li><i class="fa fa-circle point"></i><?php f('management'); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="recent" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="recent__text">Recent Portfolio</p>
					<nav class="menu">
						<ul>
							<li class="menu__categories"><span>All Categories</span></li>
							<li class="menu__categories"><span>Web Design</span></li>
							<li class="menu__categories"><span>Branding</span></li>
							<li class="menu__categories"><span>Mockups</span></li>
							<li class="menu__categories"><span>Photograpy</span></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="row portfolio__img">
				<div class="col-lg-4">
					<div class="images">
						<img src="img/g1.jpg" alt="g1" class="img">
						<img src="img/g4.png" alt="g4" class="img">
						<img src="img/g7.png" alt="g7" class="img">	
					</div>				
				</div>
				<div class="col-lg-4">
					<div class="images img__top">
						<img src="img/g2.png" alt="g2" class="img">
						<img src="img/g5.png" alt="g5" class="img">
						<img src="img/g8.png" alt="g8" class="img">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="images img__top img__bottom">
						<img src="img/g3.png" alt="g3" class="img">
						<img src="img/g6.png" alt="g6" class="img">
						<img src="img/g9.jpg" alt="g9" class="img">
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="intersted py-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="intersted__work">
						<p class="towork"><?php f('interstide'); ?></p>
						<h5 class="mirum"><?php f('vel'); ?></h5>
						<button class="contact">Contact</button>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="table" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="table__text">Pricing Table</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="full__time">
						<i class="far fa-calendar-alt calendar"></i>
						<h4 class="full__text">Full-time work</h4>
						<p class="available">I am available for full time</p><br>
						<p class="dolar">$1500</p>
						<ul>
							<li>Web Development</li>
							<li>Advetising</li>
							<li>Game Development</li>
							<li>Music Writing</li>
						</ul>
						<button class="hire">Hire Me</button>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="full__time">
						<i class="fas fa-file calendar"></i>
						<h4 class="full__text">Full-time work</h4>
						<p class="available">I am available for full time</p><br>
						<p class="dolar">$500</p>
						<ul>
							<li>Web Development</li>
							<li>Advetising</li>
							<li>Game Development</li>
							<li>Music Writing</li>
						</ul>
						<button class="hire">Hire Me</button>	
					</div>
				</div>
				<div class="col-lg-4">
					<div class="full__time">
						<i class="fas fa-hourglass calendar"></i>
						<h4 class="full__text">Full-time work</h4>
						<p class="available">I am available for full time</p><br>
						<p class="dolar">$50</p>
						<ul>
							<li>Web Development</li>
							<li>Advetising</li>
							<li>Game Development</li>
							<li>Music Writing</li>
						</ul>
						<button class="hire">Hire Me</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="featured pb-5" id="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="featured__text"><?php f('posts'); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="traffic">
						<div class="read">
							<img src="img/b-1.png" alt="b-1" class="img__b">
							<p class="traffic__text"><?php f('life'); ?></p>
							<p class="post">Post On <span>24.11.19</span> By <span>ThemeSpiders</span></p>
							<p class="fact"><?php f('long'); ?></p>
							<p class="read__text"><?php f('read'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="traffic">
						<div class="read">
							<img src="img/b-2.png" alt="b-2" class="img__b">
							<p class="traffic__text"><?php f('life'); ?></p>
							<p class="post">Post On <span>24.11.19</span> By <span>ThemeSpiders</span></p>
							<p class="fact"><?php f('long'); ?></p>
							<p class="read__text"><?php f('read'); ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="traffic">
						<div class="read">
							<img src="img/b-3.png" alt="b-3" class="img__b">
							<p class="traffic__text"><?php f('life'); ?></p>
							<p class="post">Post On <span>24.11.19</span> By <span>ThemeSpiders</span></p>
							<p class="fact"><?php f('long'); ?></p>
							<p class="read__text"><?php f('read'); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>






	<section class="client">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="title">Client Reviews</p>
				</div>
			</div>
			<div class="row py-5">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">	
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    <div class="item">
					    	<img src="img/c-1.png" alt="c-1" class="girl">
					    	<p>Absolute wonderful ! I am completely
                            blown away.The very best.I was amazed
                            at the quality </p>
                            <h4>John Mike</h4>
           	                <h6>CEO,Author,Inc</h6>
					    </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</section>	






	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 py-5">
					<p class="title">Contact Me</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="fas fa-location-arrow"></i>
							</div>
							<div class="media__body">
								<h4 class="right address__text">Address</h4>
								<p class="right floor">5th Avenue, 34th floor,<br>
								<span class="right">New york</span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="far fa-envelope"></i>
							</div>
							<div class="media__body">
								<h5 class="your-mail">Email</h5>
								<p class="yourmail">yourmail@email.com<br>
								<span>yourmail@email.com</span></p>
							</div>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="address">
							<div class="location">
								<i class="fas fa-phone-alt"></i>
							</div>
							<div class="media__body">
								<h4 class="phone__numbers">Phone</h4>
								<p class="numbers">(880)-8976-987<br>
								<span>(880)-8976-987</span></p>
								</div>
						</div>					
					</div>
				</div>
				<div class="col-sm-12 col-md-6 pt-5">
					<input type="text" placeholder="First Name" class="first"><br>
					<input type="text" placeholder="Last Name" class="last"><br>
					<input type="email" placeholder="Your Email" class="email">
					<textarea name="" cols="30" rows="9" placeholder="Your Messege"></textarea>
					<button class="messege__button"><span>Send Messege</span></button>
				</div>
			</div>
			<div class="row my-5">
				<div class="col-lg-6">
					<p class="all__right">All right reserved Siful Islam @ 2018</p>
				</div>
				<div class="col-lg-6">
					<div class="links">
						<a href="https://www.facebook.com/" target="_blank" class="fac"><i class="fab fa-facebook-f fb"></i></a>
						<a href="https://twitter.com/?lang=en" class="tw" target="_blank"><i class="fab fa-twitter tw"></i></a>
						<a href="https://github.com/" class="git" target="_blank"><i class="fab fa-github gh"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>