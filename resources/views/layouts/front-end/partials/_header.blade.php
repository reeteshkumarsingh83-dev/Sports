    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
      <div class="container">
        <img src="{{static_assets('app/public/company').'/'.$web_config['web_logo']->value}}" alt="" style="height:60px">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <!-- <li class="nav-item"><a class="nav-link " href="a">Link</a></li> -->
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Shop</a>
            </li>
            <!-- <li class="nav-item"><a class="nav-link" href="a">About</a></li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{route('about-us')}}">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contacts')}}">Contact</a>
              <div>
            </li>
            <li class="nav-item">
              <a  class="nav-link" href="{{route('customer.auth.login')}}">Login</a>
              <div class="mx-2">
              </div>
            </li>
            <li class="nav-item">
              <i class="fa fa-search" aria-hidden="true"></i>
              <a href="cart.html">
                <i class="fa fa-shopping-bag"></i>
              </a>
            </li>
        </div>
      </div>
    </nav>
    <!-- login Modal -->
    <div class="modal fade " id="loginModal" tabindex="-1" aria-labelledby="loinModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
        <div class="modal-content ">
          <div class="modal-header ">
            <h1 class=" modal-title fs-5  text-uppercase" style="margin: 0 auto;" id="loginModalLabel">Login</h1>
            <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address / Mobile Number</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
              </div>
              <!-- <div class="mb-3"><label for="mobNumber" class="form-label">Mobile Number</label><input type="mobNumber" class="form-control" id="exampleInputmobilenumber" name="mobNumber"></div> -->
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputpassword" name="password">
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>