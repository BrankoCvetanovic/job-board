<label for="{{$type}}" class="mb-1 flex items-center">
    <input type="radio" name="{{$type}}" value="{{$value}}" @checked(request($type) == $value)>
    <span class="ml-2" >{{$slot}}</span>
</label>