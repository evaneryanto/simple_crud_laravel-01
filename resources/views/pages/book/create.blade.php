@extends('layouts.app')
@section('body')
<div class = "d-flex align-items-center justify-content-between">
    <h1 class = "mb-0">Add Book</h1>
      
    </div>
<hr/>
<form action = "{{route('book.store')}}" method = "POST">
@csrf
<div class="row mb-3">
  <div class="col">
    <input type="text" class="form-control" name = "name" placeholder="Book Name">
  </div>
  <div class="col">
    <input type="text" class="form-control" name = "author" placeholder="Author">
  </div>
</div>
  <div class = "row mb-3">
    <div class="col">
      <input type="text" class="form-control" name = "year" placeholder="Year">
    </div>
    <div class="col">
      <textarea class = "form-control" name="description" placeholder = "description"></textarea>
    </div>
  </div>
<div class = "row">
  <div class = "d-grid">
    <button class = "btn btn-primary">Submit</button>
  </div>
</div>
</form>
@endsection