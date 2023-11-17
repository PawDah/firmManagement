@extends('layouts.app')

@section('content')
    @include('helpers.flash-messages')
    <div class="container">
        <div class="col-6">
            <h1><i class="fa-solid fa-user-group"></i> Lista Pracowników</h1>
        </div>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">E-mail</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Numer Telefonu</th>
                <th scope="col">Data zatrudnienia</th>
                <th scope="col">Numer umowy</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @if($employees)
                @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{$employee->id}}</th>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->name}}</td>
                        <td>{{$employee->surname}}</td>
                        <td>+48 {{$employee->phone_number}}</td>
                        <td>{{$employee->hire_date}}</td>
                        <td>@if($employee->hasContract())
                                {{$employee->contract->id}}
                            @else
                                Brak umowy
                            @endif
                        </td>
                        <td>
                            <a style="text-decoration: none;" href="{{route('employees.show',$employee->id)}}">
                                <button class="btn btn-secondary btn-sm">
                                    Podgląd
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <td>Brak pracowników w bazie</td>
            @endif
        </table>
@endsection

