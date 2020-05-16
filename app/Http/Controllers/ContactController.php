<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        //フォーム入力ページのviewを表示
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191',
            'body'  => 'required|string|max:400',
            // 'job' => 'required|string|max:191',
        ]);

        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    public function complete(Request $request)
    {
        // 確認画面で「修正する」が選択されたときは、お問合せフォームに戻る
        $input = $request->except('action');
        if ($request->action === '修正する') {
            return redirect()->route('contact.index')->withInput($input);
        }
        // 二重送信防止のためトークンを発行
       $request->session()->regenerateToken();

        // お客様に送るメール
        \Mail::send(new \App\Mail\ContactMail([
            'to' => $request->email,  //お客様がフォームに入力したメールアドレス
            'to_name' => $request->name,  //お客様がフォームに入力した名前
            'from' => 'arienkyohei@gmail.com',  //自分のGmailアドレス
            'from_name' => 'Kyohei Yamamoto',  //自分のGmailの表示名
            'subject' => 'お問い合わせ受付完了のお知らせ',  //メールの件名
            // 'job' => $request->job,//所属・団体名
            'body' => $request->body  //お問い合わせ内容
        ], 'to'));  //to.blade.phpに反映する

        // 自分に送るメール
        \Mail::send(new \App\Mail\ContactMail([
            'to' => 'arienkyohei@gmail.com',  //自分のGmailアドレス
            'to_name' => 'kyohei',  //自分のGmailの表示名
            'from' => $request->email,  //お客様がフォームに入力したメールアドレス
            'from_name' => $request->name, //お客様がフォームに入力した名前
            'subject' => 'お客様からのお問い合わせ',  //メールの件名
            // 'job' => $request->job,//所属・団体名
            'body' => $request->body
        ], 'from'));  //from.blade.phpに反映する
        return view('contact.complete');

    }
}
