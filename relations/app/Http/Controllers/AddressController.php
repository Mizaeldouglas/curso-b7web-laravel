<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function createAddress(Request $request)
    {
        $newAddress = $request->only(['address']);
        $address = Address::create($newAddress);

        return response()->json($address, 201);
    }
    public function index(Request $request)
    {
        $addresses = Address::all();
        return $addresses;
    }

    public function findOne(Request $r)
    {
        $users = Address::find($r->id);
        return $users;
    }
}