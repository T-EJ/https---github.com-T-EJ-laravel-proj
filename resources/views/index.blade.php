<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- <link rel="stylesheet" href="styles.css"> -->
  <title>Registration</title>
  <style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  background: url('img/bg.jpg') no-repeat center;
  background-size: cover;
  font-family: sans-serif;
}
.login-wrapper {
  height: 100vh;
  width: 100vw;
  display: flex;
  justify-content: center;
  align-items: center;
}
.form {
  position: relative;
  width: 100%;
  max-width: 380px;
  padding: 80px 40px 40px;
  background: rgba(0,0,0,0.7);
  border-radius: 10px;
  color: #fff;
  box-shadow: 0 15px 25px rgba(0,0,0,0.5);
}
.form::before {
  content:'';
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255,255,255, 0.08);
  transform: skewX(-26deg);
  transform-origin: bottom left;
  border-radius: 10px;
  pointer-events: none;
}
.form img {
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
  width: 100px;
  background: rgba(255,255,255, 0.8);
  border-radius: 50%;
}
.form h2 {
  text-align: center;
  letter-spacing: 1px;
  margin-bottom: 2rem;
  color: #ff652f;
}
.form .input-group {
  position: relative;
}
.form .input-group input {
  width: 100%;
  padding: 10px 0;
  font-size: 1rem;
  letter-spacing: 1px;
  margin-bottom: 30px;
  margin-top: 0px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background-color: transparent;
  color: inherit;
}
.form .input-group label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 1rem;
  pointer-events: none;
  transition: .3s ease-out;
}
.form .input-group input:focus + label,
.form .input-group input:valid + label {
  transform: translateY(-18px);
  color: #ff652f;
  font-size: .8rem;
}
.submit-btn {
  display: block;
  margin-left: auto;
  border: none;
  outline: none;
  background: #ff652f;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}
.forgot-pw {
  color: inherit;
}

#forgot-pw {
  position: absolute;
  display: flex;
  justify-content: center;
  align-items: center;
  top: 0;
  left: 0;
  right: 0;
  height: 0;
  z-index: 1;
  background: #fff;
  opacity: 0;
  transition: 0.6s;
}
#forgot-pw:target {
  height: 100%;
  opacity: 1;
}
.close {
  position: absolute;
  right: 1.5rem;
  top: 0.5rem;
  font-size: 2rem;
  font-weight: 900;
  text-decoration: none;
  color: inherit;
}
    .a{
      background-repeat: no-repeat;
      background-position: center;
      position: absolute;
    }
    </style>

</head>
<body class="a"style="background-image: url('login.jpg');">
   <div>
           @if(Session::has('success'))
           <div class="alert alert success">
            {{Session('success')}}
             </div>
            @endif
            </div>
  <div class="login-wrapper">
  <form class="form" action="{{ route('store')}}" method="post" >
	@csrf
      
      <h2>Register</h2>
      
     <div class="input-group">
        <input type="text" name="Name"  required>
        <label for="loginUser">Name</label>
      </div>
	  <div class="input-group">
        <input type="text" name="Email"  required>
        <label for="loginUser">Email</label>
      </div>
      
      <div class="input-group">
        <input type="password" name="Pwd" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>

      
      <div class="form-group">
                     <label>
                     <input id="check_1" name="check_1"  type="checkbox" required><small> I read and agree to Terms & Conditions</small></input> 
                  <div class="invalid-feedback">You must check the box.</div>
                  </label>
               </div>
               <input style="margin-left: 90px; margin-top: 20px;"type="submit" value="Submit" class="submit-btn">
		<br>
                    <a href="/login">Already Registered User !! Login Here.</a> 
      
    </form>

    <div id="forgot-pw">
    <!-- <form class="myForm text-center" action="{{ route('store')}}" method="post" > -->

        
        
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh
</body>
</html>




