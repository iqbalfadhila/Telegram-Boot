@extends('template')
 
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel-headline">
    <form action="{{ url('/send-message') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Enter your query" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
</div>
</div>
</div>
@endsection