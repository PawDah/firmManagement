@extends('layouts.app')

@section('content')
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
                <th scope="col">Data zatrudnienia</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <th scope="row">{{$employee->id}}</th>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->surname}}</td>
                    <td>{{$employee->hire_date}}</td>
                    <td>
                        <a href="{{route('employees.edit',$employee->id)}}">
                            <button class="btn btn-info btn-sm">
                                Edytuj
                                <i class="fa-solid fa-pen-to-square"></i>
                            </button>
                        </a>
                        <button class="btn delete btn-danger btn-sm" data-id="{{$employee->id}}">Usuń<i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </table>

@endsection

