<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  body {
    background: #44c4e7 url("https://38.media.tumblr.com/d23deac40b06633b79520a8552f40b94/tumblr_nb1uhrRrge1st5lhmo1_1280.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-family: "Roboto";
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }

  body::before {
    z-index: -1;
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    background: #44c4e7;
    /* IE Fallback */
    background: rgba(68, 196, 231, 0.8);
    width: 100%;
    height: 100%;
  }

  .form {
    position: absolute;
    top: 50%;
    left: 50%;
    background: #fff;
    width: 285px;
    margin: -140px 0 0 -182px;
    padding: 40px;
    box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
  }

  .form h2 {
    margin: 0 0 20px;
    line-height: 1;
    color: #44c4e7;
    font-size: 18px;
    font-weight: 400;
  }

  .form input {
    outline: none;
    display: block;
    width: 100%;
    margin: 0 0 20px;
    padding: 10px 15px;
    border: 1px solid #ccc;
    color: #ccc;
    font-family: "Roboto";
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    font-size: 14px;
    font-wieght: 400;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition: 0.2s linear;
    -moz-transition: 0.2s linear;
    -ms-transition: 0.2s linear;
    -o-transition: 0.2s linear;
    transition: 0.2s linear;
  }

  .form input:focus {
    color: #333;
    border: 1px solid #44c4e7;
  }

  .form button {
    cursor: pointer;
    background: #44c4e7;
    width: 100%;
    padding: 10px 15px;
    border: 0;
    color: #fff;
    font-family: "Roboto";
    font-size: 14px;
    font-weight: 400;

  }

  .form button:hover {
    background: #369cb8;
  }
</style>

<body>
  <div class="form animated flipInX">
    <h2>Login To Your Account</h2>
    <form action="connect_login.php" method="post">
      <input placeholder="Email" type="email" id="email" name="email"></input>
      <input placeholder="Password" type="password" id="password" name="password"></input>
      <button type="submit" name="submit">Login</button>
    </form>
  </div>
</body>
</html>