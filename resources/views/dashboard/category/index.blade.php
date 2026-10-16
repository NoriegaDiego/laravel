@extends('dashboard.layout')

@section('content')

    <a class="my-2 btn btn-succes" href="{{ route('category.create')}}">Create new</a>

    <table class="table mb-3">
        <thead>
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
                <tr>
                    <td>
                        {{$c->id}}
                    </td>
                    <td>
                        {{$c->title}}
                    </td>
                    <td>
                        <a class=" mt-2 btn btn-primary" href="{{route('category.edit', $c)}}">Edit</a>
                        <a class="mt-2 btn btn-primary" href="{{route('category.show', $c)}}">Show</a>
                        <form action="{{route('category.destroy', $c)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="mt-2 btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{$categories->links()}}

@endsection