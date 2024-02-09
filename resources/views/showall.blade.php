@extends('welcomebody')

@section('content')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<a href="{{url('/')}}">Go Back</a>
<h2>All Details</h2>

<table>
  <tr>
    <th>SN</th>
    <th>Name</th>
    <th>Gender</th>
    <th>Email</th>
    <th>Nationality</th>
    <th>Date of birth</th>
    <th>Education Background</th>
    <th>Preferred Contact</th>
  </tr>
  @php
   $count = 1;
  @endphp
  @foreach($getall as $get)
    <tr>
        <td>{{$count}}</td>
        <td>{{$get->name}}</td>
        <td>{{$get->gender}}</td>
        <td>{{$get->email}}</td>
        <td>{{$get->nationality}}</td>
        <td>{{$get->dob}}</td>
        <td>{{$get->education_background}}</td>
        <td>{{$get->preferred_contact}}</td>
    </tr>
    @php 
        $count++;
    @endphp
  @endforeach
</table>
{!! $getall->render() !!}
@endsection()