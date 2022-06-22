@extends('layouts.layout')

@section('pageTitle', 'Add a comics')

@section('mainContent')
<h1 class="text-center">Comics Details</h1>

<div class="main-container">

    <form action="{{route('products.store')}}" method="post">
        @csrf
        @method('POST')


        <div class="form-group mb-3">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="title" placeholder="Inserire titolo" name="title">
        </div>

        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" id="description" aria-describedby="description" placeholder="Inserire descrizione" name="description" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group mb-3">
            <label for="thumb">Image</label>
            <input type="url" class="form-control" id="thumb" aria-describedby="thumb" placeholder="Inserire URL immagine" name="thumb">
        </div>

        <div class="form-group mb-3">
            <label for="title">Price</label>
            <input type="text" class="form-control" id="price" aria-describedby="price" placeholder="Inserire prezzo, massimo 4 cifre" name="price">
        </div>

        <div class="form-group mb-3">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" aria-describedby="series" placeholder="Inserire serie" name="series">
        </div>


        <div class="form-group mb-3">
            <label for="sale_date">Exit date</label>
            <input type="date" class="form-control" id="sale_date" aria-describedby="sale_date" placeholder="Inserire data" name="sale_date">
        </div>


        <div class="form-group mb-3">
            <label for="type">Tipe</label>
            <select class="form-control" id="type" aria-describedby="type" name="type">
                <option selected>comic book</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Add comic</button>

    </form>
</div>
@endsection