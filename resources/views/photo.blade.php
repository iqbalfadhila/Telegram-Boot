@extends('template')
 
@section('content')
<div class="main">
    <div class="main-content">
    <form action="{{ url('/store-photo') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Send Photo</label>
             <input type="file" id="file" name="file" class="form-control">
        </div>
        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" id="caption" class="form-control" placeholder="Caption"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
@endsection