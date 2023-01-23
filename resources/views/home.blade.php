@extends('layouts.app')

@section('title-block')
    Main page
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>
            При запуске сборки npm run development вылезли ошибки:
        opensslErrorStack: [ 'error:03000086:digital envelope routines::initialization error' ],
        library: 'digital envelope routines',
        reason: 'unsupported',
        code: 'ERR_OSSL_EVP_UNSUPPORTED'
    </p>
@endsection

@section('aside')
    @parent
        <p>Дополнительный текст</p>
@endsection
