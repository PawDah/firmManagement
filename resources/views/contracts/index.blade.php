@extends('layouts.app')

@section('content')
    @include('helpers.flash-messages')
    <div class="container">
        <div class="col-6">
            <h1><i class="fa-solid fa-user-group"></i> Lista Umów</h1>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data rozpoczęcia</th>
                <th scope="col">Data zakończenia</th>
                <th scope="col">Typ umowy</th>
                <th scope="col">Imię i Nazwisko Pracownika</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @if($contracts)
                @foreach($contracts as $contract)
                    <tr>
                        <th scope="row">{{$contract->id}}</th>
                        <td>{{$contract->start_date}}</td>
                        <td>{{$contract->end_date}}</td>
                        <td>{{$contract->contract_type->name}}</td>
                        <td>{{$contract->employee->name}} {{$contract->employee->surname}}</td>
                        <td>
                            <a style="text-decoration: none;" href="{{route('contracts.show',$contract->id)}}">
                                <button class="btn btn-secondary btn-sm">
                                    Podgląd
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <td>Brak Umów w bazie</td>
            @endif
        </table>
@endsection

