<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <base href="/public">
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <link href="home/css/custom.css" rel="stylesheet" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
        
         <!-- end header section -->
     
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width:70%;
      padding:30px;">
           <div class="img-box" style="padding:20px;">
              <img src="product/{{ $product_item->image }}" alt="">
           </div>
           <div class="detail-box">
              <h5>
                {{$product_item->title}}
              </h5>
              @if ($product_item->discount!=null)
              <h6 style="color:red">
                Discount Price
              </br>
                ${{$product_item->discount}}
              </h6>
              <h6 style="text-decoration:line-through;color:blue">
                ${{ $product_item->price }}
              </h6>
              @else
              <h6 style="color:blue">
                ${{ $product_item->price }}
             </h6>
              @endif
              <h6>Product Category: {{ $product_item->category }}</h6>
              <h6>Product Details: {{ $product_item->description }}</h6>
              <h6>Available Quantity: {{ $product_item->quantity }}</h6>
              <form action="{{ url('add_cart',$product_item->id) }}" method="POST">
               @csrf 
               <div class="row">
                  <div class="col-md-4">
                      <input type="number" name="quantity" value="1" min="1" style="width: 100px;">
                  </div>
                  <div class="col-md-4">
                      <input type="submit" value="Add To Cart">
                   </div>
                  </div>
             </form>
           </div>
        </div>
     </div>
    </div>
      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="jhome/s/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
      <script>
         const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
         </script>
   </body>
</html>