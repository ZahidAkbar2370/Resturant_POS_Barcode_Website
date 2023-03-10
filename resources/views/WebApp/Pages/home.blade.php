@extends('WebApp.layout')
@section("content")




<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Buy & Sell Near You </h1>
					<p>Join the millions who buy and sell from each other <br> everyday in local communities around the world</p>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-coffee"></i> Cafe</a></li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-grav"></i> Fast Food</a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-cutlery"></i> Resturant</a>
							</li>
							<li class="list-inline-item">
								<a href="#"><i class="fa fa-car"></i> Food Track</a>
							</li>
						</ul>
					</div>

				</div>
				<!-- Advance Search -->
				<div class="advance-search">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-md-12 align-content-center">
								{{-- <form> --}}
									<div class="form-row">
										<div class="form-group col-xl-4 col-lg-3 col-md-6">
											<input type="text" class="form-control my-2 my-lg-1" id="inputtext4"
												placeholder="What are you looking for">
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<select class="w-100 form-control mt-lg-1 mt-md-2">
												<option>Category</option>
												<option value="1">Top rated</option>
												<option value="2">Lowest Price</option>
												<option value="4">Highest Price</option>
											</select>
										</div>
										<div class="form-group col-lg-3 col-md-6">
											<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Location">
										</div>
										<div class="form-group col-xl-2 col-lg-3 col-md-6 align-self-center">
											<a href="resturants"><button class="btn btn-primary active w-100">Search Now</button></a>
										</div>
									</div>
								{{-- </form> --}}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Resturants</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#">
                
				<img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
				{{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg')}}" alt="Card image cap"> --}}
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="{{ url('resturants/home') }}">Thai Resturant</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-folder-open-o"></i>Fast Food</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>Toatl Orders: 12312</a>
		    	</li>
		    </ul>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#">
                
				<img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
				{{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg')}}" alt="Card image cap"> --}}
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="{{ url('resturants/home') }}">Thai Resturant</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-folder-open-o"></i>Fast Food</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>Toatl Orders: 12312</a>
		    	</li>
		    </ul>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#">
                
				<img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
				{{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg')}}" alt="Card image cap"> --}}
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="{{ url('resturants/home') }}">Thai Resturant</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-folder-open-o"></i>Fast Food</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>Toatl Orders: 12312</a>
		    	</li>
		    </ul>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>
					
                    
                    <div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<!-- <div class="price">$200</div> -->
			<a href="#">
                
				<img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
				{{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg')}}" alt="Card image cap"> --}}
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="{{ url('resturants/home') }}">Thai Resturant</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-folder-open-o"></i>Fast Food</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-calendar"></i>Toatl Orders: 12312</a>
		    	</li>
		    </ul>
		    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, aliquam!</p>
		    <div class="product-ratings">
		    	<ul class="list-inline">
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
		    		<li class="list-inline-item"><i class="fa fa-star"></i></li>
		    	</ul>
		    </div>
		</div>
	</div>
</div>



					</div>



				</div>
			</div>
		</div>
	</div>
</section>




@endsection