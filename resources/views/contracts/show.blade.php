@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-10 my-3">
                    <div class="card bg-white">
                        <div class="card-body row text-center">
                            <div class="row border-bottom border-1">
                                <h4 class="col-md-8">Szczegóły umowy</h4>
                                <h4 class="col-md-4">Opis stanowiska</h4>
                            </div>
                            <div class="col-md-7 mt-3">
                                <div class="row mt-3 border-bottom border-1 pb-3">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Imię i Nazwisko:</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        {{$contract->employee->name}}  {{$contract->employee->surname}}
                                    </div>
                                </div>
                                <div class="row mt-5 border-bottom border-1 pb-3">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Typ umowy:</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        {{$contract->contract_type->name}}
                                    </div>
                                </div>
                                <div class="row mt-5 border-bottom border-1 pb-3">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Wynagrodzenie (Brutto)</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        {{$contract->payment_amount}} zł
                                    </div>
                                </div>
                                <div class="row mt-5 border-bottom border-1 pb-3">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Data podpisania umowy</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        {{$contract->start_date}}
                                    </div>
                                </div>

                                <div class="row mt-5 pb-3">
                                    <div class="col-sm-6">
                                        <h6 class="mb-0">Data zakończenia umowy</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        @if($contract->end_date)
                                            {{$contract->end_date}}
                                        @else
                                            Czas nieokreślony
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 border-start border-1">
                                <div class="row mt-4">
                                    <div class="col-sm-12 text-start">
                                        <p class="px-4">{{$contract->contract_details}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 text-center my-3">
                    <div class="card bg-white">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="text-center">Akcje</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <p>Edycja umowy</p>
                                    <a style="text-decoration: none;"
                                       href="{{route('contracts.edit',[$contract->id,$contract->employee->id])}}">
                                        <button class="btn btn-info btn-sm">
                                            Edytuj
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </button>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <p>Usuwanie Umowy</p>
                                    <form style="display: inline-block;"
                                          action="{{ route('contracts.destroy', $contract->id) }}" method="POST">
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
