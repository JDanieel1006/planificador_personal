@extends('layouts.admin')

@section('titulo','ASIGNACION DE PROYECTOS')



@section('contenido')

@include('asignacion.modal.asignacion')
@include('asignacion.modal.detalles')

<!-- Content Row -->

<div class="row">
    <!-- Area Chart -->
    <div class="container-fluid">
        <div class="card shadow mb-5">
            <!-- Card Body -->
            <div class="card-body table-responsive" id="show_all_employees">
                <h1 class="text-center text-secondary my-5">Loading...</h1>
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
<script >

    fetchAllEmployees();

    //Mostrar todos los registros
    function fetchAllEmployees(){
        $.ajax({
            url: '{{ route('proyectos.fetchAll') }}',
            method: 'get',
            success: function(response) {
                $("#show_all_employees").html(response);
                $("table").DataTable({
                order: [0, 'desc']
            });
        }
        });
    }

    //Buscar datos del proyecto por id
    $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
            url: '{{route('proyectos.edit')}}',
            method: 'get',
            data: {
                id: id,
                _token: '{{csrf_token()}}'
            },
            success:function(res){
                $("#edit_nombre").val(res.nombre_proyecto);
                $("#edit_descripcion").val(res.descripcion_proyecto);
                $("#edit_lenguaje").val(res.lenguaje);
                $("#edit_fecha_inicio").val(res.fecha_inicio);
                $("#edit_fecha_fin").val(res.fecha_fin);
                $("#pro_id").val(res.id);
            }
        });
    });
</script>

@endpush
