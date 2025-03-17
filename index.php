<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');
        body {
            background-image: url('wallpaperflare.com_wallpaper.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family : monospace:;
                }
        .form-container {
            background: rgba(128, 0, 128, 0.5); /* Purple transparent background */
            padding: 20px;
            border-radius: 10px;
            max-width: 400px; /* Original width */
            margin: 50px auto;
        }
        .alert {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="form-container">
            <form id="myForm" action="submit.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <?php if(isset($_GET['error']) && $_GET['error'] == 'name'): ?>
                        <div class="alert alert-danger" id="nameError">ADD VALID NAME</div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" name="email" required>
                    <?php if(isset($_GET['error']) && $_GET['error'] == 'email'): ?>
                        <div class="alert alert-danger" id="emailError">ADD VALID EMAIL</div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <?php if(isset($_GET['error']) && $_GET['error'] == 'password'): ?>
                        <div class="alert alert-danger" id="passwordError">ADD PASSWORD FROM 8 CHARACTERS CONTAIN CHARACTERS, SYMBOLS, UPPERCASE, AND NUMBER</div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                    <?php if(isset($_GET['error']) && $_GET['error'] == 'phone'): ?>
                        <div class="alert alert-danger" id="phoneError">ADD VALID PHONE</div>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <div class="alert alert-success" id="successMessage">DATA STORED SUCCESSFULLY</div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</body>
</html>