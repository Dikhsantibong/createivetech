<?php

namespace App\Http\Controllers\Erp;

use App\Http\Controllers\Controller;

class PaymentController extends Controller
{
    public function index()
    {
        return view('erp.dashboard.pages.invoice.index');
    }
}
