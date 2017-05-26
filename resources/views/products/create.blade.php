@extends('layouts.default', ['title'=>'Produits'])

@section('content')
    <div class="container">
    	<div class="row">
    		<div class=""></div>
    		<h2>Création d'un produit</h2>
    		<form action="{{ route('product.store') }}" method="POST" novalidate>
    			{{ csrf_field() }}
    			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name" class="control-label">Name:</label>
  					<input type="text" class="form-control" id="name" name="name" required="required" value="{{ old('name')}}" />
  					{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
				</div>
                <div class="form-group {{ $errors->has('type_id') ? 'has-error' : '' }}">
                    <label for="name" class="control-label">Type:</label>
                    <select type="text" class="form-control" id="type" name="type" required="required ">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                </div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
				</div>
    		</form>
    	</div>
    </div>
@stop