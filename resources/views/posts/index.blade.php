@extends('layouts.app')

    @section('content')
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
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
