<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--  CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:200i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
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
				<li><a href="#" >Rezervácia</a></li>
				<li ><a href="http://7nutrition.sk" target="_blank">E-shop</a></li>
				<li><a href="/kontakt" >Kontakt</a></li>
			</ul>
			<!-- Authentication Links -->
			<ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Prihlásenie</a></li>
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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Obnovenie hesla</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mailová addresa</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Heslo</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Potvrdenie Hesla</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
	                                <i class="fas fa-key"></i> Reset Hesla
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
	<div class="container-fluid panel">
		<div class="row">
			<div class=" col-lg-offset-2   col-md-offset-2 col-sm-offset-2 col-lg-2 col-md-2 col-sm-2 footer-nav animated fadeInUp">
				<h4>Menu</h4>
				<ul class="pages">
					<li><a class="footer_p_a" href="/">Domov</a></li>
					<li> <a  class="footer_p_a" href="/sluzby">Služby</a></li>
					<li><a class="footer_p_a" href="/cennik">Cenník</a></li>
					<li><a class="footer_p_a"  href="r.html">Rezervácia</a></li>
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

</body>
</html>

