<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AsignacionController extends Controller
{
    public function index(){
        return view('asignacion.index');
    }

    //Mostrar los proyectos
	public function fetchAll() {
		$emps = Proyecto::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle ">
            <thead>
              <tr>
                <th class="text-center">Proyecto</th>
                <th class="text-center">Asignado a: </th>
                <th class="text-center">Detalles del proyecto</th>
                <th class="text-center">Asignar</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp["nombre_proyecto"] . '</td>
                <td>' . $emp["id_user "] . '</td>
                <td> 
                    <a href="#" id="' . $emp->id . '" class="btn btn-outline-success editIcon" data-toggle="modal" data-target="#detalleProyecto"><i class="fa-solid fa-circle-info"></i></a>
                </td>
                <td> 
                    <a href="#" id="' . $emp->id . '" class="btn btn-outline-warning editIcon" data-toggle="modal" data-target="#editEmployeeModal"><i class="fa-solid fa-file-signature"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">Sin Proyectos en la Base de Datos!</h1>';
		}
	}
}
