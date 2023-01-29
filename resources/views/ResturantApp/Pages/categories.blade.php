@extends('ResturantApp.layout')
@section("content")

  
  <section class="products section">
      <div class="container">
          <div class="row">
              <div class="title text-left">
                  <h2>All Categories of This Resturant</h2>
              </div>
          </div>
          <div class="row">
              
              <div class="col-md-3">
                    <div class="card">
                        <a href="#"><img class="card-img-top w-100" src="{{ asset('resturantapp/images/1.jpg')}}" alt="Card image cap"></a>
                        <div class="card-body">
                            <p class="card-text text-center">Category 1</p>
                        </div>
                    </div>
              </div>
              
              
              <div class="col-md-3">
                <div class="card">
                    <a href="#"><img class="card-img-top w-100" src="{{ asset('resturantapp/images/1.jpg')}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <p class="card-text text-center">Category 1</p>
                    </div>
                </div>
          </div>

          <div class="col-md-3">
            <div class="card">
                <a href="#"><img class="card-img-top w-100" src="{{ asset('resturantapp/images/1.jpg')}}" alt="Card image cap"></a>
                <div class="card-body">
                    <p class="card-text text-center">Category 1</p>
                </div>
            </div>
      </div>
              
              
              <div class="col-md-3">
                <div class="card">
                    <a href="#"><img class="card-img-top w-100" src="{{ asset('resturantapp/images/1.jpg')}}" alt="Card image cap"></a>
                    <div class="card-body">
                        <p class="card-text text-center">Category 1</p>
                    </div>
                </div>
          </div>
  
             
              </div>
          
          </div>
      </div>
  </section>
  


@endsection