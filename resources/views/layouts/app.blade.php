<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Book Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">


    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #ffffff;
            color: #333;
        }

        .fade-in-hover {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 1s ease forwards;
            transition: all 0.3s ease-in-out;
            display: inline-block;
            cursor: default;
        }

        .fade-in-hover:hover {
            transform: scale(1.05) translateY(0px);
            color: #c8b6ff !important;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .btn-soft {
            background: #b8c0ff;
            color: #333;
            border-radius: 12px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-soft:hover {
            background: #c8b6ff;
            color: #000;
        }
        .sidebar-link {
            color: white;
            padding: 10px 15px;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-weight: 500;
            position: relative;
        }

        .sidebar-link:hover {
            background-color: #a3aefc;
            color: #fff;
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(200, 182, 255, 0.6);
        }
        .book-card {
            border: none;
            border-radius: 15px;
            background-color: #fefbff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(187, 208, 255, 0.4);
        }

        .btn-pastel {
            background-color: #c8b6ff;
            color: #fff;
            border: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .btn-pastel:hover {
            background-color: #b8c0ff;
            color: #000;
        }

                .btn-pastel {
            background-color: #c8b6ff;
            color: #fff;
            border: none;
            border-radius: 8px;
            transition: background 0.3s ease;
        }

        .btn-pastel:hover {
            background-color: #b8c0ff;
            color: #333;
        }

        .card {
            background-color: #fefbff;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(187, 208, 255, 0.3);
        }

        .card:hover {
            box-shadow: 0 8px 20px rgba(187, 208, 255, 0.4);
        }

        .card-title {
            color: #6c5b7b;
        }

        .card-text {
            color: #5a4e7c;
        }

    </style>

    @stack('styles')
</head>
<body>
    @include('layouts.navbar')

    <div class="d-flex">
        @include('layouts.sidebar')

        <div class="main-content p-4 flex-grow-1">
            @yield('content')
        </div>
    </div>
</body>

</html>
