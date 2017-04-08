<?php

	namespace App\Model;

	use Illuminate\Database\Eloquent\Model;

	class Set extends Model
	{
		protected $fillable = [ 'name', 'alias', 'set' ];
		protected $casts = [ 'set' => 'array' ];
	}

