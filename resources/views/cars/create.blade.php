@extends('layouts.app')

@section('title', 'Create new car')


@section('content')
    <form action="{{ route('cars.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" id="" class="form-control">
            <div class="form-text">Car name</div>
        </div>
        <div class="mb-3">
            <input type="text" name="price" id="" class="form-control">
            <div class="form-text">Car price</div>
        </div>
        <div class="mb-3">
            <input type="text" name="year_released" id="" class="form-control">
            <div class="form-text">Year released</div>
        </div>
        <div class="mb-3">
            <input type="text" name="model" id="" class="form-control">
            <div class="form-text">Car model</div>
        </div>
        <div class="mb-3">
            <input type="text" name="manufacturer" id="" class="form-control">
            <div class="form-text">Car manufacturer</div>
        </div>
        <button type="submit" class="btn btn-success px-5">Save new car</button>
    </form>
@endsection
