<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        return UserModel::all();
     }

     public function store(Request $request){
         $validator = Validator::make($request->all(), [
             'username' => 'required',
             'nama' => 'required',
             'password' => 'required|min:5',
             'level_id' => 'required',
         ]);

         // if validation fails
         if ($validator->fails()) {
             return response()->json($validator->errors(), 422);
         }

         // create user
         $user = UserModel::create([
             'username' => $request->username,
             'nama' => $request->nama,
             'password' => bcrypt($request->password),
             'level_id' => $request->level_id,
         ]);
         // $user = m_user::create($request->all());
         return response()->json($user, 201);
     }

     public function show(UserModel $user){
         return $user;
     }

     public function update(Request $request, UserModel $user){
         $user->update($request->all());
         return $user;
     }

     public function destroy(UserModel $user){
         $user->delete();
         return response()->json([
             'success' => true,
             'message' => 'Data Terhapus',
         ]);
     }
}
