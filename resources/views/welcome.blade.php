<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Book Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(to right, #ffd6ff, #e7c6ff, #c8b6ff, #b8c0ff, #bbd0ff);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #333;
      font-family: 'Segoe UI', sans-serif;
      overflow: hidden;
    }

    .fade-in {
      opacity: 0;
      animation: fadeIn 1.2s ease-in-out forwards;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: scale(0.95);
      }
      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .card {
      border: none;
      border-radius: 20px;
      background: white;
      color: #5a4e7c;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .btn-enter {
      background: #c8b6ff;
      border: none;
      color: #fff;
      font-weight: 500;
      transition: background 0.3s ease;
    }

    .btn-enter:hover {
      background: #b8c0ff;
      color: #333;
    }

    h1 {
      font-size: 2.5rem;
      font-weight: 600;
    }

    .card-body {
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="container text-center fade-in">
    <div class="card p-5" style="max-width: 500px; margin: auto;">
      <div class="card-body">
        <h1>Welcome!</h1>
        <p class="lead mt-3">This is your <strong>Book Management System</strong></p>
        <a href="{{ route('dashboard') }}" class="btn btn-enter btn-lg mt-4 px-5">Enter System</a>
      </div>
    </div>
  </div>

</body>
</html>
