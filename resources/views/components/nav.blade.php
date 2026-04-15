<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Reset */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

/* Navbar */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 20px;
  background: #fff;
  box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Logo */
.logo {
  font-size: 20px;
  font-weight: bold;
}

/* Nav links */
.nav-links {
  list-style: none;
  display: flex;
  gap: 20px;
}

.nav-links a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.nav-links a:hover {
  color: #007bff;
}

/* Buttons */
.auth-buttons {
  display: flex;
  gap: 10px;
}

.btn {
  text-decoration: none;
  padding: 8px 14px;
  border-radius: 5px;
  font-size: 14px;
  font-weight: 500;
  transition: 0.3s;
}

/* Login button */
.login {
  border: 1px solid #007bff;
  color: #007bff;
}

.login:hover {
  background: #007bff;
  color: white;
}

/* Register button */
.register {
  background: #007bff;
  color: white;
}

.register:hover {
  background: #0056b3;
}
  </style>
</head>
<body>

<nav class="navbar">
  <div class="logo">Ideas</div>

  <ul class="nav-links">
    <li><a href="#">Home</a></li>
    <li><a href="#">Ideas</a></li>
  </ul>

  <div class="auth-buttons">
    @guest
    <a href="/login" class="btn login">Login</a>
    <a href="/register" class="btn register">Register</a>
    @endguest
    
    @auth
    {{-- <form method="POST" action="{{route('logout')}}"> --}}
    <form method="POST" action='/logout'>
      @csrf
      <button type="submit" class="btn register">Logout</button>
    </form>
      
    @endauth
    {{-- {{ dd(Auth::user()) }} --}}
  </div>
</nav>

</body>
</html>