<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProyectoController extends Controller
{

    public function index()
    {
        return view('proyectos.index');
    }

    //Creacion de un nuevo proyecto
    public function store(Request $request){
        $empData = ['nombre_proyecto' => $request->nombre_proyecto, 
                  'descripcion_proyecto' => $request->descripcion_proyecto, 
                  'lenguaje' => $request->lenguaje, 
                  'fecha_inicio' => $request->fecha_inicio, 
                  'fecha_fin' => $request->fecha_fin];
      
      Proyecto::create($empData);
      return response()->json([
          'status' => 200,
      ]);
    }

    //Mostrar los proyectos
	public function fetchAll() {
		$emps = Proyecto::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle ">
            <thead>
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Lenguaje</th>
                <th class="text-center">Fecha_inicio</th>
                <th class="text-center">Fecha_fin</th>
                <th class="text-center">Herramientas</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td>' . $emp["nombre_proyecto"] . '</td>
                <td>' . ($emp['lenguaje'] == '1' ? 'SQL Server' : 'MySQL')  . '</td>
                <td>' . $emp["fecha_inicio"] . '</td>
                <td>' . $emp["fecha_fin"] . '</td>
                <td>
                <a href="#" id="' . $emp->id . '" class="btn btn-outline-warning editIcon" data-toggle="modal" data-target="#editEmployeeModal"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="#" id="' . $emp->id . '" class="btn btn-outline-danger deleteIcon"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">Sin Proyectos en la Base de Datos!</h1>';
		}
	}

    //Obtener los datos para edicion del proyecto
    public function edit(Request $request){
        $id = $request->id;
        $emp = Proyecto::find($id);
        return response()->json($emp);
    }

    // Editar empleado
    public function update(Request $request) {
        $emp = Proyecto::find($request->pro_id);

        $empData = ['nombre_proyecto' => $request->edit_nombre, 
                    'descripcion_proyecto' => $request->edit_descripcion, 
                    'lenguaje' => $request->edit_lenguaje, 
                    'fecha_inicio' => $request->edit_fecha_inicio, 
                    'fecha_fin' => $request->edit_fecha_fin];

        $emp->update($empData);
        return response()->json([
        'status' => 200,
        ]);
    }

    //Eliminar empleado
    public function delete(Request $request){
        $id = $request->id;
        $emp = Proyecto::find($id);
        Proyecto::destroy($id);
    }
}
