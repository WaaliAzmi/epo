<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CreditSaleRequest;
use Illuminate\Http\Request;

class CreditSaleRequestController extends Controller
{
    public function index()
    {
        $requests = CreditSaleRequest::all();
        return view('admin.sell', compact('requests'));
    }

    public function destroy($id)
    {
        CreditSaleRequest::findOrFail($id)->delete();
        return redirect()->route('admin.sell.requests')->with('success', 'Sell request deleted successfully.');
    }
}
