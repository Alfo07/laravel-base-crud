@extends('layouts.layout')

@section('pageTitle', 'Product')

@section('mainContent')
<h1 class="text-center">Comic detail</h1>
<h3 class=" show text-center">{{$product->title}}</h3>
<div class="d-flex justify-content-center"><img class=" show text-center" src="{{$product->thumb}}" alt="Immagine dccomics"></div>
<p class=" show text-center">{{$product->description}}</p>
<h6 class="text-center"><a href="{{route('products.index')}}" class="btn btn-success">Come back to comics library</a></h6>
@endsection