@extends('layouts.app')

@section('title','Edit Car')

@section('content')
    <h1 class="text-center">Edit Page</h1>
<form action="{{ route('cars.update',$car) }}" method="post">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <input type="text" name="name" value="{{ $car->name }}" id="" class="form-control">
        <div class="form-text">Car name</div>
    </div>
    <div class="mb-3">
        <input type="text" name="price" value="{{ $car->price }}" id="" class="form-control">
        <div class="form-text">Car price</div>
    </div>
    <div class="mb-3">
        <input type="text" name="year_released" value="{{ $car->year_released }}" id="" class="form-control">
        <div class="form-text">Year released</div>
    </div>
    <div class="mb-3">
        <input type="text" name="model" value="{{ $car->model }}" id="" class="form-control">
        <div class="form-text">Car model</div>
    </div>
    <div class="mb-3">
        <input type="text" name="manufacturer" value="{{ $car->manufacturer }}" id="" class="form-control">
        <div class="form-text">Car manufacturer</div>
    </div>
    <button type="submit" class="btn btn-success px-5">Save new car</button>
</form>
@endsection
