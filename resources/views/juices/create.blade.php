@extends('layouts.default', ['title'=>'Produits'])

@section('content')
    <div class="container">
    	<div class="row">
    		<div class=""></div>
    		<h2>Création d'un jus</h2>
    		<form action="{{ route('juice.store') }}" method="POST" novalidate>
    			{{ csrf_field() }}
    			<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
					<label for="name" class="control-label">Name:</label>
  					<input type="text" class="form-control" id="name" name="name" required="required" value="{{ old('name')}}" />
  					{!! $errors->first('name', '<span class="help-block">:message</span>') !!}
				</div>
                <div class="form-group {{ $errors->has('rate') ? 'has-error' : '' }}">
                    <label for="name" class="control-label">Note:</label>
                    <select type="text" class="form-control" id="rate" name="rate" required="required ">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="form-group {{ $errors->has('done') ? 'has-error' : '' }}">
                    <label for="name" class="control-label">Essayé:</label>
                    <input type="radio" name="done" value="0">Non
                    <input type="radio" name="done" value="1">Oui
                </div>
                <div>
                    <p>
                    <label for="name" class="control-label">Liste des produits:</label> <a class="btn btn-primary" onclick="JuiceProductAdd()">Ajouter</a>
                    <div id="productList"></div>
                    </p>
                </div>  
                <div class="form-group {{ $errors->has('comment') ? 'has-error' : '' }}">
                    <label for="comment" class="control-label sr-only">comment:</label>
                    <textarea class="form-control" rows="10" cols="10" id="comment" name="comment" required="required" placeholder="commentaire">{{ old('comment')}}</textarea>
                    {!! $errors->first('comment', '<span class="help-block">:message</span>') !!}
                </div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
				</div>
    		</form>
    	</div>
    </div>
@stop

@section('js')
    <script type="text/javascript">
        function JuiceProductAdd(){
            var iOrder = $('.juiceProducts').length;
            $_token = "{{ csrf_token() }}";
            $.ajax({
                url: "{{ route('product.index') }}",
                type: 'get',
                data: {'_token': $_token, "order": iOrder },
                datatype: 'html',
                success: function(data) {
                    $("#productList").append(data);
                },
                error: function(xhr,textStatus,thrownError) {
                    alert(xhr + "\n" + textStatus + "\n" + thrownError);
                }
            });
        }
    </script>
@stop