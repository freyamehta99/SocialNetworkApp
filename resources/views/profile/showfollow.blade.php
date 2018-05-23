@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				
				<div>
					<p>Followers - </p>
				</div>	
			
				<div>
					 <table class="table table-striped">
						    <thead>
						      <tr>
						        <th>Name</th>
						      </tr> 
						    </thead>
						    <tbody>
						      @foreach($followers as $post)
						      <tr>
						        <td>{{$post->name}}</td>						        
						      </tr>
						      @endforeach
						    </tbody>
					  </table>
			    </div>


			    <div>
					<p>Following - </p>
				</div>	
			
				<div>
					 <table class="table table-striped">
						    <thead>
						      <tr>
						        <th>Name</th>
						      </tr> 
						    </thead>
						    <tbody>
						      @foreach($followings as $post)
						      <tr>
						        <td>{{$post->name}}</td>						        
						      </tr>
						      @endforeach
						    </tbody>
					  </table>
			    </div>


			</div>
		</div>
	</div>
@endsection
