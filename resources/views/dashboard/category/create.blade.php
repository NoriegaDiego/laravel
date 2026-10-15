@extends('dashboard.master')

@section('content')

 @include('dashboard.fragment._errors-form')


<form action="{{ route('category.store')}}" method="POST">

    

    @include('dashboard.category._form')
</form>
    
@endsection