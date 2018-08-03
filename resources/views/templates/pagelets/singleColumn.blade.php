<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				@yield('featureImage','<img src="img/grinder.svg">')
			</div>
			<div class="col-md-9 col-sm-9">
				<div class="page-header" style="margin-top: -20px">
					<h1>@yield('pageTitle')</h1>
					<em>@yield('pageSubtitle')</em>	
				</div>
				@yield('body')
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				@yield('theRest')
			</div>
		</div>
	</div>
</section>