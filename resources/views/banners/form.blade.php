{!!csrf_field()  !!}

<div class="row ">
    <div class="col-md-6">
    <div class="form-group">
        <label for="street">Street</label>
        <input type="text" class="form-control" name="street" id="street" value="{{old('street')}}" required>

    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" id="street" value="{{old('city')}}" required>
    </div>

    <div class="form-group">
        <label for="zip">Zip / Post Code</label>
        <input type="text" class="form-control" name="zip" id="street" value="{{old('zip')}}" required>
    </div>

    <div class="form-group">
        <label for="country">Country</label>
        <select name="country" id="country" class="form-control">
            @foreach($countries as $country =>$code)
                <option value="{{$code}}">{{$country}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="state">State</label>
        <input name="state" id="state" class="form-control" required>
    </div>
</div>

<div class="col-md-6">

    <div class="form-group">
        <label for="price">Selling Price</label>
        <input name="price" id="price" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Home Description</label>
        <textarea class="form-control" name="description" id="description" rows="10" required>
                {{old('description')}}
            </textarea>
    </div>



</div>
    <div class="col-md-12">
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Banner</button>
        </div>
    </div>
    <hr>
</div>