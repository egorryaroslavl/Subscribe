<?php

	namespace App\Model;

	use Illuminate\Database\Eloquent\Model;

	class Partner extends Model
	{
		/*		protected $table = 'partners';*/
		protected $fillable = [ 'name', 'person', 'status', 'email', 'description' ];
		protected $casts = [];


		public static function string( $id )
		{

			$data = Partner::find( $id );
			return $data->name . " : " . $data->email;

		}

		public static function data( $id )
		{

			return Partner::find( $id );


		}
	}


