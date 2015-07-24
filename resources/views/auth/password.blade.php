@extends('main')

@section('content')
	<section class="site-section site-section-light site-section-top themed-background-dark">
		<div class="container">
			<h1 class="text-center animation-slideDown"><i class="fa fa-arrow-right"></i> <strong>Password Reset</strong></h1>
			<h2 class="h3 text-center animation-slideUp">Enter your email below.</h2>
		</div>
	</section>
	<section class="site-content site-section">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3 col-lg-4 col-lg-offset-4 site-block">
					<!-- Log In Form -->
					@if (session('status'))
						<div class="alert alert-success">
							{{ session('status') }}
						</div>
					@endif

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
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<div class="col-xs-12">
								<div class="input-group">
									<span class="input-group-addon"><i class="gi gi-envelope"></i></span>
									<input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email" value="{{ old('email') }}">
								</div>
							</div>
						</div>

						<div class="form-group form-actions">

							<div class="col-xs-6 text-right">
								<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-arrow-right"></i> Send Password Reset Link</button>
							</div>
						</div>
						<div class="form-group">

						</div>
					</form>

					<!-- END Log In Form -->
				</div>
			</div>
			<hr>
		</div>
	</section>
@endsection
