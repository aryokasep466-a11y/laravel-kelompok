<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DosenResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DosenApiController extends Controller
{
    public function index()
    {
        $dosen = User::where('role', 'dosen')->get();

        return DosenResource::collection($dosen);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);

        $dosen = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'dosen'
        ]);

        return new DosenResource($dosen);
    }

    public function show($id)
    {
        $dosen = User::where('role', 'dosen')->findOrFail($id);

        return new DosenResource($dosen);
    }

    public function update(Request $request, $id)
    {
        $dosen = User::where('role', 'dosen')->findOrFail($id);

        $dosen->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return new DosenResource($dosen);
    }

    public function destroy($id)
    {
        $dosen = User::where('role', 'dosen')->findOrFail($id);

        $dosen->delete();

        return response()->json([
            'message' => 'Data dosen berhasil dihapus'
        ]);
    }
}