@extends("post/home")


@section("content")

@csrf_field
<form action="{{url('/insertpost')}}"  method="post" > 
<div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">url</label>
    <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter">
    
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" name="cat" id="exampleFormControlSelect1">
    @foreach ($cat as $cats)
      <option>
      {{ $cats->address }}
      </option>
      @endforeach
    </select>
  </div>
  <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection
