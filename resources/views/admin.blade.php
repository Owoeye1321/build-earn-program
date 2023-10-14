@extends('layouts.app')

@section('content')
<div class="container">
   <center>
   <table class="table table-striped">
   <thead>
    <tr>
      <th>S/N</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Job Title</th>
      <th scope="col">Location</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($applications as $application)
    
      <tr>
        
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $application->name }}</td>
        <td>{{ $application->email }}</td>
        <td>{{ $application->phone_number }}</td>
        <td>{{ $application->title }}</td>
        <td>{{ $application->location }}</td>
        <td>
          <a class="user" href="{{ 'view/' . $application->id }}">
         <button type="button" class="btn btn-primary">View</button> </a></td>
        <td><button type="button" class="btn btn-success">Approve</button></td>
        <td><button type="button" class="btn btn-danger">Reject</button></td>
    
    </tr>
    
   @endforeach
   
  </tbody>
   </table>
  
   </center>
</div>
@endsection
