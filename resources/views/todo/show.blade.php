@extends('layouts.app')

@section('content')
    <h1>{{ $todo->title }}</h1>

    <p>{{ $todo->description }}</p>

    <ul>
        <li>Due Date: {{ $todo->due_date }}</li>
        <li>Priority: {{ $todo->priority }}</li>
    </ul>

    <a href="{{ route('todo.edit', $todo) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('todo.destroy', $todo) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
@endsection
