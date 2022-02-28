<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('usuarios.index');
    }

    //Creacion de un nuevo usuario
    public function store(Request $request){
        $file = $request->file('avatar');
        $fileName =  time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

        $empData = ['nombre_usuario' => $request->crt_nombre, 
                  'correo_usuario' => $request->crt_correo, 
                  'telefono_usuario' => $request->crt_telefono, 
                  'password' => $request->ctr_passwd, 
                  'tipo_usuario' => $request->ctr_tipo,
                  'avatar' => $fileName];
      
      Usuarios::create($empData);
      return response()->json([
          'status' => 200,
      ]);
    }

    //Mostrar los proyectos
	public function fetchAll() {
		$emps = Usuarios::all();
		$output = '';
		if ($emps->count() > 0) {
			$output .= '<table class="table table-striped table-sm text-center align-middle ">
            <thead>
              <tr>
              <th class="text-center"></th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Tipo usuario</th>
                <th class="text-center">Herramientas</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($emps as $emp) {
				$output .= '<tr>
                <td><img src="storage/images/'.$emp->avatar.'" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $emp["nombre_usuario"] . '</td>           
                <td>' . $emp["correo_usuario"] . '</td>
                <td>' . $emp["telefono_usuario"] . '</td>
                <td>' . ($emp['tipo_usuario'] == '1' ? 'Administrador' : 'Trabajador')  . '</td>
                <td>
                <a href="#" id="' . $emp->id . '" class="btn btn-outline-warning editIcon" data-toggle="modal" data-target="#editEmployeeModal"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="#" id="' . $emp->id . '" class="btn btn-outline-danger deleteIcon"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">Sin usuarios en la Base de datos!</h1>';
		}
	}

    //Obtener los datos para edicion del proyecto
    public function edit(Request $request){
        $id = $request->id;
        $emp = Usuarios::find($id);
        return response()->json($emp);
    }

    // Editar empleado
    public function update(Request $request) {
        $fileName = '';
        $emp = Usuarios::find($request->user_id);
        if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);
        if ($emp->avatar) {
            Storage::delete('public/images/' . $emp->avatar);
        }
        } else {
        $fileName = $request->user_avatar;
        }

        $empData = ['nombre_usuario' => $request->edit_nombre, 
                    'correo_usuario' => $request->edit_correo, 
                    'telefono_usuario' => $request->edit_telefono, 
                    'password' => $request->edit_passwd, 
                    'tipo_usuario' => $request->edit_tipo,
                    'avatar' => $fileName];

        $emp->update($empData);
        return response()->json([
        'status' => 200,
        ]);
    }

    //Eliminar empleado
    public function delete(Request $request){
        $id = $request->id;
        $emp = Usuarios::find($id);
        if (Storage::delete('public/images/' . $emp->avatar)) {
            Usuarios::destroy($id);
        }
    }

}
