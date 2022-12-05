
<div class="form-group">
    <label for="exampleFormControlFile1">Select Destination (Place)</label>
    <select class="form-control" id="place_id" name="place_id">
        @if(count($subcat )>0)
        @foreach($subcat as $b_item)
        <option value="{{$b_item->_id}}">{{$b_item->name}}
        </option>
        @endforeach
        @endif
    </select>

</div>
