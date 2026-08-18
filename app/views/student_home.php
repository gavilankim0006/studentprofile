<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #ffe1ef 0%, #ffd6e8 40%, #ffc2dd 100%);
            color: #6b3552;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        body::before {
            content: "✿";
            position: absolute;
            top: -40px;
            left: -30px;
            font-size: 180px;
            color: rgba(255,255,255,0.35);
        }
        body::after {
            content: "✿";
            position: absolute;
            bottom: -60px;
            right: -30px;
            font-size: 220px;
            color: rgba(255,255,255,0.3);
        }
        .container {
            background: #fffafc;
            border-radius: 28px;
            box-shadow: 0 10px 35px rgba(255, 105, 160, 0.25);
            padding: 50px 55px;
            text-align: center;
            max-width: 480px;
            width: 100%;
            border: 3px solid #ffb6d5;
            position: relative;
            z-index: 1;
        }
        .badge {
            display: inline-block;
            background: linear-gradient(90deg, #ff9ec7, #ff7fb0);
            color: #fff;
            font-size: 0.75rem;
            letter-spacing: 1.5px;
            padding: 6px 18px;
            border-radius: 30px;
            margin-bottom: 20px;
            text-transform: uppercase;
            box-shadow: 0 3px 10px rgba(255, 126, 176, 0.4);
        }
        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: #e75590;
        }
        p.subtitle {
            font-size: 0.9rem;
            color: #a5657f;
            margin-bottom: 32px;
        }
        nav a {
            display: inline-block;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.88rem;
            padding: 11px 24px;
            margin: 0 6px;
            border-radius: 30px;
            transition: 0.25s ease;
        }
        nav a:first-child {
            background: linear-gradient(90deg, #ff9ec7, #ff7fb0);
            color: #fff;
            box-shadow: 0 4px 12px rgba(255, 126, 176, 0.4);
        }
        nav a:first-child:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(255, 126, 176, 0.5); }
        nav a:last-child {
            background: #fff;
            color: #e75590;
            border: 1.5px solid #ff9ec7;
        }
        nav a:last-child:hover { background: #ffe6f1; }
    </style>
</head>
<body>
    <div class="container">
        <span class="badge">🎀 BSIT Student</span>
        <h1>Korine Alexa Borbe</h1>
        <p class="subtitle">Web Systems and Technologies 2 — Laboratory Activity 3</p>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>