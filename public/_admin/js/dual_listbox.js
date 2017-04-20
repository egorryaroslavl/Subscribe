$( function(){


	oneItemToSecond();
	oneItemToFirst();
	allToSecond();
	allToFirst();
	allSelectedToSecond();
	allSelectedToFirst();
/*	$('#first').selectable();
	$('#second').selectable();*/

	$( "body" ).on( "click", "#first li,  #second li", function(){
$(this).toggleClass('ui-selected')
	} );

	/*  Туда  */
	function oneItemToSecond(){

		$( "body" ).on( "dblclick", "#first li", function(){

			var element = $( this );
			var id = element.data( 'id' );
			var hiddenInput = '<input type="hidden" value="' + id + '" id="p' + id + '" name="partners[]">';
			var clone = $( element )
				.clone()
				.removeClass( 'animated slideOutLeft' )
				.addClass( 'animated slideInLeft' ).append( hiddenInput );

			clone.prependTo( "#second" );
			element.addClass( 'animated slideOutRight' );
			setTimeout( function(){
				element.remove()
			}, 900 );
		} );
	}

	/*  Сюда  */
	function oneItemToFirst(){

		$( "body" ).on( "dblclick", "#second li", function(){
			var element = $( this );
			var id = element.data( 'id' );
			var clone = $( element )
				.clone()
				.removeClass( 'animated slideOutLeft slideInRight' )
				.addClass( 'animated slideInRight' );
			clone.prependTo( "#first" );
			$( '#p' + id ).remove();
			element.removeClass( 'animated slideOutLeft slideInRight' )
				.addClass( 'animated slideInLeft' );
			setTimeout( function(){
				element.remove()
			}, 900 );
		} );
	}


	function allToSecond(){

		$( "body" ).on( "click", "#allToSecond", function(){
			var allOptions = $( "#first li" );
			if( allOptions.length > 0 ){
				allOptions.each( function( i ){
					var element = allOptions[ i ];
					var clone = $( element )
						.addClass( 'animated slideInLeft' )
						.clone();
					console.log( clone );
					clone.prependTo( "#second" ).prop( 'selected', true );
					element.remove()
				} );

			}

		} );
	}


	/*  Все Сюда  */
	function allToFirst(){
		$( "body" ).on( "click", "#allToFirst", function(){
			var allOptions = $( "#second li" );
			if( allOptions.length > 0 ){
				allOptions.each( function( i ){
					var element = allOptions[ i ];
					var clone = $( element )
						.addClass( 'animated slideInRight' )
						.clone();
					console.log( clone );
					clone.prependTo( "#first" );
					element.remove()
				} );

			}

		} );
	}


	function allSelectedToSecond(){

		$( "body" ).on( "click", "#firstToSecond", function(){
			var allOptions = $( "#first .ui-selected" );
			if( allOptions.length > 0 ){
				allOptions.each( function( i ){
					var element = allOptions[ i ];
					var clone = $( element )
						.addClass( 'animated slideInLeft' )
						.removeClass('ui-selected')
						.clone();
					console.log( clone );
					clone.prependTo( "#second" ).prop( 'selected', true );
					element.remove()
				} );

			}

		} );
	}


	function allSelectedToFirst(){

		$( "body" ).on( "click", "#secondToFirst", function(){

			var allOptions = $( "#second .ui-selected" );
			if( allOptions.length > 0 ){
				allOptions.each( function( i ){
					var element = allOptions[ i ];
					var clone = $( element )
						.addClass( 'animated slideInRight' )
						.removeClass('ui-selected')
						.clone();
					console.log( clone );
					clone.prependTo( "#first" );
					element.remove()
				} );
			}
		} );
	}
} );

