@extends('layouts.app')
@section('title', 'Index page')

@section('content')
    <div class="row">
        @foreach ($all_cars as $car)
            <div class="col-6">
                <div class="card my-2">
                    <h1 class="text-center">Car {{ $car->id }}</h1>
                    <div class="card-body">
                        <div class="row">
                            <div class="col border">Name:</div>
                            <div class="col  border text-center"> {{ $car->name }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col border">Price:</div>
                            <div class="col border text-center"> {{ $car->price }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col border">Year relesed:</div>
                            <div class="col text-center"> {{ $car->year_released }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col border">Model:</div>
                            <div class="col border text-center"> {{ $car->model }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col border">Manufacturer:</div>
                            <div class="col border text-center"> {{ $car->manufacturer }}
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('cars.edit',$car) }}" class="btn btn-outline-secondary float-end">Edit</a>
                        <form action="{{ route('cars.destroy',$car->id) }}" method="post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="confirm()" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach

       <div class="mt-3">
        {{ $all_cars->links() }}
       </div>
    </div>
@endsection
