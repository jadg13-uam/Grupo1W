<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body {
        background: #f4f6f8;
        font-family: 'Segoe UI', Arial, sans-serif;
        color: #222;
        margin: 0;
        padding: 0;
    }
    .container {
        background: #fff;
        max-width: 600px;
        margin: 40px auto;
        padding: 32px 28px;
        border-radius: 10px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.07);
    }
    h1 {
        color: #2a4365;
        font-size: 2rem;
        margin-bottom: 18px;
        font-weight: 600;
        letter-spacing: 1px;
    }
    p {
        font-size: 1.08rem;
        line-height: 1.7;
        margin: 0;
    }
    </style>

</head>

<body>
    <div class="container">
        <h1>{{ __('Daily Report') }}</h1>
        <p>{{ $reportData }}</p>
    </div>
</body>

</html>
