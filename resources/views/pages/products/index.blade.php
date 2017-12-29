@extends('layouts.master')
@section('menu')
@include('layouts.menu')
@endsection
@section('content')


<section>

  <div class="card pt-3">

    <table id="data" class="table table-striped table-bordered"width="100%">
      <thead class="thead-light">
        <tr>
          <th class="col">Produto</th>
          <th class="col">Preço</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        @include('pages.products._all')
        @endforeach
      </tbody>
    </table>


  </div>

</section>




@endsection
