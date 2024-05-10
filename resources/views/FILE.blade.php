<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Login Form Demo</title>
</head>
<body>
                             <div>
                            @if(Session::has('success'))
                            <div class="alert alert success">
                                {{Session('success')}}
                            </div>
                            @endif
                        </div>
  <div class="login-wrapper">
    <form action="post"  action="{{ route('store')}}" class="form">
        @csrf
      <img src="img/avatar.png" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="Name" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="Pwd" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="Email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
        <br>
                    <a href="/login">Already Registered User !! Login Here.</a> 
      </form>
    </div>
  </div>
</body>
</html>








<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Login Form Demo</title>
</head>
<body>
                             <div>
                            @if(Session::has('success'))
                            <div class="alert alert success">
                                {{Session('success')}}
                            </div>
                            @endif
                        </div>
  <div class="login-wrapper">
    <form action="post"  action="{{ route('store')}}" class="form">
        @csrf
      <img src="img/avatar.png" alt="">
      <h2>Login</h2>
      <div class="input-group">
        <input type="text" name="Name" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="Pwd" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" value="Login" class="submit-btn">
      <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
    </form>

    <div id="forgot-pw">
      <form action="" class="form">
        <a href="#" class="close">&times;</a>
        <h2>Reset Password</h2>
        <div class="input-group">
          <input type="email" name="Email" id="email" required>
          <label for="email">Email</label>
        </div>
        <input type="submit" value="Submit" class="submit-btn">
        <br>
                    <a href="/login">New User !! Login Here.</a> 
      </form>
    </div>
  </div>
</body>
</html>