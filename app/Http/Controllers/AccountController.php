<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Rules\checkIndustry;

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
                'businessName' =>['required','regex:/^[\pL\pN\s\!¡ñÑ?¿#$&%\/\-_.:;,@()=+*]+$/u'],
                'industry' => ['required', new checkIndustry()],
                'fullname' => ['required', 'regex:/^[a-zA-ZñÑ\s]*$/']
            ]);

            $account = Account::create($request->all());
            return response()->json([
                'message' => 'Great success! New account created',
                'account' => $account
            ], 201);
        }catch(\Exception $e){
            return response()->json([
                'message' => 'Error! Account not created',
                'error' => $e->getMessage()
            ], 400);
        }
    }
    //
}
