@extends('layout.default')
@section('content')
   <div class="px-3">
   </br>
    </br>
    <h1 style="color: blueviolet">Our Products... </h1>
    </br>
    </br>
      <div class="row row-cols-1 row-cols-md-3">
        <a class="btn btn-danger" href="/createp" >Create new product</a>
      </div>
    <div class="row row-cols-1 row-cols-md-3  g-4">
        @foreach ($products as $item)
               <div class="col-sm d-flex">
                   <div class="card h-100" style="width: 12rem ;">
                        <img class="card-img-top" src="{{url ($item->imageUrl)}}" alt="product image">
                        <div class="card-body">
                            <div class="card-title text-primary">
                                {{$item->title}}
                            </div>
                            <div class="card-text">
                                {{$item->description}}
                            </div>
                            <div class="card-title text-danger">
                                {{$item->price}}
                            </div>
                        </div>
                   </div>
               </div>
        @endforeach
    </div>

   </div>


@endsection