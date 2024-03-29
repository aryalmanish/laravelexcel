@extends('layout')
@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Position</th>
    <th>Number</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($shows as $show)
    <tr>
      <td>{{$show->id}}</td>
      <td>{{$show->show_name}}</td>
      <td>{{$show->position}}</td>
      <td>{{$show->number}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection