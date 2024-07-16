<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Confirmed</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="confirmation-container">
  <img src="images/tick_mark.png" alt="Tick Mark" class="tick-mark">
    <h1>Registration Confirmed</h1>
    <p class="welcome-message">Welcome <?php echo htmlspecialchars($_GET['first_name']); ?>!</p>
    <div class="details">
      <p><strong>First Name:</strong> <?php echo htmlspecialchars($_GET['first_name']); ?></p>
      <p><strong>Last Name:</strong> <?php echo htmlspecialchars($_GET['last_name']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($_GET['email']); ?></p>
      <p><strong>Phone:</strong> <?php echo htmlspecialchars($_GET['phone']); ?></p>
    </div>
    <button class="continue-button" onclick="Home()">Continue</button>
  </div>

  <script>
    function Home()
    {
      window.location.href = 'index.html';
    }
  </script>
</body>
</html>