<style>

	h4{
		text-align: center;
		color: #ff6600;
	}
	img{
		width: 40px;
		height: 100px;
	}
</style>
<h4>ValibukFitness</h4>
<img  src="/img/logo.jpg" alt="">



Klikni sem pre zmenu hesla: <a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> {{ $link }} </a>
