@extends('main.master')

@section('content')
<section style = "background-color: #eee;">
    <div class="py-5">
        @foreach ($result->products as $date)

       
            <div class="row justify-content-center mb-3">
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                        <div class="bg-image hover-zoom ripple rounded ripple-surface thumbnail-image">
                        <img src="{{$date->thumbnail}}"
                            class="w-100" />
                        <a href="#!">
                            <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(253, 253, 253, 0.15);"></div>
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <h5>{{$date->title}}</h5>
                        <div class="d-flex flex-row">
                        <div class="text-danger mb-1 me-2">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span>{{$date->stock}}</span>
                        </div>
                        <div class="mt-1 mb-0 text-muted small">
                        <span>100% cotton</span>
                        <span class="text-primary"> • </span>
                        <span>Light weight</span>
                        <span class="text-primary"> • </span>
                        <span>Best finish<br /></span>
                        </div>
                        <div class="mb-2 text-muted small">
                        <span>Unique design</span>
                        <span class="text-primary"> • </span>
                        <span>For men</span>
                        <span class="text-primary"> • </span>
                        <span>Casual<br /></span>
                        </div>
                        <p class="text-truncate mb-4 mb-md-0">
                        {{$date->description}}
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                        <div class="d-flex flex-row align-items-center mb-1">
                        <h4 class="mb-1 me-1">{{$date->price}}</h4>
                        <span class="text-danger"><s>{{$date->discountPercentage    }}</s></span>
                        </div>
                        <h6 class="text-success">Free shipping</h6>
                        <div class="d-flex flex-column mt-4">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-sm" type="button">Details</button>
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary btn-sm mt-2" type="button">
                            Add to wishlist
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            @endforeach
    </div>
   
    <style>
        @media (max-width: 767.98px) { 
            .border-sm-start-none { 
                border-left: none !important; 
            } 
        }
        .thumbnail-image {
            max-height: 200px;
            img {
                max-height: 200px;
            }
        }
    

        

    </style>
    </section>
    @endsection