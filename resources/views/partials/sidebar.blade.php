<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
        @if(count($movies) >= 5)
                @for($i = count($movies)-1;  $i> count($movies)-6; $i--)
                    <a href="/movies/{{$movies[$i]->id}}" class="list-group-item">{{$movies[$i]->title}}</a>
                @endfor
        @else
            @foreach($movies as $movie)
                <a href="/movies/{{$movie->id}}" class="list-group-item">{{$movie->title}}</a>
            @endforeach
        @endif
          </div>
        </div><!--/span-->