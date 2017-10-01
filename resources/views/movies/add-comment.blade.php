@extends('layout.master')

@section('single-title')
    Add new comment
@endsection

@section('create-comment-content')

    <form method="POST" action="{{ route('store-comment') }}">

        {{ csrf_field() }}

        <div class="form-group">

            <label for="content">Content</label>

            <textarea class="form-control" id="content" name="content"></textarea>
            @include('partials.error-message', ['fieldTitle' => 'content'])
          
            
        </div>

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </form>

@endsection