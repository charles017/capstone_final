
<x-layout>

  <section class="banner-holder mt-5 vh-100">
    <div class="container-fluid mt-5">
      <div class="row justify-content-center">
        <div class="col-md-3 mt-md-5 my-md-5 py-md-5"></div>
        <div class="col-md-3 col-sm-12 mt-5 my-md-5 py-md-5">
          <h1 class="mt-5">Whats on your mind?</h1>
          <p class="lead text-black mt-5">A webapp to share thoughts, ideas or anything in mind, powered by &ldquo;Laravel&rdquo; </p>
        </div>
        <div class="col-md-3 col-sm-12 mt-md-5 my-md-5 py-md-5">
          <form action="/register" method="POST" id="registration-form">
            @csrf
            <div class="form-group mt-5">
              <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
              <input name="username" value= "{{old('username')}}" id="username-register" class="form-control" type="text" placeholder="Pick a username" autocomplete="off" />
              @error('username')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror
            </div>

            <div class="form-group">
              <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
              <input name="email" value= "{{old('email')}}" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
              @error('email')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror
            </div>

            <div class="form-group">
              <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
              <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
              @error('password')
            <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
            </div>

            <div class="form-group">
              <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm Password</small></label>
              <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />
              @error('password_confirmation')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
              @enderror
            </div>

            <button type="submit" class="py-3 mt-4 btn btn-lg btn-dark btn-block">Sign up for Larashare</button>
          </form>
        </div>
        <div class="col-md-3 mt-md-5 my-md-5 py-md-5"></div>
      </div>
    </div>
  </section>  
  
</x-layout>

    