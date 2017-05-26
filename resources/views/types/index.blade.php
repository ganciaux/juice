@extends('layouts.default', ['title'=>'Type de produits'])

@section('content')
    <div class="container">
      <h2>
        Type de produits
        <a href="{{ route('type.create') }}"><i class="fa fa-plus-circle fa-fw" title="Créer"></i></a>
      </h2>

    	@foreach ($types as $type)
        <div class="panel panel-default">
              <div class="panel-heading">
                {{ $type->name }}
                <a style="float: right;" href="{{ route('type.destroy', $type) }}"><i class="fa fa-trash-o" title="Supprimer"></i></a>
                <a style="float: right;" href="{{ route('type.edit', $type) }}"><i class="fa fa-pencil" title="Editer"></i></a>
              </div>
              <div class="panel-body">
                @foreach ($type->products as $product)
                   <div>
                     {{ $product->name }} 
                     <a href="{{ route('product.edit', $product) }}"><i class="fa fa-pencil" title="Editer"></i></a>
                     <a href="{{ route('product.destroy', $product) }}"><i class="fa fa-trash-o" title="Supprimer"></i></a>
                   </div> 
                @endforeach    
              </div>
          </div>
      @endforeach
    </div>
@stop
