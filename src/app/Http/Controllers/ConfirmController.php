<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConfirmRequest;
use App\Models\Contact;

class ConfirmController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function confirm(ConfirmRequest $request)
    {
        $confirm = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building', 'kinds', 'detail']);

        $confirm['name'] = $confirm['first_name'] . ' ' . $confirm['last_name'];
        $confirm['tell'] = $confirm['tell1'] . $confirm['tell2'] . $confirm['tell3'];

        return view('confirm', compact('confirm'));
    }

    public function thanks(ConfirmRequest $request)
    {
        $confirm = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building', 'detail']);

        $confirm['tell'] = $confirm['tell1'] . $confirm['tell2'] . $confirm['tell3'];

        // Contact モデルを使用してデータベースに保存
        Contact::create($confirm);

        // サンクス画面などへリダイレクト
        return redirect()->route('thanks');
    }
}
