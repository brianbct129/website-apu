<?php

namespace App\Http\Controllers;

use App\Models\Vouchers;
use Illuminate\Http\Request;

class VouchersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.vouchers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vouchers $vouchers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vouchers $vouchers)
    {
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vouchers $vouchers)
    {
        return view('dashboard.vouchers.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vouchers $vouchers)
    {
        //
    }
}
