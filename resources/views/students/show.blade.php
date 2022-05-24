@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Roll : {{ $students->roll }}</p>
        <p class="card-text">Class : {{ $students->class }}</p>
        <p class="card-text">Class : {{ $students->mobile }}</p>
        <p class="card-text">Class : {{ $students->email}}</p>
  </div>
       
    </hr>
  
  </div>
</div>