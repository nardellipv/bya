@if (count($errors) > 0)
    <div class="alert alert-border-warning alert-dismissible fade show">
        <div class="d-flex align-items-center">
            <div class="font-35 text-warning"><span class="material-icons-outlined fs-2">report_gmailerrorred</span>
            </div>
            <div class="ms-3">
                <h6 class="mb-0 text-warning">Revisar los siguientes errores</h6>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li><b>{{ $error }}</b></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
