<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
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
        .id-card {
            background: #fffafc;
            border-radius: 28px;
            box-shadow: 0 10px 35px rgba(255, 105, 160, 0.25);
            width: 100%;
            max-width: 420px;
            overflow: hidden;
            border: 3px solid #ffb6d5;
            position: relative;
            z-index: 1;
        }
        .id-header {
            background: linear-gradient(135deg, #ff9ec7, #ff6fa5);
            color: #fff;
            padding: 30px 30px 26px;
            text-align: center;
        }
        .id-header .avatar {
            width: 76px;
            height: 76px;
            border-radius: 50%;
            background: #fffafc;
            color: #e75590;
            font-weight: 700;
            font-size: 1.7rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 14px;
            border: 3px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        .id-header h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.1rem;
            font-weight: 700;
        }
        .id-header p {
            font-size: 0.78rem;
            opacity: 0.95;
            letter-spacing: 1px;
            margin-top: 4px;
            text-transform: uppercase;
        }
        .id-body {
            padding: 26px 32px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            padding: 11px 0;
            border-bottom: 1.5px dashed #ffd3e6;
            font-size: 0.9rem;
        }
        .row:last-child { border-bottom: none; }
        .row .label {
            color: #c584a0;
            font-weight: 600;
        }
        .row .value {
            color: #6b3552;
            font-weight: 600;
            text-align: right;
        }
        nav {
            text-align: center;
            padding: 20px 30px 28px;
        }
        nav a {
            display: inline-block;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 10px 22px;
            margin: 0 5px;
            border-radius: 30px;
            transition: 0.25s ease;
        }
        nav a:first-child {
            background: #fff;
            color: #e75590;
            border: 1.5px solid #ff9ec7;
        }
        nav a:first-child:hover { background: #ffe6f1; }
        nav a:last-child {
            background: linear-gradient(90deg, #ff9ec7, #ff7fb0);
            color: #fff;
            box-shadow: 0 4px 12px rgba(255, 126, 176, 0.4);
        }
        nav a:last-child:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(255, 126, 176, 0.5); }
    </style>
</head>
<body>
    <div class="id-card">
        <div class="id-header">
            <div class="avatar"><?= strtoupper(substr($name, 0, 1)) ?></div>
            <h1><?= $name ?></h1>
            <p>🎀 Student Profile</p>
        </div>
        <div class="id-body">
            <div class="row"><span class="label">Student ID</span><span class="value"><?= $student_id ?></span></div>
            <div class="row"><span class="label">Course</span><span class="value"><?= $course ?></span></div>
            <div class="row"><span class="label">Year Level</span><span class="value"><?= $year ?></span></div>
            <div class="row"><span class="label">Section</span><span class="value"><?= $section ?></span></div>
            <div class="row"><span class="label">Email</span><span class="value"><?= $email ?></span></div>
        </div>
        <nav>
            <a href="<?= site_url('student') ?>">Home</a>
            <a href="<?= site_url('student/profile') ?>">Student Profile</a>
        </nav>
    </div>
</body>
</html>