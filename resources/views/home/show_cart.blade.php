<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
        .to{
            text-align: center;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">
   
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
       
      

      <div class="contanier mt-4 pt-7">
        
             <table class="table  table-hover table-striped table-bordered">
            <thead>
                <tr>
                    <th scope="col">Product title</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            <?php $totalprice=0; ?>

                @foreach($cart as $cart)
                <tr>
                    <td>{{$cart->product_title}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>{{$cart->price}}</td>
                    <td>
                        <img class="rounded-3" height="50" width="50" src="/prodcut/{{$cart->image}}" alt="">
                    </td>
                    <td><a href="{{url('/remove_cart',$cart->id)}}" class="btn btn-danger">Remove Product</a></td>
                </tr>
                <?php $totalprice=$totalprice + $cart->price ?>
                @endforeach

                
              
  
            </tbody>
        </table> <br><br>

        <div class="to uppercase">
            <h3>TotalPrice : ${{$totalprice}}</h3>
        </div><br>

        <div class="container to">
            <h1>Proceed To order</h1>
            <a href="{{url('cash_order')}}" class="btn btn-danger"> Cash On Delivery</a>
            <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using  Card</a>
        </div><br>
        
      
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
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>