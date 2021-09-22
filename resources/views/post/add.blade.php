@extends("post/home")


@section("content")
<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="col">
@foreach ($posts as $post)
<div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">
  {{ $post->address }}
  </div>
  <div class="card-body text-primary">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
</div>
@endforeach
 </div>
 </div>

 @endsection
