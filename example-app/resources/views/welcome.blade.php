<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-image: url('https://wallpapers.com/images/featured/best-ever-desktop-bgt6dccypy1dfk0c.jpg'); /* Placeholder image */
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      width: 300px;
      background-color: rgba(255, 255, 255, 0.9);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .login-form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    input[type="text"],
    input[type="password"],
    button {
      margin-bottom: 20px;
      padding: 10px;
      border-radius: 6px;
      border: 1px solid #ddd;
    }

    button {
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #0056b3;
    }

    h2 {
      margin-bottom: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <form class="login-form">
      <h2>Login</h2>
      <input type="text" placeholder="Username" required>
      <input type="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>
