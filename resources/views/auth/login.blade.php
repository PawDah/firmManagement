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
									<form>
										<div class="mb-3">
											<label class="form-label">Login</label>
											<input class="form-control form-control-lg" type="email" name="email" placeholder="Wpisz swój login" />
										</div>
										<div class="mb-3">
											<label class="form-label">Hasło</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Podaj hasło" />
										</div>
										<div class="d-grid gap-2 mt-3">
											<a href="main/index.blade.php" class="btn btn-lg btn-primary">Zaloguj się</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
@endsection
