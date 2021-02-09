<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/util.css') }}">
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('enkripsi') }}" method="GET">
            <div class="card">
                <div class="card-body">
                    <p class="fs-30 fb">AES encryption</p>
                    <p class="mt-n3">Encrypt and decrypt text with AES algorithm</p>
                    <textarea name="keyword" class="form-control" rows="4">@if (isset($keywordEnkrip)){{ $keywordEnkrip }}@endif</textarea>
                    <div class="mt-2">
                        <button class="btn btn-primary">Encrypt</button>
                    </div>
                    <hr>
                    <p>Result of encryption in base64</p>
                    @if (isset($enkrip))
                    <textarea class="form-control">{{ $enkrip }}</textarea>
                    @endif
                </div>
            </div>
        </form>
        <form class="mt-3" action="{{ route('dekripsi') }}" method="GET">
            <div class="card">
                <div class="card-body">
                    <p class="fs-30 fb">AES encryption</p>
                    <p class="mt-n3">Encrypt and decrypt text with AES algorithm</p>
                    <textarea name="keyword" class="form-control" rows="4">@if (isset($keywordDekrip)){{ $keywordDekrip }}@endif</textarea>
                    <div class="mt-2">
                        <button class="btn btn-primary">Decrypt</button>
                    </div>
                    <hr>
                    <p>Result of encryption in base64</p>
                    @if (isset($dekrip))
                    <textarea class="form-control">{{ $dekrip }}</textarea>
                    @endif
                </div>
            </div>
        </form>
    </div>
</body>
</html>