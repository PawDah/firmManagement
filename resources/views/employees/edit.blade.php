@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edycja Pracownika</div>
                    <div class="d-flex flex-column align-items-center mt-3">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{asset('storage/'. $employee->image_path)}}" alt="Zdjęcie Pracownika" class="rounded-circle" width="250">
                                </div>
                            </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('employees.update',$employee->id) }}" enctype="multipart/form-data" >
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Imię</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" maxlength="50" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$employee->name}}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="surname" class="col-md-4 col-form-label text-md-end">Nazwisko</label>

                                <div class="col-md-6">
                                    <input id="surname" maxlength="50" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" required  autofocus value="{{$employee->surname}}">

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="phone_number" class="col-md-4 col-form-label text-md-end">Numer Telefonu</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ $employee->phone_number }}" required autocomplete="name" autofocus>
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$employee->email}}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hire_date" class="col-md-4 col-form-label text-md-end">Data Zatrudnienia</label>

                                <div class="col-md-6">
                                    <input id="hire_date" type="date" class="form-control @error('hire_date') is-invalid @enderror" name="hire_date" value="{{$employee->hire_date}}" required autocomplete="hire_date">

                                    @error('hire_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">Grafika</label>

                                <div class="col-md-6">
                                    <input id="image" type="file"  class="form-control @error('image') is-invalid @enderror" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="d-flex flex-column align-items-center">
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
