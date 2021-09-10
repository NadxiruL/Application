@extends('layout.main')

@section('content')

<div class="row mt-4" >

    <div class="col" >

    <h2>Medicines</h2>

    <div class="card" style="width: 18rem;">
  <img src="../gambar/yoo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"> {{ $a->name }}</h5>
    <p class="card-text">{{ $a->description }}</p>
    <a href="#" class="btn btn-primary">Kiss me!</a> 
  </div>
</div>



    </div>

</div>

@endsection