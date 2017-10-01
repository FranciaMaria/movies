<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
        @for($i = count($movies)-1; $i>count($movies)-6; $i--)
            <a href="/movies/{{$movies[$i]}}" class="list-group-item">{{$movies[$i]->title}}</a>
        @endfor
          </div>
        </div><!--/span-->