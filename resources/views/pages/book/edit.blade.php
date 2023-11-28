@extends('layouts.app')
@section('body')
<div class = "d-flex align-items-center justify-content-between">
    <h1 class = "mb-0">Edit Book</h1>
</div>
<hr/>
<form action = "{{route('book.update',$book->id)}}" method = "POST">
@csrf
@method('PUT')
<div class="row mb-3">
  <div class="col mb-3">
    <label>Updated at</label>
    <input type="text" class="form-control" name = "name" placeholder="Book Name" value = "{{$book->name}}" >
  </div>
  <div class="col">
    <label>Author</label>
    <input type="text" class="form-control" name = "author" placeholder="Author" value = "{{$book->author}}" >
  </div>
</div>
  <div class = "row mb-3">
    <div class="col">
    <label>Year</label>
      <input type="text" class="form-control" name = "year" placeholder="Year" value = "{{$book->year}}">
    </div>
    <div class="col">
    <label>Description</label>
      <textarea class = "form-control" name="description" placeholder = "description" >{{$book->description}}</textarea>
    </div>
</div>
<div class = "row">
  <div class = "d-grid">
    <button class = "btn btn-warning">Edit</button>
  </div>
</div>
</form>
@endsection