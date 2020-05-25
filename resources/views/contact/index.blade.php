@extends('layout')
@section('content')

{{-- 本体 --}}
<div class="container my-4">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">お問い合わせ</h4>
                    <p class="card-text">
                        直接メールする方はこちらまで<br>
                        arienkyohei@gmail.com
                    </p>
                    <p class="card-text">
                        ※twitterのDMの方が見るのは早いです
                    </p>
                    <a href="https://twitter.com/davidkyohei" class="card-link">twitter</a>
                </div>
            </div>
            {{-- エラーメッセージ --}}
            @if (count($errors) > 0)
            <div class="my-4">
            <ul class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
                @endforeach
            </ul>
            </div>
            @endif
            {{ Form::open(['route' => 'contact.confirm']) }}
            <div class="container my-4">
                <div class="row form-group">
                    {!! Form::label('name', 'お名前:', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('email', 'メールアドレス :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('tel', '電話番号:', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::text('tel', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="row form-group">
                    {!! Form::label('sub', '件名:', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::text('sub', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="row form-group">
                    {!! Form::label('body', 'お問い合わせ内容 :', ['class' => 'col']) !!}
                    <div class="col-12">
                        {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => '6']) !!}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row  justify-content-center">
                    <div class="col-sm-6 mt-3">
                        {!! Form::submit('確認', ['class' => 'btn btn-info btn-block']) !!}
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
