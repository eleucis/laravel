@extends('main.master')

@section('content')

    <div class ="container">
        <div class = "row">
@foreach($blogs as $blog)

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{   $blog ->title }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
    <p class="card-text">{{   $blog ->description }}</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>





@endforeach
</div>
</div>

@endsection