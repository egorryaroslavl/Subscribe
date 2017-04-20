$( function(){

	if( $( "#message" ).length > 0 ){
		CKEDITOR.replace( 'message' );
		CKEDITOR.config.allowedContent = true;
		CKEDITOR.config.height = 150;
	}
	/* check / uncheck */
	$( "#checkAll" ).change( function(){
		$( "input:checkbox" ).prop( 'checked', $( this ).prop( "checked" ) );
		if( $( "#checkAll" ).prop( "checked" ) ){
			$( "#change-all-prices" ).fadeIn( 900 );
		}
	} );


	$( '.dual_select' ).bootstrapDualListbox( {
		selectorMinimalHeight: 160,
		infoTextEmpty        : "Пустой список",
		moveAllLabel         : 'Выбрать все',
		removeAllLabel       : 'Отменить все',

	} );


	/*   */
	$( "body" ).on( "click", ".partners-del", function(){

		var ids = {};
		var countChecked = $( '.del-partner-checkbox:checkbox:checked' ).length;
		if( countChecked > 0 ){
			if( countChecked == 1 ){
				alert( "Из-за одной позиции напрягаться не буду! " );
				return false;
			}

			if( confirm( countChecked + " пунктов будет удалено!\nПродолжить?" ) ){



				/* набиваем объект данными */
				$( '.del-partner-checkbox:checkbox:checked' ).each( function(){

					ids[ $( this ).data( 'id' ) ] = $( this ).data( 'id' );

				} );
				/* городим json */
				var idsJson = JSON.stringify( ids );

				/* идём генерить форму */
				$.ajax( {
					type   : "POST",
					url    : "/admin/partners/delete",
					data   : {
						ids   : idsJson,
						_token: $( "#_token" ).val()
					},
					success: function( msg ){

						var res = jQuery.parseJSON( msg );
						if( res.error == 'ok' ){
							document.location.reload( true );
						}
						if( res.error == 'error' ){
							alert( 'Операция закончилось ошибкой!' )
						}

					}
				} );
			}

		}

	} );


	$( "body" ).on( "click", "#submitForm", function(){
		var message = CKEDITOR.instances.message.getData();
		$( "#message" ).text( message );
		$.ajax( {
			type   : "POST",
			url    : "/testMail",
			data   : $( '#data-form' ).serialize(),
			success: function( msg ){
				var res = jQuery.parseJSON( msg );
				if( res.error == 'ok' ){
					alert( "Тестовое сообщение отправлено! Поверьте почту.\nЕсли сообщение не содержит ошибок нажмите кнопку  \"ГОТОВО\" " );
				}
				if( res.error == 'error' ){
					alert( 'Операция закончилось ошибкой!' )
				}
			}
		} );

	} );


	$( "body" ).on( "keyup", "#partner-search", function(){

		var partner_name = $( this ).val();
		if( partner_name.length > 2 ){

			$( "#partnerSearchResult" ).load( "/partnerSearch",
				{

					partner_name: partner_name,
					_token      : $( "#_token" ).val()

				},
				function(){
				} );


		}


	} );


} );

