@extends('layouts.app')

@section('content')
    <div class="content-box-large">
        <div class="panel-body">
        <a href="javascript:void(0)" class="load-users">Load Users</a>
		  	<table class="table">
				<thead>
				    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="tb_data_wrapper">
                
				                
                </tbody>
            </table>
        </div>
    </div>
@endsection


@section('js')
<script src="{{ asset('js/users.js') }}"></script>
@endsection