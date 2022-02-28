@extends('layouts.admin')

@section('titulo','USUARIOS')

@section('contenido')

@include('usuarios.modal.create')
@include('usuarios.modal.update')

<!-- Content Row -->

<div class="row">
    <!-- Area Chart -->
    <div class="container-fluid">
        <div class="card shadow mb-5">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <div class="bd-example">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createMdl">
                        Nuevo Usuario
                    </button>
                </div>
            </div>
            <!-- Card Body -->
            <div class="card-body table-responsive">
                <table id="dt-usuarios" class="table table-bordered table-hover nowrap dts" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center"></th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Correo</th>
                            <th class="text-center">Herramientas</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection


@push('styles')

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endpush

@push('scripts')

<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

@endpush
