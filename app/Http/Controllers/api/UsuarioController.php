<?php


namespace App\Http\Controllers\api;


use App\Models\Usuario;

class UsuarioController
{
    /** Get an user by id
     * @param int $idUsu
     * @return \Illuminate\Http\JsonResponse
     */
    public function find(int $idUsu){
        if (!Usuario::find($idUsu)){
            return response()->json([
                'error'   => true,
                'status' => 'No se encuentra el usuario.'
            ],404);
        } else {
            return response()->json(Usuario::find($idUsu));
        }
    }

    /** Search an user by name
     * @param string $usuario
     * @return \Illuminate\Http\JsonResponse
     */
    public function usuario(string $usuario){
        $usu = Usuario::usuario($usuario);
        if ($usu->isEmpty()){
            return response()->json([
                'error'   => true,
                'status' => 'No se encuentra ningun usuario.'
            ],404);
        } else {
            return response()->json($usu);
        }
    }
}
