<?php

	namespace App\Mail;

	use Illuminate\Bus\Queueable;
	use Illuminate\Mail\Mailable;
	use Illuminate\Queue\SerializesModels;
	use Illuminate\Contracts\Queue\ShouldQueue;

	class Reminder extends Mailable
	{
		use Queueable, SerializesModels;

		private $data;

		public function __construct( $data )
		{
			$this->data = $data;
		}


		public function build()
		{
			// dd($this->data['recipient']->name  );
			$message_type = 'reminder';

			if( isset( $this->data[ 'message_type' ] ) && !empty( $this->data[ 'message_type' ] ) ){
				$message_type = $this->data[ 'message_type' ];
			}


			return $this
				->from( 'info@tcyar.ru', 'ООО "Клуб путешественников - Ярославль"' )
				->subject(  $this->data[ 'subject' ] )
				->markdown( 'email.' . $message_type )
				->with( 'data', $this->data );
		}
	}
