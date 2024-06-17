<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        background-color: lightgray;
    }

    .hero-section {
        background: url('{{ asset('images/th.jpeg') }}') no-repeat center center;
        background-size: cover;
        height: 900px;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero-section h1 {
        font-size: 4em;
        font-weight: bold;
    }

    .hero-section p {
        font-size: 1.5em;
    }

    .btn-custom {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 1.2em;
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #0056b3;
    }

    .content-section {
        padding: 60px 0;
    }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="container">
            <h1>Welcome to My Blog</h1>
            <p>This is the welcome page of my Laravel application.</p>
            <a href="{{ route('posts.index') }}" class="btn btn-custom mt-4">View All Posts</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>