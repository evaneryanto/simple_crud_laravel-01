@extends('layouts.app')
@section('body')
<div class = "d-flex align-items-center justify-content-between">
    <h1 class = "mb-0">Detail Book</h1>
</div>
<hr/>

<div class="row mb-3">
  <div class="col">
    <input type="text" class="form-control" name = "name" placeholder="Book Name" value = "{{$book->name}}" readonly>
  </div>
  <div class="col">
    <input type="text" class="form-control" name = "author" placeholder="Author" value = "{{$book->author}}" readonly>
  </div>
</div>
  <div class = "row mb-3">
    <div class="col">
      <input type="text" class="form-control" name = "year" placeholder="Year" value = "{{$book->year}}" readonly>
    </div>
    <div class="col">
      <textarea class = "form-control" name="description" placeholder = "description" readonly>{{$book->description}}</textarea>
    </div>
</div>
@endsection