@extends('layouts.layout')

@section('pageTitle', 'Welcome!')

@section('mainContent')
<h1 class="text-center mt-5">DC Comics Library<br />
    <a href="{{route('products.index')}}" class="btn btn-success mt-3">Store</a>
</h1>


@endsection