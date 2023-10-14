@extends('layouts.app')

@section('content')
<div class="container">
<center>
<object data="{{ asset('storage/uploads/' . $userAppliation->file) }}" type="application/pdf" width="70%" height="750px">
  <p>PDF cannot be displayed. <a href="{{ asset('storage/uploads/' . $userAppliation->file) }}">Download</a> it instead.</p>
</object>
</center>


</div>
@endsection
