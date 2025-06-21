<?php

namespace App\Http\Controllers;
use App\Models\PurchaseHistory;
use Illuminate\Http\Request;

class PurchaseHistoryController extends Controller
{
      public function index()
    {
       $purchaseHistories = PurchaseHistory::with('category')->paginate(8);
       return view('purchaseHistory', compact('purchaseHistories'));
    }
}
