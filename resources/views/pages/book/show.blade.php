@extends('layouts.app')
@section('body')
<div class = "d-flex align-items-center justify-content-between">
    <h1 class = "mb-0">Detail Book</h1>
</div>
<hr/>

<div class="row mb-3">
  <div class="col mb-3">
    <label>Updated at</label>
    <input type="text" class="form-control" name = "name" placeholder="Book Name" value = "{{$book->name}}" readonly>
  </div>
  <div class="col">
    <label>Author</label>
    <input type="text" class="form-control" name = "author" placeholder="Author" value = "{{$book->author}}" readonly >
  </div>
</div>
  <div class = "row mb-3">
    <div class="col">
    <label>Year</label>
      <input type="text" class="form-control" name = "year" placeholder="Year" value = "{{$book->year}}" readonly >
    </div>
    <div class="col">
    <label>Description</label>
      <textarea class = "form-control" name="description" placeholder = "description" readonly>{{$book->description}}</textarea>
    </div>

    <div class = "row mb-3">
    <div class="col">
      <label>Created at</label>
      <input type="text" class="form-control" name = "created_at" placeholder="Created at" value = "{{$book->created_at}}" readonly>
    </div>
    <div class="col">
    <label>Updated at</label>
      <input type="text" class="form-control" name = "updated_at" placeholder="Updated at" value = "{{$book->updated_at}}" readonly>
    </div>
</div>
@endsection