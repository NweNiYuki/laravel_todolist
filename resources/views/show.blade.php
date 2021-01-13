@extends('layout')

@section('content')

	<div class="container">
		<!-- On rows -->
   
<table class="table">
 <a href="/todo/create"> <button class="btn btn-primary">Add new</button>
  <caption>List of 2021 Planner</caption>
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">TITLE</th>
      <th scope="col">CONTENT</th>
      <th scope="col">REASON</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($todo as $list)
    <tr>
      
      <th scope="row">{{ $list->id }}</th>
      <td>{{ $list->title }}</td>
      <td>{{ $list->content }}</td>
      <td>{{ $list->reason }}</td>

      <form method="post" action="/todo/{{$list->id}}">

            @csrf
            @method("DELETE")
      <td>
        <button class="btn btn-info">DEL</button>
      
        <a href="/todo/{{$list->id}}/edit" class="btn btn-info">EDIT</a>
      </td>
      </form>
     
     
    </tr>
     @endforeach
  </tbody>
</table>

	</div>
@endsection