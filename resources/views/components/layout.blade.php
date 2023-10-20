<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Final Capstone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/main.css" />
  </head>
  <body class="bg-warning-subtle">
    <header class="header-bar mb=5">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg bg-warning small border-bottom shadow-lg fixed-top">
        <div class="container justify-content-between">
          <a href="/"  class="navbar-brand me-auto">
            <span class="bg-gradient me-auto">
              LaraShare
            </span>
          </a>
          @auth 
          <div class="flex-row my-3 my-md-0">
            <a href="/profile/{{auth()->user()->username}}" class="mr-2"><img title="My Profile" data-toggle="tooltip" data-placement="bottom" style="width: 32px; height: 32px; border-radius: 16px" src="{{auth()->user()->avatar}}" /></a>
            <a class="btn btn-sm btn-success mr-2 mx-2" href="/create-post">Create Post</a>
            <form action="/logout" method="POST" class="d-inline">
              @csrf
              <button class="btn btn-sm btn-dark mx-2">Sign Out</button>
            </form>
          </div>
          @else
            <form class="d-flex" action="/login" method="POST" class="mb-0 pt-2 pt-md-0">
              @csrf
              <div class="row align-items-center">
                <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                  <input name="loginusername" class="form-control form-control-sm input-dark" type="text" placeholder="Username" autocomplete="off" />
                </div>
                <div class="col-md mr-0 pr-md-0 mb-3 mb-md-0">
                  <input name="loginpassword" class="form-control form-control-sm input-dark" type="password" placeholder="Password" />
                </div>
                <div class="col-md-auto">
                  <button class="btn btn-dark btn-sm">Sign In</button>
                </div>
              </div>
            </form>
            @endauth
          </div>        
      </nav>
      <!--Navbar-->
      </header>
  

  @If (session()->has('success'))
  <div class="container container--narrow">
    <div class="alert alert-success text-center">
      {{session('success')}}
    </div>
  </div>
  @endif

  @If (session()->has('failure'))
  <div class="container container--narrow">
    <div class="alert alert-danger text-center">
      {{session('failure')}}
    </div>
  </div>

  @endif
        
    {{$slot}}


    <!-- footer begins --> <footer class="bg-warning text-center small text-black py-3 fixed-bottom border-top">
      <p class="m-0">Copyright &copy; {{date('Y')}}  <a href="/" class="text-muted">LaraShare</a>. All rights reserved.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>