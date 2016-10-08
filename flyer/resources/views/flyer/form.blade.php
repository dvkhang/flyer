@inject('countries', 'App\Http\Utilities\Country')
{{ csrf_field() }}
<div class="form-group">
	<label for="street">Street:</label>
	<input type="text" name="street" value="{{old('street')}}" placeholder="Street" id="street" class="form-control" required>
</div>
<div class="form-group">
	<label for="city">City:</label>
	<input type="text" name="city" value="{{old('city')}}" placeholder="city" id="city" class="form-control" required>
</div>
<div class="form-group">
	<label for="zip">Zip/Postal:</label>
	<input type="text" name="zip" value="{{old('zip')}}" placeholder="zip" id="zip" class="form-control" required>
</div>
<div class="form-group">
	<label for="country">Country:</label>
	<select name="country" class="form-control">
		@foreach($countries::all() as $country => $code)
			<option value="{{ $code }}">{{$country}}</option>
		@endforeach
	</select>
</div>
<div class="form-group">
	<label for="state">State:</label>
	<input type="text" name="state" value="{{old('state')}}" placeholder="state" id="state" class="form-control" required>
</div>
<div class="form-group">
	<label for="price">Sale Price:</label>
	<input type="text" name="price" value="{{old('price')}}" placeholder="price" id="price" class="form-control" required>
</div>
<div class="form-group">
	<label for="description">Description</label>
	<textarea name="description" id="description" class="form-control" cols="30" rows="10">{{old('description')}}</textarea>
</div>

<div class="form-group">
	<button type="submit" class="btn btn-success">Create Flyer</button>
</div>