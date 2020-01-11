<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function index()
    {

        $payments = Payment::orderBy('id', 'desc')->get();
        return view('admin.payment.index', compact('payments'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update($id)
    {
       
    }

    public function destroy($id)
    {

    }
}
