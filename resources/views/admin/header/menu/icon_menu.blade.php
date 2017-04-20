<?php


	$menuHtml = '<li>Пусто...</li>';
	$items    = config( 'admin.menu' );
	$Count    = count( $items );
	

	if( $Count > 0 ){

		$menuHtml = '';

		for( $i = 0; $i < $Count; $i++ ){


			$count    = '';
			if( $items[ $i ][ 'url' ] === '/admin/partners' ){
			 
				$num = \DB::table('partners')->count('id');
				$count = '<span class="animated fadeInDown num">'.$num.'</span>';
			}

			if( $items[ $i ][ 'url' ] === '/admin/messages' ){

				$num = \DB::table('messages')->count('id');
				$count = '<span class="animated fadeInDown  num">'.$num.'</span>';
			}
			

			$menuHtml .= '
		<div class="col-lg-4 col-md-4">
		<a href="' . $items[ $i ][ 'url' ] . '">
			<div class="widget icon-menu-item  style1 lazur-bg">
				<div class="row">
					<div class="col-xs-4">
						<i class="' . $items[ $i ] [ 'icon' ] . ' fa-5x"></i>
					</div>
					<div class="col-xs-8" style="margin-left:-30px">
						<span> Раздел </span>
						<h2 class="font-bold" style="position: relative">' . $items[ $i ] [ 'title' ] . '' .$count. '</h2>
					</div>
				</div>
			</div>
			</a>
		</div>
            ';


		}

	}


?>
<div class="wrapper wrapper-content animated fadeInRight">
	<div class="row">
		{!! $menuHtml !!}
	</div>
</div>
<style>
	.num{
		position:          absolute;
		top:               -20px;
		right:             -20px;
		width:             50px;
		height:            40px;
		line-height:       40px;
		text-align:        center;
		font-size:         20px;
		background:        rgba(255, 109, 0, 0.8);
		border-radius:     10px;
		-moz-transform:    rotate(40deg) scale(1, 1) skewX(0deg) skewY(0deg) translate(0px, 0px);
		-webkit-transform: rotate(40deg) scale(1, 1) skew(0deg, 0deg) translate(0px, 0px);
		-o-transform:      rotate(40deg) scale(1, 1) skew(0deg, 0deg) translate(0px, 0px);
		-ms-transform:     rotate(40deg) scale(1, 1) skew(0deg, 0deg) translate(0px, 0px);
		transform:         rotate(40deg) scale(1, 1) skew(0deg, 0deg) translate(0px, 0px);
		opacity:           0.5;
		}
</style>
