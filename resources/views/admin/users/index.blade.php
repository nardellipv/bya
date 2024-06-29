@extends('layouts.admin')

@section('css')
<link href="{{ asset('assets/admin/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
<link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example2" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Admin</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('edit.user', $user->id) }}" type="button" class="btn btn-info d-flex"><i
                                            class="material-icons-outlined">edit</i>
                                    </a>
                                    <button type="button" class="btn btn-info d-flex" data-bs-toggle="modal"
                                    data-bs-target="#BasicModal{{ $user->id }}"><i
                                            class="material-icons-outlined">visibility</i>
                                    </button>
                                    <a href="{{ route('delete.user', $user->id) }}" type="button" class="btn btn-danger d-flex"><i
                                            class="material-icons-outlined">close</i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include('admin.users._modal')

@endsection

@section('js')
<!-- Incluir los scripts de DataTables y sus extensiones -->
<script src="{{ asset('assets/admin/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function () {
        var table = $('#example2').DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copy',
                    title: 'Lista de usuarios',
                    className: 'btn btn-success'
                },
                {
                    extend: 'excelHtml5',
                    title: 'Lista de usuarios',
                    className: 'btn btn-success'
                },
                {
                    extend: 'pdfHtml5',
                    title: 'Lista de usuarios',
                    className: 'btn btn-success',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                },
                {
                    extend: 'print',
                    title: 'Lista de usuarios',
                    className: 'btn btn-success'
                }
            ],
            language: {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });
    });
</script>
@endsection
