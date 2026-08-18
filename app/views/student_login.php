<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Required</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f4f5f7;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .box {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 340px;
            text-align: center;
            border-top: 5px solid #16324f;
        }
        h1 { font-size: 1.3rem; color: #16324f; margin-bottom: 6px; }
        p { font-size: 0.85rem; color: #777; margin-bottom: 20px; }
        .hint {
            background: #fdf3d9;
            border: 1px solid #eacb6b;
            color: #8a6d1d;
            font-size: 0.8rem;
            padding: 8px 12px;
            border-radius: 6px;
            margin-bottom: 18px;
        }
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 0.9rem;
            margin-bottom: 14px;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #16324f;
            color: #fff;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }
        button:hover { background: #0f2338; }
        .error {
            color: #c0392b;
            font-size: 0.8rem;
            margin-bottom: 12px;
        }
        a { display: inline-block; margin-top: 16px; font-size: 0.8rem; color: #16324f; }
    </style>
</head>
<body>
    <div class="box">
        <h1>Protected Page</h1>
        <p>Enter the access password to view the student profile.</p>
        <div class="hint">Demo password: <strong>gavilan123</strong></div>
        <?php if (isset($error)): ?>
            <div class="error"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST" action="<?= site_url('student/authenticate') ?>">
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Unlock</button>
        </form>
        <a href="<?= site_url('student') ?>">Back to Home</a>
    </div>
</body>
</html>