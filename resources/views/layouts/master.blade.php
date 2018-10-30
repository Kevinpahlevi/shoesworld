<!doctype html>
<html lang="{{ app()->getLocale() }}" ng-app="apps">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="/css/bootstrap.css" type="text/css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/models.css">     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/angular.min.js"></script>
  <script type="text/javascript" src="/js/app.js"></script>


        <title>ShoesWorld</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body ng-controller="countItem">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
          <a class="navbar-brand" href="/">ShoesWorld</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a href="/">
                <button class="btn btn-warning">Home <span class="sr-only">(current)</span></button>
                </a>
              </li>
              <li class="nav-item">
                <a href="/">
                <button class="btn btn-warning">Product list <span class="sr-only">(current)</span></button>
                </a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-warning my-2 my-sm-0" type="submit" style="color:black">Search</button>
            </form>
              <button type="button" class="btn btn-warning cart" data-toggle="modal" data-target="#exampleModalCenter">
                    My Cart <span class="badge badge-dark">@{{data}}</span>
                </button>
            </div>
        </nav>

        <!--  -->

  <div class="container">
        <!-- @yield('content') -->
              <h2>New Product</h2>
              <hr>
      <div class="row gridproduct card-group">
      <!-- 1 -->
      <div class="col-sm">
       <div class="card product">
        <img class="card-img-top" src="/img/1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" >Nike Air Jordan Retro Red White</h5>
          <p class="card-text">
            <div class="circlecolor" style="  background-color: red"></div>
            <div class="circlecolor" style="  background-color: black"></div>
            <div class="circlecolor" style="  background-color: white"></div>
          </p>
          <p class="card-text" ng-model="price1">$200</p>
            <button class="btn btn-outline-primary btn-sm" ng-click="addCount('Nike Air Jordan Retro Red White',200)">Add to Cart</button>
        </div>
       </div>
      </div>
      <!--  -->
      <div class="col-sm">
       <div class="card product">
        <img class="card-img-top" src="/img/2.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nike Air 270 Flyknit Midnight Navy</h5>
          <p class="card-text">
            <div class="circlecolor" style="  background-color: #000066"></div>
            <div class="circlecolor" style="  background-color: #0000ff"></div>
            <div class="circlecolor" style="  background-color: white"></div>
          </p>
          <p class="card-text">$250</p>
          <button class="btn btn-outline-primary btn-sm" ng-click="addCount('Nike Air 270 Flyknit Midnight Navy',250)">Add to Cart</button>
        </div>
       </div>
      </div>
      <!--  -->
      <div class="col-sm">
       <div class="card product">
        <img class="card-img-top" src="/img/3.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nike Roshe Run Coastal Blue</h5>
          <p class="card-text">
            <div class="circlecolor" style="  background-color: #3399ff"></div>
            <div class="circlecolor" style="  background-color: white"></div>
          </p>
          <p class="card-text">$150</p>
          <button class="btn btn-outline-primary btn-sm" ng-click="addCount('Nike Roshe Run Coastal Blue',150)">Add to Cart</button>
        </div>
       </div>
      </div>
      <!--  -->
      <div class="col-sm">
       <div class="card product">
        <img class="card-img-top" src="/img/4.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Nike Roshe Run Wolf Grey</h5>
          <p class="card-text">
            <div class="circlecolor" style="  background-color: grey"></div>
            <div class="circlecolor" style="  background-color: white"></div>
          </p>
          <p class="card-text">$80</p>
          <button class="btn btn-outline-primary btn-sm" ng-click="addCount('Nike Roshe Run Wolf Grey',80)">Add to Cart</button>
        </div>
       </div>
      </div>
      <!--  -->
        </div>
  </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Your Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      Count item Result : @{{data}}
                      <ul>
                          <li ng-repeat="dn in shoes"> @{{ dn.item }} @{{dn.price}}
                        <button class="btn btn-sm btn-danger float-right" ng-click="removeCart(dn.item,dn.price)">x</button>
                                <hr> </li>

                      </ul>
                      <div class="alert alert-primary" role="alert">
                          Total price : @{{total}}
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Check out</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end Modal -->

        <!--  -->
        <div class="footer bg-primary" style="min-height: 50px">
            <div class="foot">&copy; ShoesWorld-this ecommerce web build with laravel,angular,boostrap etc for research purpose, all disclaimer is from @frozenkevin</div>
        </div>
    </body>
</html>