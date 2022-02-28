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

    //Mostrar todos los usuarios
    function fetchAllEmployees(){
        $.ajax({
            url: '{{ route('fetchAll') }}',
            method: 'get',
            success: function(response) {
                $("#show_all_employees").html(response);
                $("table").DataTable({
                order: [0, 'desc']
            });
        }
        });
    }

    //Eliminar usuario
    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Confirmacion',
          text: "Desea eliminar al usuario ?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Si, eliminar!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Eliminado!',
                  'Usuario eliminado.',
                  'OK'
                )
                fetchAllEmployees();
              }
            });
          }
        })
    });

    //Editar usuario
    $("#edit_employee_form").submit(function(e){
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_employee_btn").text('Actualizando..');
        $.ajax({
            url: '{{route('update')}}',
            method: 'POST',
            data: fd,
            cache: false,
            processData: false,
            contentType: false,
            success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Actualizado!',
                'Usuario Actualizado!',
                'success'
              )
              fetchAllEmployees();
            }
            $("#edit_employee_btn").text('Actualizando...');
            $("#edit_employee_form")[0].reset();
            $("#editEmployeeModal").modal('hide');
          }
        })
    })

    //Buscar datos del usuario por id
    $(document).on('click', '.editIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
            url: '{{route('edit')}}',
            method: 'get',
            data: {
                id: id,
                _token: '{{csrf_token()}}'
            },
            success:function(res){
                $("#edit_nombre").val(res.nombre_usuario);
                $("#edit_correo").val(res.correo_usuario);
                $("#edit_telefono").val(res.telefono_usuario);
                $("#edit_passwd").val(res.password);
                $("#edit_tipo").val(res.tipo_usuario);
                $("#avatar").html(
                `<img src="storage/images/${res.avatar}" width="100" class="img-fluid img-thumbnail">`);
                $("#user_id").val(res.id);
                $("#user_avatar").val(res.avatar);
            }
        });
    });

    //Añadir un nuevo usuario
    $("#add_employee_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_employee_btn").text('Adding...');
        $.ajax({
            url: '{{route('usuarios')}}',
            method: 'POST',
            data: fd,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response.status == 200) {
                    Swal.fire(
                            'Añadido!',
                            'Empleado Añadido Correctamente!',
                            'success'
                        )
                        fetchAllEmployees();
                }
                $("#add_employee_btn").text('Add Employee');
                $("#add_employee_form")[0].reset();
                $("#createMdl").modal('hide');
            }
        });
    })
</script>

@endpush
