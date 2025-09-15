<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Welcome</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column; /* supaya navbar di atas, card di bawah */
      align-items: center;
      height: 100vh;
      color: #fff;
      transition: background 0.4s, color 0.4s;
    }

        nav {
        width: 100%;
        background: rgba(0, 0, 0, 0.25);
        backdrop-filter: blur(6px);
        display: flex;
        justify-content: flex-end; /* biar nempel kanan */
        gap: 12px; /* kasih jarak antar tombol */
        padding: 12px 24px;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        }

        nav a {
        text-decoration: none;
        font-weight: 600;
        color: #f9fafb;
        background: linear-gradient(135deg, #1e3a8a, #2563eb);
        padding: 8px 16px;
        border-radius: 6px;
        transition: all 0.3s ease;
        white-space: nowrap; /* biar teks ga turun ke bawah */
        }


    nav a:hover {
      background: linear-gradient(135deg, #2563eb, #06b6d4);
      box-shadow: 0 4px 10px rgba(0, 255, 255, 0.3);
      transform: translateY(-2px);
    }

    .card {
      background: #ffffff;
      color: #2a5298;
      text-align: center;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      max-width: 500px;
      width: 90%;
      margin-top: 100px; /* supaya tidak ketutup navbar */
      animation: fadeIn 1.2s ease-in-out;
      transition: background 0.4s, color 0.4s;
    }

    .card img {
      width: 80px;
      border-radius: 50%;
      margin-bottom: 15px;
      border: 3px solid #2a5298;
      transition: transform 0.6s ease, box-shadow 0.6s ease, border 0.4s;
      cursor: pointer;
    }

    .card img:hover {
      transform: rotate(15deg) scale(1.1);
      box-shadow: 0 0 20px rgba(56, 189, 248, 0.7);
      border: 3px solid #38bdf8;
    }

    h1 {
      margin: 10px 0;
      font-size: 24px;
      color: #1e3c72;
      transition: color 0.4s;
    }

    p {
      margin: 8px 0;
      color: #444;
      transition: color 0.4s;
    }

    .menu {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
      margin-top: 15px;
    }

    .menu a {
      flex: 1 1 calc(50% - 24px);
      min-width: 120px;
      text-align: center;
      padding: 12px 18px;
      background: linear-gradient(135deg, #1e3a8a, #2563eb);
      color: #f9fafb;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .menu a:hover {
      background: linear-gradient(135deg, #2563eb, #06b6d4);
      transform: translateY(-3px) scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 255, 255, 0.3);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Dark Mode */
    @media (prefers-color-scheme: dark) {
      body {
        background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        color: #e0e0e0;
      }
      .card {
        background: #1e293b;
        color: #f1f5f9;
        box-shadow: 0 8px 20px rgba(0,0,0,0.6);
      }
      h1 {
        color: #38bdf8;
      }
      p {
        color: #cbd5e1;
      }
      nav {
        background: rgba(30, 41, 59, 0.7);
      }
    }

    /* Mobile */
    @media (max-width: 600px) {
      nav {
        justify-content: center;
      }
      .card {
        padding: 20px;
      }
      h1 {
        font-size: 20px;
      }
      p {
        font-size: 14px;
      }
      .menu {
        flex-direction: column;
        gap: 10px;
      }
      .menu a {
        flex: 1 1 100%;
      }
    }
  </style>
</head>
<body>
  <!-- === NAVBAR === -->
  <nav>
    <a href="{{ route('login') }}">Login</a>
    <a href="{{ route('register') }}">Register</a>
  </nav>

  <!-- === CARD === -->
  <div class="card">
    <img src="{{ asset('images/shorekeeper.png') }}" alt="Logo">
    <h1>Selamat Datang</h1>
    <p>di <strong>Sistem Toko Mahasiswa</strong></p>
    <p>Silakan pilih menu di bawah ini.</p>
    <div class="menu">
      <a href="{{ route('about') }}">About</a>
      <a href="{{ route('contact') }}">Contact</a>
      <a href="{{ route('user.profile', 1) }}">User</a>
      <a href="{{ route('greeting', 'Fathir') }}">Greeting</a>
      <a href="{{ route('admin.edit') }}">Admin</a>
    </div>
  </div>
</body>
</html>
