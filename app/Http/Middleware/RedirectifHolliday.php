<?php

	namespace App\Http\Middleware;

	use Closure;
	use Route;

	class RedirectifHolliday
	{
		/**
		 * Handle an incoming request.
		 *
		 * @param  \Illuminate\Http\Request $request
		 * @param  \Closure                 $next
		 *
		 * @return mixed
		 */
		public function handle( $request, Closure $next )
		{
			if( date( 'd.m' ) === '26.05'
				&& $_SERVER[ 'REQUEST_URI' ] !== '/holliday_today' ){

				return redirect( '/holliday_today' );

			}

			if( date( 'd.m' ) !== '26.05'
				&& $_SERVER[ 'REQUEST_URI' ] === '/holliday_today' ){

				return back();

			}


			return $next( $request );


		}
	}
