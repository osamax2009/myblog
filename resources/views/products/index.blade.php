@extends('layout.default')
@section('content')
    <main class="px-3">
          </br>
          </br>
        <div class="row">
            @foreach ($products as $item)
            
                <div class="col-sm">
                    <div class="card" style="width: 12rem;">
                        <img class="card-img-top" src={{url($item->imageUrl)}} alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-danger">{{$item->title}}</h5>
                            <p class="card-text">{{$item->description}}</p>
                             <h5 class="card-title text-primary">{{$item->price}}</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                    </div>
            </div>
             @endforeach
        
</div>
  </main>

@endsection