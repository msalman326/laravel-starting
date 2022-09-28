<div class="form-group ">
    <label>{{$label}}:</label>
    <input class="form-control" type="{{$type}}" name="{{$name}}" id="" >
    <span class="text-danger">
        @error('name')
        {{$message}}
            
        @enderror
    </span>
    <span class="text-danger">
        <span class="text-danger">{{ $errors->first($name) }}</span>
      </span>
</div>