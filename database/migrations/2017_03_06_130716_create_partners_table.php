<?php

	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;

	class CreatePartnersTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create( 'partners', function ( Blueprint $table ){
				$table->increments( 'id' );
				$table->string( 'name' );
				$table->string( 'alias' );
				$table->string( 'person' );
				$table->string( 'email' );
				$table->text( 'description' );
				$table->enum( 'status', [ 'agency', 'tourist', 'staff', 'common' ] )->default( 'common' );
				$table->timestamps();
			} );
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::dropIfExists( 'partners' );
		}
	}
