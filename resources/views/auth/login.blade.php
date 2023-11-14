@extends('layouts.app')

@section('content')

				<div class="d-flex align-items-center justify-content-center ">
					<div class="d-table-cell align-middle">
						<div class="text-center mt-4">
							<h1 class="h2">FirmManagement</h1>
							<p class="lead">
								Zaloguj się do aplikacji
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form method="POST" action="{{route('login')}}">
                                        @csrf
										<div class="mb-3">
											<label for="username" class="form-label">Login</label>
											<input id="username" class="form-control form-control-lg @error('username') is-invalid @enderror" type="text" name="username" required placeholder="Wpisz swój login" />
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
										</div>
										<div class="mb-3">
											<label for="password" class="form-label">Hasło</label>
											<input id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Podaj hasło" />
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Zaloguj się</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection
