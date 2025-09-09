<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BuyRequest;
use Illuminate\Http\Request;

class BuyRequestController extends Controller
{
    public function index()
    {
        $requests = BuyRequest::all();
        return view('admin.buy', compact('requests'));
    }

    public function destroy($id)
    {
        BuyRequest::findOrFail($id)->delete();
        return redirect()->route('admin.buy.requests')->with('success', 'Buy request deleted successfully.');
    }
}
