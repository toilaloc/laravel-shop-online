<?php

namespace App\Http\Controllers;

use App\LienHeModel;
use Illuminate\Http\Request;

class LienHeController extends Controller
{
  public function lien_he(Request $request) {
      $data = $request->validate([
      'name'	=> 'required',
      'email'	=> 'required|email',
      'phone'	=> 'required|numeric',
      'subject'	=> 'required',
      'message' => 'required',
      ]);

      LienHeModel::create($data);
      return redirect('/lien-he')->with('success', 'Gui Lien He Thanh Cong');
  }
  public function show()
  {
     $lienhe = LienHeModel::all();
     return view('admin.lien_he.index', compact('lienhe'));
  }
}
