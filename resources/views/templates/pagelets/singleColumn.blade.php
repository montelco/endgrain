<section id="intro">
	<div class="container">
		<section class="row-fluid">
			<div class="col-md-3">
				@yield('featureImage','<img src="img/grinder.svg">')
			</div>
			<div class="col-md-9 col-sm-12">
				<div class="page-header">
					<h1>@yield('pageTitle')</h1>
					<em>@yield('pageSubtitle')</em>	
				</div>
				@yield('body')
			</div>
		</section>
	</div>
</section>