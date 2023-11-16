@if (session('status'))
    <div class="row">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
