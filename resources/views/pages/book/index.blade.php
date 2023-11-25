@extends('layouts.app')
@section('body')
    <div class = "d-flex align-items-center justify-content-between">
        <h1 class = "mb-0">List Book</h1>
        <a href = "{{route('book.create')}}" class = "btn btn-primary">Add Book</a>
    </div>
    <hr/>
    <table class = "table table-hover">
        <thead class = "table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Author</th>
                <th>Year</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($books->count() > 0)
                @foreach($books as $book)
                <tr>
                    <td class = "align-midle">{{$loop->iteration}}</td>
                    <td class = "align-midle">{{$book->name}}</td>
                    <td class = "align-midle">{{$book->author}}</td>
                    <td class = "align-midle">{{$book->year}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Detail</button>
                            <button type="button" class="btn btn-warning">Edit</button>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td class = "text-center" colspan = "5">Book Not Found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection