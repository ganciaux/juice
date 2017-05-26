@extends('layouts.default', ['title'=>'Jus'])

@section('content')
    <div class="container">
      <h2>
        Liste des jus
        <a style="" href="{{ route('juice.create') }}"><i class="fa fa-plus-circle fa-fw" title="Créer"></i></a>
      </h2>
    	@foreach ($juices as $juice)
          <div class="panel panel-default">
            <div class="panel-heading">
              {{ $juice->name }}
              <a style="float: right;" href="{{ route('juice.destroy', $juice) }}"><i class="fa fa-trash-o" title="Supprimer"></i></a>
              <a style="float: right;" href="{{ route('juice.edit', $juice) }}"><i class="fa fa-pencil" title="Editer"></i
              ></a>
            </div>
            <div class="panel-body">
              Testé : {{ get_yes_no($juice->done) }}<br>
              Commentaire: {{ $juice->comment }}<br>
              Produits:<br>
              <table>
                <thead>
                  <td></td>
                  <td></td>
                </thead>
                <tbody>
                  @foreach ($juice->products as $product)
                    <tr>
                      <td>{{ $product->pivot->quantity }}</td>
                      <td>{{ $product->name }}</td>
                    </tr>
                  @endforeach  
                </tbody>
              </table>
            </div>
          </div>
      @endforeach
    </div>
@stop