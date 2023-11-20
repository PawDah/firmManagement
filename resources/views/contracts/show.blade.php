@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="main-body">
            <div class="row gutters-sm">
                <div class="col-md-12 my-3">
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
                                            {{$contract->end_date}}
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
            </div>

        </div>
    </div>
@endsection
