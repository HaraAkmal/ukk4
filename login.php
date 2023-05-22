<!DOCTYPE html>
<html>
<head>
  <title>Login Inventaris Barang</title>
  <style>
    body {
      font-family: 'Courier New', Courier, monospace;
    }
    .login-container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 7px solid #FFACAC;
      border-radius: 5px;
      margin-top: 15%;
    }
    .login-container h2 {
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    .form-group input {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    .form-group input[type="submit"] {
      background-color: #212A3E;
      font-family: 'Courier New', Courier, monospace;
      color: white;
      cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
      background-color: #212A3E;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Inventaris Barang Sembako</h2>
    <form method="post" action="ceklogin.php">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
</body>
</html>