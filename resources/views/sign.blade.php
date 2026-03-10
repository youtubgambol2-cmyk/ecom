<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dev. sakami</title>
  <link rel="stylesheet" href="/css/style.css" /> 
</head>
<body>
  <div class="w">
    <div class="ctner">
      <h1>Sign Up</h1>
      <p class="short-title">It's free and only takes a minute.</p>

      <form>
      @csrf
        <label>Username</label>
        <input type="text" placeholder="" required />

        <label>Email Address</label>
        <input type="email" placeholder="" required />

        <label>Password</label>
        <input type="password" placeholder="" required />

        <label>Confirm Password</label>
        <input type="password" placeholder="" required />

        <button type="submit">Sign Up</button>

        <label class="terms">
          By clicking the Sign Up button, you agree to our<br />
          <a href="#">Terms & Conditions</a>, and <a href="#">Privacy Policy</a>.
        </label>
      </form>
    </div>

    <div class="bottom">
      <p>Already have an account? <a href="#">Login here</a></p>
    </div>
  </div>
</body>
</html>
