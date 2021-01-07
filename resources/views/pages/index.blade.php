@extends('/layouts/app', ['title' => 'Acceuil'])

@section('index')
  
  <h1>@lang('text.welcom_title') {{ config('app.name') }}</h1>
  <h2> @lang('text.title')</h2>
  
  <div class="col-lg-8 mt-5 mt-lg-0">
  	
  	<form action="/" method="POST" role="form">
	    @csrf
	    <div class="form-row">
	    	<div class="col-lg-12 form-group">
	    		<input type="text" name="url" placeholder="https://exemple.com/toto-hero" class="form-control text-center" value="{{ old('url') }}" autofocus>
	    	</div>
	    	{!! 
	    		$errors->first('url', '<div class="col-lg-12 text-center text-danger"><h4 style="color: orange">:message</h4></div>') 
	    	!!}
	    </div>
	    <div class="text-center">
	    	<input type="submit" name="" class="get-started-btn" value="@lang('text.btn_reduce')">
	    </div>
	 </form>

	 @if( isset($shortened) )
	 	<div class="text-center">
	 		<br>
	 		<h2>@lang('text.address_found')<i class="icofont-hand-down"></i></h2>
			<h3>
				<p>
					<a style="color: white" href="{{ config('app.url') }}/{{ $shortened }}" target="blank">
						{{ config('app.url') }}/{{ $shortened }}
					</a>
				</p>
			</h3>
	 	</div>
	 @endif

  </div>

@stop
