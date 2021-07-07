@extends("layout.layout")
@section("content")
<div class="container">
    <center>
    <h1 class="indigo-text mt-3 d-inline">Welcome From Pizza World</h1>
    <img src="{{asset('images/pizza1.jpg')}}" class="ml-4 mt-2 img-responsive" alt="">
    </center>
    @if(Session("success"))
    <div class="alert alert-success">{{Session("success")}}</div>
    @endif

    
    <!-- Material form login -->
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <div class="card mt-4">
        
            <h5 class="card-header info-color white-text text-center py-4">
              <strong>Pizza Order Form</strong>
            </h5>
          
            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">
          
              <!-- Form -->
              <form action="{{route('insert')}}" method="post" class="text-center" style="color: #757575;">
              @csrf
               <!-- User Name -->
               <div class="md-form">
                <input type="text" id="materialLoginFormEmail" class="form-control" name="username">
                <label for="materialLoginFormEmail">User Name</label>
                @error('username')
                <p class="text-danger">{{$message}}</p>
                @enderror
              </div>
                <!-- Pizza Name -->
                <div class="md-form">
                  <input type="text" id="materialLoginFormEmail" class="form-control" name="pizza_name">
                  <label for="materialLoginFormEmail">Pizza Name</label>
                   @error('pizza_name')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
          
                <!-- Toppings -->
                <div class="md-form">
                  <input type="text" id="materialLoginFormPassword" class="form-control" name="topping">
                  <label for="materialLoginFormPassword">Toppings</label>
                   @error('topping')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
        
                <!-- Sauce -->
                   <div class="md-form">
                    <input type="text" id="materialLoginFormPassword" class="form-control" name="sauce">
                    <label for="materialLoginFormPassword">Sauce</label>
                     @error('sauce')
                <p class="text-danger">{{$message}}</p>
                @enderror
                  </div>
                <!-- Price -->
                <div class="md-form">
                  <input type="text" id="materialLoginFormPassword" class="form-control"name="price">
                  <label for="materialLoginFormPassword">Price</label>
                   @error('price')
                <p class="text-danger">{{$message}}</p>
                @enderror
                </div>
              
          
                <!-- Order button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Order</button>
          
                <!-- Register -->
                <p>Not a member?
                  <a href="">Register</a>
                </p>
          
                <!-- Social login -->
                <p>or sign in with:</p>
                <a type="button" class="btn-floating btn-fb btn-sm">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a type="button" class="btn-floating btn-tw btn-sm">
                  <i class="fab fa-twitter"></i>
                </a>
                <a type="button" class="btn-floating btn-li btn-sm">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a type="button" class="btn-floating btn-git btn-sm">
                  <i class="fab fa-github"></i>
                </a>
          
              </form>
              <!-- Form -->
          
            </div>
          
          </div>
        </div>
        <div class="col-md-3"></div>
  
</div>
@endsection