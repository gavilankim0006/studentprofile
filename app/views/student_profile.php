<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Profile</title>
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
        .id-card {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 420px;
            overflow: hidden;
        }
        .id-header {
            background: #16324f;
            color: #fff;
            padding: 24px 30px;
            text-align: center;
        }
        .id-header .avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: #d9a441;
            color: #16324f;
            font-weight: 700;
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }
        .id-header h1 {
            font-size: 1.3rem;
            font-weight: 700;
        }
        .id-header p {
            font-size: 0.8rem;
            opacity: 0.85;
            letter-spacing: 0.5px;
            margin-top: 4px;
            text-transform: uppercase;
        }
        .id-body {
            padding: 26px 30px;
        }
        .row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            font-size: 0.92rem;
        }
        .row:last-child { border-bottom: none; }
        .row .label {
            color: #888;
            font-weight: 600;
        }
        .row .value {
            color: #1a1a2e;
            font-weight: 600;
            text-align: right;
        }
        nav {
            text-align: center;
            padding: 20px 30px 26px;
        }
        nav a {
            display: inline-block;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.85rem;
            padding: 9px 20px;
            margin: 0 5px;
            border-radius: 6px;
            transition: 0.2s ease;
        }
        nav a:first-child {
            background: transparent;
            color: #16324f;
            border: 1.5px solid #16324f;
        }
        nav a:first-child:hover { background: #16324f; color: #fff; }
        nav a:last-child {
            background: #d9a441;
            color: #16324f;
        }
        nav a:last-child:hover { background: #c4923a; }
    </style>
</head>
<body>
    <div class="id-card">
        <div class="id-header">
            <div class="avatar"><?= strtoupper(substr($name, 0, 1)) ?></div>
            <h1><?= $name ?></h1>
            <p>Student Profile</p>
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