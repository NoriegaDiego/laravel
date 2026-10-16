@extends('dashboard.layout')

@section('content')

    <a class="btn btn-succes my-3" href="{{ route('post.create')}}">Create new</a>

    <table class="table mb-3">
        <thead>
            <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Posted</th>
            <th>Category</th>
            <th>Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
                <tr>
                    <td>
                        {{$p->id}}
                    </td>
                    <td>
                        {{$p->title}}
                    </td>
                    <td>
                        {{$p->posted}}
                    </td>
                    <td>
                        {{$p->category->title}}
                    </td>
                    <td>
                        <a class="btn btn-primary my-2" href="{{route('post.edit', $p)}}">Edit</a>
                        <a class="btn btn-primary my-2" href="{{route('post.show', $p)}}">Show</a>
                        <form action="{{route('post.destroy', $p)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    {{$posts->links()}}

@endsection