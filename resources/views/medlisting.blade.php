@extends('layout.main')

@section('content')

<div class="row mt-4" >

    <div class="col" >

    <h2>Medicines</h2>

    <table class="table">
    <thead>
      <tr>
        <th>Num</th>
        <th>Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
       
    <?php $num = 1; ?>
  


        @foreach($medicines as $key => $medicine)
      
      <tr>
        <td>{{($medicines->currentPage()-1)*$medicines->perPage()+$key+1}}</td>
        <td>{{$medicine->name}}

        
        </td>
        <td>{{$medicine->price}}</td>
      </tr>
 
      @endforeach

    </tbody>
  </table>

  {{ $medicines->links() }}

    </div>

</div>


@endsection