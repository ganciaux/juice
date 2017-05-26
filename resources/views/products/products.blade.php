<div class="juiceProducts">
    <select class="" id="product_identifier_{{ $order }}" name="product_name[]" required="required">
        @foreach ($products as $product)
            <option value="{{ $product->id }}">{{ $product->name }}</option>
        @endforeach
    </select>
  <input type="text" name="product_quantity[]">

</div>