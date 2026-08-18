<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Home</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f5f7;
            color: #1a1a2e;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 50px 60px;
            text-align: center;
            max-width: 500px;
            width: 100%;
            border-top: 5px solid #16324f;
        }
        .badge {
            display: inline-block;
            background: #16324f;
            color: #fff;
            font-size: 0.75rem;
            letter-spacing: 1px;
            padding: 5px 14px;
            border-radius: 20px;
            margin-bottom: 18px;
            text-transform: uppercase;
        }
        h1 {
            font-size: 1.9rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: #16324f;
        }
        p.subtitle {
            font-size: 0.95rem;
            color: #666;
            margin-bottom: 30px;
        }
        nav a {
            display: inline-block;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 10px 22px;
            margin: 0 6px;
            border-radius: 6px;
            transition: 0.2s ease;
        }
        nav a:first-child {
            background: #16324f;
            color: #fff;
        }
        nav a:first-child:hover { background: #0f2338; }
        nav a:last-child {
            background: transparent;
            color: #16324f;
            border: 1.5px solid #16324f;
        }
        nav a:last-child:hover { background: #16324f; color: #fff; }
    </style>
</head>
<body>
    <div class="container">
        <span class="badge">BSIT Student</span>
        <h1>Kim Deniel Gavilan</h1>
        <p class="subtitle">Web Systems and Technologies 2 — Laboratory Activity 3</p>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>