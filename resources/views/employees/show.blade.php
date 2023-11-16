@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="{{asset('storage/'. $employee->image_path)}}" alt="Zdjęcie Pracownika" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4>{{$employee->name}} {{$employee->surname}}</h4>
                                <p class="text-secondary mb-1"></p>
                                <p class="text-muted font-size-sm"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Imię i Nazwisko</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$employee->name}} {{$employee->surname}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$employee->email}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Numer Telefonu</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                             +48 {{$employee->phone_number}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Data zatrudnienia</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{$employee->hire_date}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a style="text-decoration: none;" href="{{route('employees.edit',$employee->id)}}">
                                    <button class="btn btn-info btn-sm">
                                        Edytuj
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </a>
                                <form style="display: inline-block;" action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Usuń
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
