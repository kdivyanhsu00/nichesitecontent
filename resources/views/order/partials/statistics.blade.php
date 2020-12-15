@if(count($data['statistics']) > 0)
	@foreach($data['statistics'] as $segment)
  <div class="row">
		@foreach($segment as $row)
         <div class="col-md-2 col-sm-6">         	
         	<div class="shadow bg-white rounded text-center p-1">
            <h6>{{ $row['value'] }}</h6>
            <span class="font-14 text-{{ str_replace('badge-','',$row['badge']) }}">{{ $row['name'] }}</span>
        	</div>        	
         </div>         
         @endforeach
    </div>
    <br>
    @endforeach
@endif
