<?php 

	/********************************************************
	*													  	*
	*		Define the differents function helper			*
	*		of thi application. A Library					*
	*														*
	/*******************************************************/

	if (! function_exists('activeUrl')) {

		/**
	    * Display the home page.
	    *
	    * @param url would be active
	    * @return the class active on the route
	    */
		function activeUrl($url='')
		{
			return Route::is($url) ? 'active' : '' ;
		}
	}


	if (! function_exists('flash')) {
		
		/**
	    * Display the flash message.
	    *
	    * @param message display
	    * @param type of this message
	    * @return the message flash with the type
	    */	
		function flash($message, $type='success')
		{
			Session::flash('notification.message', $message);
		 	Session::flash('notification.type', $type);
		}

	}
