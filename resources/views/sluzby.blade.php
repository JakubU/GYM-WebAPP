<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--  CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<link rel="stylesheet" href="lightbox/css/lightbox.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

	<body id="app-layout">
		<div class="navbar navbar-default  " role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mylinks" aria-expanded="false">
						<span class="sr-only">Navigacia</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/"><img alt="Logo" src="img/logo.jpg" ></a>
				</div>
					<div class="navbar-collapse collapse" id="mylinks">
							<ul class="nav navbar-nav navbar-center">
								<li ><a href="/">Domov</a></li>
								<li> <a href="/sluzby">Služby</a></li>
								<li><a href="/cennik" >Cenník</a></li>
								<li><a href="/reservations" >Rezervácia</a></li>
								<li ><a href="http://7nutrition.sk" target="_blank">E-shop</a></li>
								<li><a href="/kontakt" >Kontakt</a></li>
							</ul>
							<!-- Authentication Links -->
							<ul class="nav navbar-nav navbar-right">
								@if (Auth::guest())
									<li><a href="{{ url('/login2') }}">Prihlásenie</a></li>
								@else
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
											<i class="fa fa-user" aria-hidden="true"></i>
											{{ Auth::user()->name }} <span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out-alt"></i>Odhlásiť sa</a></li>
										</ul>
									</li>
								@endif
							</ul>
					</div>
			</div>
		</div>
			<div class="container-fluid sluzby_backq">
				<div class="container nase_sluzby">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
							<h5 class="nase_sluzby_h5">Naše služby</h5>
							<h3 class="nase_sluzby_h3">Čo  vám ponúkame</h3>
							<p class="nase_sluzby_p">Valibuk je fitko na sídlisku Roveň, v areáli bývalej Liptony hneď vedľa obchodného centra Kaufland.
								Otvoriť sa nám ho podarilo na konci roka 2010 a odvtedy neustále rozširujeme jeho vybavenie, priestory ako
								aj paletu ponukaných služieb.</p>
							<p class="nase_sluzby_p">Naše fitness centrum si zakladá na poskytovaní profesionálnych služieb skúseným a priateľským personálom. Súčasťou fitness centra
								je rozsiahla posiľovňa, cardio zóna a priestranná multifunkčná hala.  </p>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_ikony ">
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4">
								<a href="#osobny_trener" class="slide_sekcia"><img src="img/osobny_trener.svg" alt="" >
								<div class="row">
								<p>Osobný tréner</p>
								</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4">
								<a href="#vyzivovy_poradca" class="slide_sekcia"><img src="img/vyzivovy_poradca.svg" alt="" >
								<div class="row">
									<p>Výživový poradca</p>
								</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4">
								<a href="#masaze" class="slide_sekcia"><img src="img/massage.svg" alt="" >
								<div class="row">
								<p>Masáže</p>
								</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4">
								<a href="#solarium" class="slide_sekcia"><img src="img/solarium.svg" alt="" >
								<div class="row">
								<p>Solárium</p>
								</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4">
								<a href="#valicross" class="slide_sekcia"><img src="img/valicross.svg" alt="" >
								<div class="row">
								<p>Valicross</p>
								</div>
								</a>
							</div>
							<div class="col-lg-4 col-md-6 col-sm-6 col-xs-4">
								<a href="#box" class="slide_sekcia"><img src="img/box.svg"  alt="">
								<div class="row">
								<p>Box</p>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

				<div class="container-fluid linky_youtube">
					<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe  src="https://www.youtube.com/embed/pf_1UJFH6_c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="embed-responsive embed-responsive-16by9">
									<iframe  src="https://www.youtube.com/embed/PwZB23YI_Us" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
							</div>
					</div>
				</div>


				<div class="container-fluid treneri nadpis_sekcie" id="osobny_trener">
					<div class="row">
						<h3>Osobný tréner</h3>
						<hr>
						<p>V prípade záujmu poskytujeme služby osobného trénera. Po vzájomnej dohode je  možné si vybrať medzi jednorazovým tréningom alebo dlhodobejšou
							spoluprácou s trénerom, v závislosti na požiadavkách a cieľoch klienta.</p>
					</div>
				</div>

					 <div class="container treneri2">
						 <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="osobny_trener_foto"></div>
								<h4>Luboš Šimún</h4> <h5>Kulturistika,Fitness,Silový trojboj</h5>
								<p>Tréner III. stupňa v kulturistike, fitness a silovom trojboji.</p>

							</div>
							 	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="osobny_trener_foto2"></div>

									<h4>Nadežda Luticová</h4> <h5>Fitness</h5>
									<p>Kondičný tréner 1.kvalifikačného stupňa.</p>

								</div>
						 </div>
					 </div>



				</div>
				</div>

				<div class="container-fluid  treneri nadpis_sekcie" id="vyzivovy_poradca">
					<div class="row">
						<h3>Výživový poradca</h3>
							<hr>
						<p>V prípade záujmu poskytujeme služby výživového poradcu formou zostavenia výživového
							plánu-jedálníčka, s ohľadom na požiadavky a ciele klienta.</p>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky"><img  src="/img/vyzivovy1.jpg" alt=""></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky "><img  src="/img/vyzivovy3.jpg" alt=""></div>


					</div>
				</div>

				<div class="container-fluid  treneri nadpis_sekcie" id="masaze">
					<div class="row">
						<h3>Masáže</h3>
						<hr>
						<p>V rámci služieb ponúkaných v našom fitnescentre ponúkame možnosť objednať sa na klasickú
							masáž s terapeutickým a relaxačným efektom. Služba je určená nielen našim zákazníkom, ale aj širokej verejnosti.</p>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky"><img  src="/img/massage1.jpg" alt=""></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky "><img  src="/img/massage2.jpg" alt=""></div>
					</div>
				</div>

				<div class="container-fluid  treneri nadpis_sekcie" id="solarium">
					<div class="row">
						<h3>Solárium</h3>
						<hr>
						<p>V priestoroch nášho fitnescentra sa nachádza aj vertikálne-stojace solárium s certifikovanými trubicami zodpovedajúcimi
							platnej norme, ktoré sú zárukou zdravého a kvalitného opaľovania.</p>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky "><img  src="/img/solar.jpg" alt=""></div>


					</div>
				</div>

				<div class="container-fluid  treneri nadpis_sekcie" id="valicross">
					<div class="row">
						<h3>Valicross</h3>
						<hr>
						<p>Valicross je skupinový tréning zameraný na všeobecný rozvoj sily, vytrvalosti, obratnosti a celkový rozvoj telesnej kondície jednotlivca.
							Cvičenie je vykonávané v skupine cvičencov, pod dohľadom kvalifikovaného trénera. Každý tréning je niečím iný, využívajúc silové, či vytrvalostné prvky z rôznych
							športových odvetví ako sú crossfit, vzpieranie, silový trojboj a podobne. Pri tomto tréningu sa nikdy nebudete nudiť a každý tréning je novou výzvou na prekonávanie
							svojich limitov.</p>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky "><img  src="/img/valicross.jpg" alt=""></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky "><img  src="/img/cross3.jpg" alt=""></div>


					</div>
				</div>

				<div class="container-fluid  treneri nadpis_sekcie" id="box">
					<div class="row">
						<h3>Box</h3>
						<hr>
						<p>Priestory funkčnej miestnosti sú vybavené tak, aby bolo možné trénovať aj individuálne tréningy bojových športov, akými sú box, kick-box, prípadne zápasenie. Takže nechýba špeciálna podlaha na tlmenie
							pádov-tatami, boxovacie vrecia či rôzne drobné náradie potrebné k takémuto tréningu (hrazdy, jednoručné činky, švihádlá a pod.)</p>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky "><img  src="/img/box.jpg" alt=""></div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sluzby_obrazky "><img  src="/img/box3.jpg" alt=""></div>

					</div>
				</div>


			<!--==========================
					  Maps Section
					============================-->

			<div class="container-fluid">
				<div class="row">
					<div class="maps">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2613.865439836015!2d19.310963315849346!3d49.07019239372371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4715a7bc80877a87%3A0xf80aaa9ba93ad6d!2sValibuk+Fitness!5e0!3m2!1scs!2ssk!4v1523305565388" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<!--==========================
					  Contact Section
					============================-->
					<footer class="footer-bs ">
						<div class="container-fluid">
							<div class="row">
								<div class=" col-lg-offset-2   col-md-offset-2 col-sm-offset-2 col-lg-2 col-md-2 col-sm-2 footer-nav animated fadeInUp">
									<h4>Menu</h4>
									<ul class="pages">
										<li><a class="footer_p_a" href="/">Domov</a></li>
										<li> <a  class="footer_p_a" href="/sluzby">Služby</a></li>
										<li><a class="footer_p_a" href="/cennik">Cenník</a></li>
										<li><a class="footer_p_a"  href="/reservations">Rezervácia</a></li>
										<li><a class="footer_p_a" href="http://7nutrition.sk" target="_blank">E-Shop</a></li>
										<li><a class="footer_p_a" href="/kontakt">Kontakt</a></li>
									</ul>
								</div>
								<div class="  col-lg-2 col-md-2 col-sm-2 footer-nav animated fadeInUp">
									<h4>Služby</h4>
									<ul class="pages">
										<li><a class="footer_p_a" href="/sluzby">Osobný tréner</a></li>
										<li><a class="footer_p_a" href="/sluzby">Výživový poradca</a></li>
										<li><a class="footer_p_a" href="/sluzby">Masáže</a></li>
										<li><a class="footer_p_a" href="/sluzby">Solárium</a></li>
										<li><a class="footer_p_a" href="/sluzby">Valicross</a></li>
										<li><a class="footer_p_a" href="/sluzby">Box</a></li>
									</ul>
								</div>


								<div class="   col-lg-2 col-md-2 col-sm-2  footer-nav animated fadeInLeft">
									<h4>Kontaktné údaje</h4>
									<div>
										<span>Adresa:</span>
										<p class="odkazy"><a href="https://www.google.com/maps?ll=49.070189,19.313152&z=16&t=m&hl=sk-SK&gl=SK&mapclient=embed&cid=1117080353544318317">Valibuk Fitness <br>Bystrická cesta 45 (areál Liptona)<br>034 01 Ružomberok</a></p>
									</div>
									<div>
										<span>E-mail:</span>
										<p class="odkazy"><a href="mailto:valibukfitness@gmail.com" >valibukfitness@gmail.com</a></p>
									</div>
									<div>
										<span>Telefón:</span>
										<p class="odkazy"><a href="tel:0948 013 548">0948 013 548</a></p>
									</div>
								</div>

								<div class="col-lg-2 col-md-2 col-sm-2  footer-nav animated fadeInRight">
									<h4>Otváracie hodiny</h4>
									<div>
										<span>Pon-Pia</span>
										<p>7:00-21:00</p>
									</div>
									<div>
										<span>Sobota</span>
										<p>9:00-12:00</p>
										<p>15:00-21:00</p>
									</div>
									<div>
										<span>Nedeľa</span>
										<p>15:00-21:00</p>
									</div>

									<div class=" col-lg-offset-2 col-md-offset-2 col-sm-offset-2 ">
									</div>
								</div>
							</div>
						</div>
					</footer>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
					<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
					<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
					<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
					<script src="js/custom.js"> </script>
</body>
</html>
