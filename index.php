<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <h1>Contact Form</h1>
            <?php
            session_start();
            if(isset($_SESSION['feedback'])): ?>
                <script>alert('<?php echo addslashes($_SESSION['feedback']); ?>');</script>
                <?php unset($_SESSION['feedback']); ?>
            <?php endif; ?>
            <form action="process_form.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your E-Mail" required>
    
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" placeholder="Your comment" required></textarea>
    
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>

    <script>
alert('<?php echo addslashes($_SESSION['feedback']); ?>');
// window.location.href = '/process_form.php'; // Укажите здесь URL для редиректа
</script>
</body>
</html>