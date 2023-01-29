<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kitchen|Panel</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    

    <div class="container mb-4 mt-3">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-primary">New/Pending Orders</a>
                <a class="btn btn-success">Preparing Orders</a>
                <a class="btn btn-secondary">Read Orders</a>
            </div>
        </div>
    </div>



    <div class="container mb-4 mt-3">
        <div class="row">
            {{-- new/pending --}}

            <div class="col-4" id="newOrder">
                {{-- <div class="col-12 mb-3"> --}}
                    @for($i = 0; $i<20; $i++)
                        <div class="card mb-2" style="width: 100%;">
        
                            <div class="row p-2">
                                <div class="col-6">
                                    <a href="#" class="float-left">Table # 1</a>
                                </div>
        
                                <div class="col-6">
                                    <a href="#" class="float-right">Order # {{ $i }}</a>
                                </div>
        
                            </div>
        
                            <div class="row">
                                <div class="col-8">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title">Total Items:</span></li>
                                    </ul>
                                </div>
        
                                <div class="col-4 mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title">4</span></li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="col-8">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title">Status: Pending</span></li>
                                    </ul>
                                </div>
        
                                <div class="col-4 mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title"><a class="btn btn-success">Accept</a></span></li>
                                        
                                    </ul>
                                </div>
                            </div>
        
                        </div>
                    @endfor
                {{-- </div> --}}
            </div>




            {{-- preparing --}}

            <div class="col-4">
                {{-- <div class="col-12 mb-3"> --}}
                    @for($i = 21; $i<30; $i++)
                        <div class="card mb-2" style="width: 100%;">
        
                            <div class="row p-2">
                                <div class="col-6">
                                    <a href="#" class="float-left">Table # 1</a>
                                </div>
        
                                <div class="col-6">
                                    <a href="#" class="float-right">Order # {{ $i }}</a>
                                </div>
        
                            </div>
        
                            <div class="row">
                                <div class="col-8">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title">Total Items:</span></li>
                                    </ul>
                                </div>
        
                                <div class="col-4 mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title">4</span></li>
                                    </ul>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="col-8">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title">Status: Preparing</span></li>
                                    </ul>
                                </div>
        
                                <div class="col-4 mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="card-title"><a class="btn btn-secondary">Ready</a></span></li>
                                    </ul>
                                </div>
                            </div>
        
                        </div>
                      @endfor
                {{-- </div> --}}
            </div>



            {{-- Read --}}

            <div class="col-4">
                {{-- <div class="col-12 mb-3"> --}}
                    <div class="card" style="width: 100%;">
    
                        <div class="row p-2">
                            <div class="col-6">
                                <a href="#" class="float-left">Table # 1</a>
                            </div>
    
                            <div class="col-6">
                                <a href="#" class="float-right">Order # 1</a>
                            </div>
    
                        </div>
    
                        <div class="row">
                            <div class="col-8">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="card-title">Total Items:</span></li>
                                </ul>
                            </div>
    
                            <div class="col-4 mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="card-title">4</span></li>
                                </ul>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-8">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="card-title">Status: ready</span></li>
                                </ul>
                            </div>
    
                            <div class="col-4 mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="card-title"><a class="btn btn-primary">Done</a></span></li>
                                </ul>
                            </div>
                        </div>
    
                      </div>
                      
                {{-- </div> --}}
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>

$(document).ready(function() {
  setInterval(function() {
    // var newOrder = document.getElementById("newOrder");
    // window.location.reload();
    $("#newOrder").load(location.href + " #newOrder");
  }, 3000);
});
           
        </script>

        

    {{-- <div class="container">
        <div class="row">
            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Total Items:</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">4</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Status: Pending</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title"><a class="btn btn-primary">Accept</a></span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

            <div class="col-4 mb-3">
                <div class="card" style="width: 100%;">

                    <div class="row p-2">
                        <div class="col-6">
                            <a href="#" class="float-left">Table # 1</a>
                        </div>

                        <div class="col-6">
                            <a href="#" class="float-right">Order # 1</a>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Menu Name</span></li>
                            </ul>
                        </div>

                        <div class="col-4 mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="card-title">Quantity</span></li>
                            </ul>
                        </div>
                    </div>

                  </div>
            </div>

        </div>
    </div> --}}

    {{-- <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>sdfksd</h1>
            </div>
        </div>
    </div> --}}



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>