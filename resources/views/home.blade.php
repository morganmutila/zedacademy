<x-layout title="{{ config('app.name') }} | Home">

<section class="py-4 py-md-3 bg-light">
	<div class="container">
		<div class="d-flex align-items-center">
			<div class="col-md-6 col-12 text-center text-md-start">
				<h1 class="fw-bold text-dark fs-1">Zambia's most creative online education platform</h1>
				<p class="my-3 h5 text-secondary d-none d-md-block">The online learning platform based on the Zambian secondary school syllabus.</p>
				<button type="button" class="btn btn-primary text-white fw-bold d-none d-md-inline-block mt-3 fs-5 px-md-4 py-md-2" data-bs-toggle="modal" data-bs-target="#modalSignUp">Get started</button>
				<a href="{{ route('register') }}" class="btn btn-primary d-md-none text-white mt-3">Get started</a>
			</div>
			<div class="col-md-6 d-md-block d-none">
				<img src="{{ asset('/images/hero.webp') }}" alt="Hero image" class="ml-4">
			</div>
		</div>	
	</div>	
</section>

<section id="filters" class="py-4">
	<div class="container">
		<div class="d-flex justify-content-between align-items-center">
			<div class="dropdown">
			  	<button class="btn btn-white border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
			    <span class="text-dark">Dropdown button</span>
			  	</button>
			  	<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
			    	<li><a class="dropdown-item" href="#">Action</a></li>
			   		<li><a class="dropdown-item" href="#">Another action</a></li>
			    	<li><a class="dropdown-item" href="#">Something else here</a></li>
			  	</ul>
			</div>
			<ul class="d-flex flex-row list-unstyled m-0">
				<li class="me-2"><a href="/categories" class="btn text-dark">All</a></li>
				@foreach($categories as $category)
					<li class="me-2"><a href="/shots/popular/{{ $category->slug  }}" class="btn text-dark">{{ $category->name }}</a>
					</li>
				@endforeach
			</ul>
</section>

<main class="container mb-5">
	<section class="row row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-4 gb-4">
		@forelse($shots as $shot)
			<x-shot-panel :shot="$shot"/>
		@empty
			<p class="lead">There are courses yet</p>
		@endforelse
	</section>
</main>


</x-layout>