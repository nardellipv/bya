@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 col-xl-12">
        @include('admin.alerts.error')
        <div class="card border-top border-3 border-danger rounded-0">
            <div class="card-header py-3 px-4">
                <h5 class="mb-0 text-primary">Agregar Usuario</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3" method="POST" action="{{ route('store.user') }}">
                    @csrf
                    <div class="col-md-6">
                        <label class="form-label">Nombre y Apellido</label>
                        <input type="text" name="name" class="form-control rounded-0" value="{{ old('name') }}"
                            placeholder="Nombre y Apellido">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control rounded-0" value="{{ old('email') }}"
                            placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Contraseña</label>
                        <input type="password" name="password" class="form-control rounded-0" placeholder="Contraseña">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Verificar Contraseña</label>
                        <input type="password" name="password_confirmation" class="form-control rounded-0"
                            placeholder="Verificar Contraseña">
                    </div>
                    <div class="col-md-12">
                        <div class="form-check">
                            <input id="role" class="form-check-input rounded-0" name="role" type="checkbox">
                            <label id="role" class="form-check-label">¿Es Administrador?</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-grd-danger px-4 rounded-0">Agregar Usuario</button>
                            <a href="{{ route('list.user') }}" type="button"
                                class="btn btn-grd-info px-4 rounded-0">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
