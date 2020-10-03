<section id="intro">
	<div class="container">
		<div class="hidden">
			@yield('featureImage','<img src="img/grinder.svg">')
		</div>
		<div>
			<div class="page-header prose">
				<h1>@yield('pageTitle')</h1>
				<h2><em>@yield('pageSubtitle')</em></h2>
			</div>
			@yield('body')
		</div>
	</div>
	<div class="container">
		@yield('body2')
	</div>
</section>