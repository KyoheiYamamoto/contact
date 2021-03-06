@extends('layout')
@section('content')

{{-- エラーメッセージ --}}
@if (count($errors) > 0)
<ul class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
    <li class="ml-4">{{ $error }}</li>
    @endforeach
</ul>
@endif
{{-- 本体 --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8">
            <h2 class="my-4 pl-3">お問い合わせ内容の確認</h2>
            <p class="text-danger pl-3">※この内容でよろしければ「送信する」ボタンを押してください。</p>

            {{ Form::open(['route' => 'contact.complete']) }}
            <div class="container">
                <div class="row form-group">
                    {!! Form::label('name', 'お名前 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::text('name', $inputs['name'], ['class' => 'form-control col-sm-12','readonly']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('email', 'メールアドレス :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::email('email', $inputs['email'], ['class' => 'form-control col-sm-12','readonly']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('tel', '電話番号 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::email('tel', $inputs['tel'], ['class' => 'form-control col-sm-12','readonly']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('sub', '件名 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::text('sub', $inputs['sub'], ['class' => 'form-control col-sm-12','readonly']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    {!! Form::label('body', 'お問い合わせ内容 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::textarea('body', $inputs['body'], ['class' => 'form-control col-sm-12','readonly', 'rows' => '6']) !!}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-sm-6 my-4">
                        {!! Form::submit('送信する', ['name' => 'action', 'class' => 'btn btn-warning btn-block']) !!}
                    </div>
                    <div class="col-sm-6 my-4">
                        {!! Form::submit('修正する', ['name' => 'action', 'class' => 'btn btn-secondary btn-block']) !!}
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
