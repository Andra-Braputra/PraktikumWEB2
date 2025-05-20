<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>
<body>
    <div class="auth-container">
        <h1 class="auth-title">Login</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="auth-alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/auth/loginProcess" class="auth-form">
            <?= csrf_field() ?>
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="auth-actions">
                <button type="submit" class="btn btn-primary">Login</button>
                
                <div class="auth-footer">
                    <p>Don't have an account yet?</p>
                    <a href="/auth/register" class="btn btn-secondary">Register</a>
                </div>
                
                <div class="auth-link">
                    <a href="<?= base_url('buku') ?>">Continue as Guest</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>