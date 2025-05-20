<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/auth.css') ?>">
</head>
<body>
    <div class="auth-container">
        <h1 class="auth-title">Create Account</h1>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="auth-alert alert-danger">
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="auth-alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form method="post" action="/auth/registerProcess" class="auth-form">
            <?= csrf_field() ?>
            
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" class="form-control" 
                       value="<?= old('username') ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" class="form-control" 
                       value="<?= old('email') ?>" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password_confirm">Confirm Password</label>
                <input type="password" id="password_confirm" name="password_confirm" class="form-control" required>
            </div>

            <div class="auth-actions">
                <button type="submit" class="btn btn-primary">Register</button>
                
                <div class="auth-footer">
                    <p>Already have an account? <a href="/auth/login" class="auth-link">Login here</a></p>
                </div>
            </div>
        </form>
    </div>
</body>
</html>