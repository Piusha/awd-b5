@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-body">
		  	<table class="table">
				<thead>
				    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><a href="/users/{{$user->id}}">{{$user->id}}</a></td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                    </tr>
                @endforeach
                    
				                
                </tbody>
            </table>
        </div>
    </div>
@endsection