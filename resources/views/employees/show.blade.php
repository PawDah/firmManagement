@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                @if($employee->localFileExists())
                                    <img src="{{asset('storage/'. $employee->image_path)}}" alt="Zdjęcie Pracownika"
                                @else
                                    <img src="{{$employee->image_path}}" alt="Zdjęcie Pracownika"
                                         @endif
                                         class="rounded-circle" width="150">
                                    <div class="mt-2">
                                        <h4>{{$employee->name}} {{$employee->surname}}</h4>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-white">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="mb-0">Imię i Nazwisko</h6>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    {{$employee->name}} {{$employee->surname}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    {{$employee->email}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h6 class="mb-0">Numer Telefonu</h6>
                                </div>
                                <div class="col-sm-6 text-secondary">
                                    +48 {{$employee->phone_number}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="text-center">Akcje</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Edycja użytkownika</p>
                                    <a style="text-decoration: none;" href="{{route('employees.edit',$employee->id)}}">
                                        <button class="btn btn-info btn-sm">
                                            Edytuj
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <p>Usuwanie użytkownika</p>
                                    <form style="display: inline-block;"
                                          action="{{ route('employees.destroy', $employee->id) }}" method="POST">
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

                <div class="col-md-8 my-3">
                    <div class="card bg-white">
                        <div class="card-body row text-center">
                            @if($employee->hasContract())
                                <div class="row border-bottom border-1">
                                    <h4 class="col-md-8">Szczegóły umowy</h4>
                                    <h4 class="col-md-4">Opis stanowiska</h4>
                                </div>
                                <div class="col-md-7 mt-3">
                                    <div class="row mt-2 border-bottom border-1 pb-3">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Typ umowy:</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            {{$employee->contract->contract_type->name}}
                                        </div>
                                    </div>
                                    <div class="row mt-5 border-bottom border-1 pb-3">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Wynagrodzenie (Brutto)</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            {{$employee->contract->payment_amount}} zł
                                        </div>
                                    </div>
                                    <div class="row mt-5 border-bottom border-1 pb-3">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Data podpisania umowy</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            {{$employee->contract->start_date}}
                                        </div>
                                    </div>

                                    <div class="row mt-5 pb-3">
                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Data zakończenia umowy</h6>
                                        </div>
                                        <div class="col-sm-6">
                                            {{$employee->contract->end_date}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 border-start border-1">
                                    <div class="row mt-4">
                                        <div class="col-sm-12 text-start">
                                            <p class="px-4">{{$employee->contract->contract_details}}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <h4 class="text-danger"> Brak umowy !</h4>
                                <a style="text-decoration: none;" href="{{route('contracts.create',$employee)}}">
                                    <button class="btn btn-info">
                                        Dodaj umowę dla pracownika
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
