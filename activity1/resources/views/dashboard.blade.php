@extends('main.master')

@section('content')
<html>

    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-4">

            @if($errors->any())
                 @foreach ($errors->all() as $error)
                    <div class="alert alert-danger"> {{$error}} </div>
                @endforeach
            @endif
                <form method="POST" action="{{route('login.submit')}}" style="border: 1px solid #ccc; padding: 20px; border-radius: 10px;">
                    @csrf
                    <div class="row mb-3">
                        <div class="col">
                            <label for="username" class="form-label">Email</label>
                            <input type="username" class="form-control" id="username" name="username" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="#" id="forgot" class="forgot-password-link">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-8" style="margin-bottom: 90px;">
                <div class="text-center" style="margin-bottom: 80px;">
                    <h1>Pricing</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet gravida arcu. Integer ac eros justo. Donec in magna sed libero tincidunt vestibulum. Nam non ligula nec dui tempus viverra. Proin at lacus ipsum. Donec rhoncus ligula et libero venenatis, eu interdum orci sagittis.</p>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                        @if($blog['status'] == 0)
                            <div class="col-lg-4 col-md-12 pb-4">
                                <div class="card shadow-sm">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$blog['title']}}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4 col-md-12 pb-4">
                                <div class="card shadow-sm">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$blog['title']}}</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach


                    <div class="text-center" style="margin-top: 50px;">
                    <h5><strong>Compare Plans</strong></h5>
                </div>
                    <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Free</th>
      <th scope="col">Pro</th>
      <th scope="col">Enterprise</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Public</th>
      <td>✓</td>
      <td>✓</td>
      <td>✓</td>
    </tr>
    <tr>
      <th scope="row">Private</th>
      <td>✓</td>
      <td>✓</td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">Permissions</th>
      <td></td>
      <td>✓</td>
      <td>✓</td>
    </tr>
  </tbody>
</table>




                </div>
            </div>
        </div>
    </div>

</html>

<style>
    .card:hover {
        transform: scale(1.1);
    }

    .card {
        transition: transform 0.3s;
    }

    .carousel-inner {
        max-height: 600px;
    }

    img {
        max-height: 600px;
    }

    .carousel-indicator img {
        max-width: 100px;
    }
</style>

@endsection
