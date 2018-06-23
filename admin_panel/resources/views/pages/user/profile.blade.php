@extends('layouts.app')

@section('content')
    <div class="content-box-large">
    <div class="panel-body">
        <form class="form-horizontal" method="POST" role="form" action="/users/edit/{{$user->id}}">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" 
                    id="name" placeholder="Name" name="name" 
                    value="{{$user->name}}">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">
                Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" 
                    id="email" placeholder="Email" name="email" 
                    value="{{$user->email}}">
                </div>
            </div>
            
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </form>
    </div>
@endsection