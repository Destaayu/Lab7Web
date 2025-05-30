<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Load Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div id="login-wrapper" class="border p-4 shadow rounded" style="max-width: 400px; width: 100%;">
            <h1 class="mb-4 text-center">Sign In</h1>

            <?php if (session()->getFlashdata('flash_msg')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('flash_msg'); ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/user/login'); ?>" method="post">
                <div class="mb-3">
                    <label for="InputForEmail" class="form-label">Email address</label>
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        id="InputForEmail" 
                        value="<?= old('email'); ?>" 
                        required
                    >
                </div>

                <div class="mb-3">
                    <label for="InputForPassword" class="form-label">Password</label>
                    <input 
                        type="password" 
                        name="password" 
                        class="form-control" 
                        id="InputForPassword" 
                        required
                    >
                </div>

                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>

    <!-- Optional Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
