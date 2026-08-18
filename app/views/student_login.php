<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Required</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background: linear-gradient(135deg, #ffe1ef 0%, #ffd6e8 40%, #ffc2dd 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
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
        .box {
            background: #fffafc;
            padding: 42px 38px;
            border-radius: 28px;
            box-shadow: 0 10px 35px rgba(255, 105, 160, 0.25);
            width: 100%;
            max-width: 340px;
            text-align: center;
            border: 3px solid #ffb6d5;
            position: relative;
            z-index: 1;
        }
        h1 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.1rem;
            color: #e75590;
            margin-bottom: 6px;
        }
        p { font-size: 0.85rem; color: #a5657f; margin-bottom: 20px; }
        .hint {
            background: #ffeef6;
            border: 1.5px dashed #ff9ec7;
            color: #c24d84;
            font-size: 0.8rem;
            padding: 9px 12px;
            border-radius: 14px;
            margin-bottom: 20px;
        }
        input[type="password"] {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #ffc2dd;
            border-radius: 14px;
            font-size: 0.9rem;
            margin-bottom: 16px;
            font-family: 'Poppins', sans-serif;
        }
        input[type="password"]:focus {
            outline: none;
            border-color: #ff7fb0;
        }
        button {
            width: 100%;
            padding: 11px;
            background: linear-gradient(90deg, #ff9ec7, #ff7fb0);
            color: #fff;
            border: none;
            border-radius: 14px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(255, 126, 176, 0.4);
            transition: 0.25s ease;
        }
        button:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(255, 126, 176, 0.5); }
        .error {
            color: #d6336c;
            font-size: 0.8rem;
            margin-bottom: 12px;
        }
        a { display: inline-block; margin-top: 18px; font-size: 0.8rem; color: #e75590; font-weight: 600; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Protected Page 🔒</h1>
        <p>Enter the access password to view the student profile.</p>
        <div class="hint">Demo password: <strong>borbe123</strong></div>
        <?php if (isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST" action="<?= site_url('student/authenticate') ?>">
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Unlock 🎀</button>
        </form>
        <a href="<?= site_url('student') ?>">Back to Home</a>
    </div>
</body>
</html>