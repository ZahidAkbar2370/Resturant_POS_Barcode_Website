@extends('ResturantApp.layout')
@section("content")


<section class="about section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="img-responsive" src="{{ asset('resturantapp/images/about/about.jpg')}}">
			</div>
			<div class="col-md-6">
				<h2 class="mt-40">About Our Resturant</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius enim, accusantium repellat ex autem numquam iure officiis facere vitae itaque.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>
				<a href="#" class="btn btn-main mt-20">Start Buying</a>
			</div>
		</div>
		{{-- <div class="row mt-40">
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
			<div class="col-md-3 text-center">
				<img src="images/about/awards-logo.png">
			</div>
		</div> --}}
	</div>
</section>

@endsection