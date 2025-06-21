<?php

namespace App\Http\Controllers;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
      public function index()
    {
       $inventories = Inventory::with('category')->paginate(8);
       return view('inventory', compact('inventories'));
    }
}
