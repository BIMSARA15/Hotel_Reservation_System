<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Renewal</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      width: 400px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .password-renewal-form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 15px;
    }

    input[type="email"],
    input[type="text"],
    input[type="password"] {
      width: calc(100% - 110px);
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 16px;
    }

    .send-code-btn {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .send-code-btn1 {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      padding: 12px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    button[type="submit"]:hover,
    .send-code-btn:hover {
      background-color: #45a049;
    }
  </style>
</head>

<body>
  <header>
  <header>
    <?php include "header.php" ?>
   </header>
  </header>
  <div class="container">
    <h2>Renew Password</h2>
    <div class="password-renewal-form">
      <div id="alerts" style="width: 100%; height:10%; ">
      </div>
      <div class="form-group">
        <input type="email" id="email3" name="email" placeholder="Email Address">
        <button type="button" class="send-code-btn" onclick="forgotPassword();">Send Verification Code</button>
      </div>
      <div class="form-group">
        <input type="text" id="verification-code" name="verification-code" placeholder="Verification Code" required>
      </div>
      <div class="form-group">
        <input type="password" id="new-password" name="new-password" placeholder="New Password" required>
      </div>
      <div class="form-group">
        <input type="password" id="new-password2" name="new-password" placeholder="Retype New Password" required>
      </div>
      <button class="send-code-btn1" onclick="resetPassword();">Renew Password</button>
    </div>
  </div>
  <script src="indexres.js"></script>
</body>

</html>