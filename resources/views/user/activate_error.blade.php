@extends('layouts.epetcare.index')
@section('content')
	<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="/epetcare/images/bg/bg6.jpg">
		<div class="container pt-10 pb-5">
			<!-- Section Content -->
			<div class="section-content">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="title">Активация неудачна!</h2>
						<ol class="breadcrumb text-center text-black mt-10">
							<li><a href="/">Главная</a></li>

						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container mt-30 mb-0 pt-0 pb-0">
			<div class="row">
				<div class="col-md-0 col-md-offset-1">
					<div class="blog-posts single-post">
						<article class="post clearfix mb-0">

							<div class="entry-content center-block">

								@if( isset($error))
								 <p class="mb-20" style="color: #ff2222;text-align: center">{!! $error  !!}</p>
								@endif


							</div>
						</article>


					</div>
				</div>
			</div>
		</div>
	</section>



@endsection