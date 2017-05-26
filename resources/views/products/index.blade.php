@extends('layouts.default', ['title'=>'Produits'])

@section('content')
    <div class="container">
      <h2>
        Liste des produits
        <a href="{{ route('product.create') }}"><i class="fa fa-plus-circle fa-fw" title="Créer"></i></a>
      </h2>

    	@foreach ($products as $product)
    		<div class="panel panel-default">
            	<div class="panel-heading">
        			{{ $product->name }}
        			<a style="float: right;" href="{{ route('product.destroy', $product) }}"><i class="fa fa-trash-o" title="Supprimer"></i></a>
        			<a style="float: right;" href="{{ route('product.edit', $product) }}"><i class="fa fa-pencil" title="Editer"></i></a>
          		</div>
          		<div class="panel-body">
        			juice-list todo !!
          		</div>
      		</div>
      	@endforeach
    </div>
@stop