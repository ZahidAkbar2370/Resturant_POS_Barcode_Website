@extends('WebApp.layout')
@section("content")


<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "Resturants"</h2>
					<p>Total Registered Resturants - 1201/p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">All Category</h4>
	<ul class="category-list">
		<li><a href="#">Cafy <span>93</span></a></li>
		<li><a href="#">Resturant <span>233</span></a></li>
		<li><a href="#">Fast Food  <span>183</span></a></li>
		<li><a href="#">Food Track <span>343</span></a></li>
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Nearby</h4>

    <button class="btn btn-primary">Live Location</button>
	{{-- <ul class="category-list">
		<li><a href="#">New York <span>93</span></a></li>
		<li><a href="#">New Jersy <span>233</span></a></li>
		<li><a href="#">Florida  <span>183</span></a></li>
		<li><a href="#">California <span>120</span></a></li>
		<li><a href="#">Texas <span>40</span></a></li>
		<li><a href="#">Alaska <span>81</span></a></li>
	</ul> --}}
</div>

<div class="widget filter">
	<h4 class="widget-header">Show Resturants</h4>
	<select>
		<option>Popularity</option>
		<option value="1">Top rated</option>
		<option value="2">Lowest Price</option>
		<option value="4">Highest Price</option>
	</select>
</div>

<div class="widget price-range w-100">
	<h4 class="widget-header">Price Range</h4>
	<div class="block">
						<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
						data-slider-value="[0,5000]">
				<div class="d-flex justify-content-between mt-2">
						<span class="value">$10 - $5000</span>
				</div>
	</div>
</div>


				</div>
			</div>
			<div class="col-lg-9 col-md-8">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6 text-center text-md-left">
							<strong>Short</strong>
							<select>
								<option>Most Recent</option>
								<option value="1">Most Popular</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>
						<div class="col-md-6 text-center text-md-right mt-2 mt-md-0">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="#!" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="#"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid-list">
					<div class="row mt-30">
						

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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

                        <div class="col-lg-4 col-md-6">
							<!-- product card -->
                                <div class="product-item bg-light">
                                    <div class="card">
                                        <div class="thumb-content">
                                            <!-- <div class="price">$200</div> -->
                                            <a href="{{ url('resturants/home') }}">
                                                <img class="card-img-top img-fluid" src="https://media.slidesgo.com/storage/17002505/conversions/0-thai-restaurant-company-profile-thumb.jpg" alt="Card image cap">
                                                {{-- <img class="card-img-top img-fluid" src="{{ asset('webapp/images/products/products-1.jpg') }}" alt="Card image cap"> --}}
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title"><a href="#">Thai Resturant</a></h4>
                                            <ul class="list-inline product-meta">
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-folder-open-o"></i>Cafy</a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#"><i class="fa fa-calendar"></i>Orders-320</a>
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
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>


@endsection