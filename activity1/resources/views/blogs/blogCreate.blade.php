@extends('main.master')

@section('content')

<div class="container">
    <form method ="POST" action = "{{route('blog.create')}}">
        @csrf
        <div class="mb-3">
  <label for="title" class="form-label">Title</label>
  <input type="text" class="form-control" id="title" name="title">

</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <div class="d-grid">
    <button type="submit" class="btn btn-primary text-light main-bg">Save</button>
  </div>
</form>
</div>


@endsection 


