@extends('layout.default')
@section('content')
   <div class="container ">
   </br>
    </br>
    <h1 style="color: blueviolet">Create product Page </h1>
    </br>
    </br>

                @if ($errors->any())

                <div class="mt-3 alert alert-primary alert-dismissible fade show" >
                    <div class="alert-text text-white">
                        {{$errors->first()}}
                    </div>
                </div>
                    
                @endif
      <div class="row">

        <form action="/createproduct" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="mb-3 mt-3">
                <label for="title" class="form-label">product title</label>
                <input type="text" name="title" class="form-control" placeholder="Enter product Title">
            </div>
             <div class="mb-3 mt-3">
                <label for="description" class="form-label">product description</label>
                <input type="text" name="description" class="form-control" placeholder="Enter product description">
            </div>
            <div class="mb-3 mt-3">
                <label for="price" class="form-label">product price</label>
                <input type="number" name="price" class="form-control" placeholder="Enter product price">
            </div>
            <div class="mb-3 mt-3">
                <label for="image" class="form-label">product image</label>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>





            
            <button type="submit" class="btn btn-primary">submit</button>
        </form>
       
      </div>
   

   </div>


@endsection