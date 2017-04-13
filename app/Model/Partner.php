<?php

	namespace App\Model;

	use Illuminate\Database\Eloquent\Model;

	class Partner extends Model
	{
		/*		protected $table = 'partners';*/
		protected $fillable = [ 'name',  'person','status', 'email', 'description' ];
		protected $casts = [];
	}
