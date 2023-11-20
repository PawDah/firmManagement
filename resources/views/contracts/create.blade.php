@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dodawanie Umowy</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('contracts.store') }}" >
                            @csrf

                            <div class="row mb-3">
                                <label for="contract_details" class="col-md-4 col-form-label text-md-end">Opis stanowiska</label>
                                <div class="col-md-6">
                                    <textarea id="contract_details" maxlength="500" class="form-control @error('contract_details') is-invalid @enderror" name="contract_details" required autocomplete="contract_details" autofocus></textarea>
                                    @error('contract_details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="payment_amount" class="col-md-4 col-form-label text-md-end">Wynagrodzenie (Brutto)</label>

                                <div class="col-md-6">
                                    <input id="payment_amount" max="99999.99" type="number" class="form-control @error('surname') is-invalid @enderror" name="payment_amount" required  autofocus value="{{ old('payment_amount') }}">

                                    @error('payment_amount')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="start_date" class="col-md-4 col-form-label text-md-end">Data Rozpoczęcia Umowy</label>
                                <div class="col-md-6">
                                    <input id="start_date" type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{date('Y-m-d')}}" required autocomplete="start_date">
                                    @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="end_date" class="col-md-4 col-form-label text-md-end">Data Zakończenia umowy</label>
                                <div class="col-md-6">
                                    <input id="end_date" type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" autocomplete="end_date">
                                    @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="contract_type" class="col-md-4 col-form-label text-md-end">Typ umowy</label>
                                <div class="col-md-6">
                                    <select id="contract_type" class="form-control @error('contract_type') is-invalid @enderror" name="contract_type_id" >
                                        @foreach($contract_types as $type)
                                            <option value="{{$type->id}}" >{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('contract_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input id="employee_id" class="form-control @error('hire_date') is-invalid @enderror" name="employee_id" value="{{$employee->id}}" required hidden autocomplete="employee_id">
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Zapisz
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
