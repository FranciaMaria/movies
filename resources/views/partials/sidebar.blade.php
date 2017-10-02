<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
        @if(count($movies) >= 5)
        	@for($i = count($movies)-1; $i>count($movies)-6; $i--)
            	<a href="/movies/{{$movies[$i]}}" class="list-group-item">{{$movies[$i]->title}}</a>
        	@endfor
        @else
        	@for($i = count($movies)-1; $i>0; $i--)
            	<a href="/movies/{{$movies[$i]}}" class="list-group-item">{{$movies[$i]->title}}</a>
        	@endfor
        @endif
          </div>
        </div><!--/span-->