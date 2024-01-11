<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function index()
    {
        try{
            $accounts = Account::all();
            return response()->json([
                'message' => 'Great success! Accounts retrieved',
                'accounts' => $accounts
            ], 200);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Error! Accounts not retrieved',
                'error' => $e->getMessage()
            ], 400);
        }
    }
    public function store(Request $request)
    {
        try{
            $request->validate([
                'nombre del negocio' => 'required',
                'industria' => 'required',
                'nombres y apellidos' => 'required'
            ]);
           
            
            $account = Account::create($request->all());
            return response()->json([
                'message' => 'Great success! New account created',
                'account' => $account
            ], 201);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Error! Account not created',
                'error' => 'Bad Request'
            ], 400);
        }
    }
    //
}
