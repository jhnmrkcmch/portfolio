<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Access Denied</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #18191a;
            color: #e4e6eb;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .box {
            max-width: 500px;
        }

        .icon {
            font-size: 50px;
            color: #3b82f6;
        }

        .btn-primary {
            background-color: #2374e1;
            border: none;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="icon mb-3">🔗</div>
        <h3>This page isn't available</h3>
        <p class="text" style="opacity: 80%;">
            The link may be broken, or you don’t have permission to view this page.
        </p>

        <a href="{{ url('/') }}" class="btn btn-primary mt-3">
            Go to Home
        </a>
    </div>
</body>
</html>