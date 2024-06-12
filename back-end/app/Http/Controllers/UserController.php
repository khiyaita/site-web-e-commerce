<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    /**
    * Display a listing of the resource.
    */

    public function index() {
        return User::all();
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {
        $request->validate( [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
        ] );
        $user = User::create( [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make( $request->password )
        ] );

        return response()->json( $user );
    }

    /**
    * Display the specified resource.
    */

    public function show( string $id ) {
        $user = User::findOrFail( $id );

        return response()->json( $user );
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, string $id ) {
        $user = User::findOrFail( $id );
        if ($request->has('password')) {
            $request->merge(['password' => Hash::make($request->password)]);
        }
        // $request->validate( [
        //     'name' => 'required|string',
        //     'email' => 'required|email|unique:users,email,' . $user->id,
        //     'password' => 'required|string|min:8',
        // ] );
        $user->update( $request->all() );

        return response()->json( $user );
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( string $id ) {
        $user = User::findOrFail( $id );
        $user->delete();

        return response()->json( [ 'message' => 'User deleted successfully' ] );
    }
}
