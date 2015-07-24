@extends('main')

@section('title')
	Sign Up | WiKee - Private Wiki Tool
@stop

@section('description')
	The best private wiki brought to you by WiKee
	@stop

	@section('content')
			<!-- Intro -->
	<section class="site-section site-section-light site-section-top themed-background-dark">
		<div class="container">
			<h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>Log In</strong></h1>
			<h2 class="h3 text-center animation-slideUp">Connect to your dashboard!</h2>
		</div>
	</section>
	<!-- END Intro -->

	<!-- Log In -->
	<section class="site-content site-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
					<!-- Log In Form -->
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<div class="col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
									<input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
								</div>
							</div>
						</div>
						<div class="form-group form-actions">
							<div class="col-xs-6">
								<label class="switch switch-primary">
									<input type="checkbox" id="login-remember-me" name="login-remember-me" checked><span></span>
								</label>
								<small>Remember me</small>
							</div>
							<div class="col-xs-6 text-right">
								<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Log In</button>
							</div>
						</div>
						<div class="form-group">

						</div>
					</form>
					<div class="text-center">
						<a href="{{ url('/password/email') }}"><small>Forgot password?</small></a>
					</div>
					<!-- END Log In Form -->
				</div>
			</div>
			<hr>
		</div>
	</section>
	<!-- END Log In -->

	<!-- Support Links -->
	<section class="site-content site-section">
		<div class="container">
			<div class="row row-items text-center">
				<div class="col-sm-3 animation-fadeIn">
					<a href="javascript:void(0)" class="circle themed-background">
						<i class="gi gi-life_preserver"></i>
					</a>
					<h4>Open a <strong>ticket</strong></h4>
				</div>
				<div class="col-sm-3 animation-fadeIn">
					<a href="javascript:void(0)" class="circle themed-background">
						<i class="gi gi-envelope"></i>
					</a>
					<h4><strong>Email</strong> Us</h4>
				</div>
				<div class="col-sm-3 animation-fadeIn">
					<a href="javascript:void(0)" class="circle themed-background">
						<i class="fa fa-comments"></i>
					</a>
					<h4><strong>Chat</strong> Live</h4>
				</div>
				<div class="col-sm-3 animation-fadeIn">
					<a href="javascript:void(0)" class="circle themed-background">
						<i class="fa fa-twitter"></i>
					</a>
					<h4><strong>Tweet</strong> Us</h4>
				</div>
			</div>
		</div>
	</section>
	<!-- END Support Links -->
@endsection
