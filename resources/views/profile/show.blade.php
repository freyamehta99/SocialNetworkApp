@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<div>
					<p>User Information - </p>
				</div>	
				<div class="panel panel-default">
											
						<table class="table table-striped">
						    <thead>
						      <tr>
						        <th>User Id</th>
						        <th>Name</th>
						        <th>Email</th>
						      </tr> 
						    </thead>
						    <tbody>
						      <tr>
						        <td>{{$user->id}}</td>
						        <td>{{$user->name}}</td>
						        <td>{{$user->email}}</td>
						        {{-- 
						      	<td><a href="{{ route('user.follow', $user->id }}">Follow User</a></td>
						      	<td><a href="{{ route('user.unfollow', $user->id }}">Unfollow User</a></td> --}}
						        <td><a href="{{action('ProfileController@followUser', $user['id'])}}" class="btn btn-warning">Follow</a></td>
						        <td><a href="{{action('ProfileController@unFollowUser', $user['id'])}}" class="btn btn-warning">Unfollow</a></td>
						        <td><a href="{{action('ProfileController@showfollow', $user['name'])}}" class="btn btn-warning">Show follow</a></td>
						      </tr>
						    </tbody>
						  </table>
				</div>

				<div>
					<p>Posts - </p>
				</div>	
				<div>
					 <table class="table table-striped">
						    <thead>
						      <tr>
						        <th>Name</th>
						        <th>Title</th>
						        <th>Body</th>
						        <th colspan="2">Action</th>
						      </tr> 
						    </thead>
						    <tbody>
						      @foreach($posts as $post)
						      <tr>
						        <td>{{$post->user->name}}</td>
						        <td>{{$post['title']}}</td>
						        <td>{{$post['body']}}</td>
						        <td><a href="{{action('PostController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
						        <td>
						          <form action="{{action('PostController@destroy', $post['id'])}}" method="post">
						            {{csrf_field()}}
						            <input name="_method" type="hidden" value="DELETE">
						            <button class="btn btn-danger" type="submit">Delete</button>
						          </form>
						        </td>
						      </tr>
						      @endforeach
						    </tbody>
					  </table>
				    <a href="{{action('PostController@create')}}" class="btn btn-warning">Create</a>
				  </div>

			</div>
		</div>
	</div>
@endsection


{{-- @extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">


					</div>
					<div class="panel-body">


						<dl class="user-info">

							<dt>
								{{ $user->id }}
							</dt>
							<dd>
								{{ $user->name }}
							</dd>
							<dd>
								{{ $user->email }}
							</dd>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection --}}
