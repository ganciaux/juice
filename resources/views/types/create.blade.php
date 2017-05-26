@extends('layouts.default', ['title'=>'Type de produits'])

@section('content')
    <div class="container">
    	<div class="row">
    		<div class=""></div>
    		<h2>Création d'un type</h2>
    		<form action="{{ route('type.store') }}" method="POST" novalidate>
    			{{ csrf_field() }}
    			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name" class="control-label">Name:</label>
  					<input type="text" class="form-control" id="name" name="name" required="required" value="{{ old('name')}}" />
  					{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
				</div>
    		</form>
    	</div>
    </div>
@stop