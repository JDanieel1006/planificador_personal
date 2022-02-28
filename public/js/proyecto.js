//Añadir un nuevo empleado
$("#add_employee_form").submit(function(e) {
    e.preventDefault();
    const fd = new FormData(this);
    $("#add_employee_btn").text('Adding...');
    console.log('antes del ajax');
    $.ajax({
        url: '{{ route("proyectos") }}',
        method: 'POST',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        success: function(response) {
            if (response.status == 200) {
                Swal.fire(
                        'Added!',
                        'Employee Added Successfully!',
                        'success'
                    )
                    //fetchAllEmployees();
            }
            $("#add_employee_btn").text('Add Employee');
            $("#add_employee_form")[0].reset();
            $("#addEmployeeModal").modal('hide');
        }
    });
})