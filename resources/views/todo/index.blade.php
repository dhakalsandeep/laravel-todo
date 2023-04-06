@extends('layouts.app')

@section('content')
    <h1>Todo List</h1>

    <a href="{{ route('todo.create') }}" class="btn btn-primary mb-3">Create Todo</a>

    @if (count($todos) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Priority</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td>{{ $todo->description }}</td>
                        <td>{{ $todo->due_date }}</td>
                        <td>{{ $todo->priority }}</td>
                        <td>
                            <a href="{{ route('todo.show', $todo) }}" class="btn btn-info">View</a>
                            <a href="{{ route('todo.edit', $todo) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('todo.destroy', $todo) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No todos found</p>
    @endif
@endsection
