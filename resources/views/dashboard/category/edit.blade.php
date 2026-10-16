@extends('dashboard.layout')

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="POST" >

        @method('PATCH')
        @include('dashboard.category._form', [ 'task' => 'edit'])
       
    </form>
    
@endsection