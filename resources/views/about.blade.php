@extends('layouts.app')

@section('title-block')
    About
@endsection

@section('content')
    <h1>О нас</h1>
    <p>
            При запуске сборки npm run development вылезли ошибки:
        opensslErrorStack: [ 'error:03000086:digital envelope routines::initialization error' ],
        library: 'digital envelope routines',
        reason: 'unsupported',
        code: 'ERR_OSSL_EVP_UNSUPPORTED'

        Исправление:
        # 👇️ for macOS, Linux or Windows Git Bash
        export NODE_OPTIONS=--openssl-legacy-provider
        # ----------------------------------------------------
        # 👇️ for Windows CMD (Command Prompt)
        set NODE_OPTIONS=--openssl-legacy-provider
        # ----------------------------------------------------
        # 👇️ for Windows PowerShell
        $env:NODE_OPTIONS="--openssl-legacy-provider"
        # ----------------------------------------------------
        # 👇️ for Docker (in your Dockerfile)
        ENV NODE_OPTIONS="--openssl-legacy-provider"
    </p>
@endsection