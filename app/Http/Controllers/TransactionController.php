<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('product')->get();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        $products = Product::all();
        return view('transactions.create', compact('products'));
    }

    public function store(Request $request)
    {
        Transaction::create($request->all());
        return redirect()->route('transactions.index');
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $products = Product::all();
        return view('transactions.edit', compact('transaction', 'products'));
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return redirect()->route('transactions.index');
    }

    public function destroy($id)
    {
        Transaction::destroy($id);
        return redirect()->route('transactions.index');
    }
}