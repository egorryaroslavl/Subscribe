<?php

	namespace App\Http\Middleware;

	use Closure;

	class PartnerDataPrepare
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

			if( isset( $request->email ) ){

				$request->email = strtolower( trim( $request->email ) );

			}

			if( isset( $request['email'] ) ){

				$request['email'] = strtolower( trim( $request['email'] ) );

			}


			if( isset( $request->person ) ){

				$request->person = mb_convert_case( trim( $request->person ), MB_CASE_TITLE, "UTF-8" );
			}


			if( isset( $request['person'] ) ){

				$request['person'] = mb_convert_case( trim( $request['person'] ), MB_CASE_TITLE, "UTF-8" );
			}


			return $next( $request );
		}
	}
