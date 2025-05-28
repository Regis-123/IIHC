<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IIHC Enrollment</title>
     <link rel="icon" href="pics/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styless.css">
    <style>
      .hero-section {
  background: url('pics/bg2.jpg') no-repeat center center;
  background-size: cover;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.hero-overlay {
  background-color: maroon;
  padding: 60px 40px;
  border-radius: 16px;
  max-width: 600px;
  width: 90%;
  text-align: center;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
  border-radius: 90px;
  
}
.hero-overlay {
  opacity: calc(75%);
}

.hero-content h1 {
  color: white;
  font-size: 3rem;
  margin-bottom: 10px;
  font-family: 'Montserrat', sans-serif;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

.hero-content p {
  color: white;
  font-size: 1.2rem;
  margin-bottom: 30px;
  font-family: 'Roboto', sans-serif;
  text-shadow: 1px 1px 3px rgba(0,0,0,0.6);
}

.hero-content .btn {
  padding: 12px 30px;
  font-size: 1.2rem;
  font-weight: 600;
  border-radius: 100px;
  border: 2px solid white;
  background-color: transparent;
  color: #fff;
  transition: all 0.3s ease;
}

.hero-content .btn:hover {
  background-color: #10b981;
  color: #fff;
  border-color: #10b981;
  transform: scale(1.05);
}

    </style>
</head>
<body>
    <div class="form-container">
        <div class="account-links">   
        </div>
     <h2>SIGN UP<br />TO ENROLL</h2>
     <form action="register.php" method="POST">
         <label for="firstname">FIRSTNAME</label>
         <input type="text" id="firstname" name="firstname" placeholder="FIRSTNAME" required />

         <label for="lastname">LASTNAME</label>
         <input type="text" id="lastname" name="lastname" placeholder="LASTNAME" required />

         <label for="middlename">MIDDLE NAME</label>
         <input type="text" id="middlename" name="middlename" placeholder="MIDDLE NAME" />

         <label for="USERNAME">USERNAME</label>
         <input type="text" id="USERNAME" name="USERNAME" placeholder="USERNAME" required />

         <label for="password">PASSWORD</label>
         <input type="password" id="password" name="password" placeholder="PASSWORD" required />

         <label for="confirm-password">CONFIRM PASSWORD</label>
         <input type="password" id="confirm-password" name="confirm_password" placeholder="CONFIRM PASSWORD" required />

         <label for="date">DATE OF BIRTH</label>
         <input type="date" id="date" name="date" placeholder="date" required />

         <label for="address">ADDRESS</label>
         <input type="text" id="address" name="address" placeholder="ADDRESS" required />

         <label for="contact">CONTACT</label>
         <input type="text" id="contact" name="contact" placeholder="CONTACT" required />

         <div class="login-link">
             Already have an account? <a href="login.html">Log in</a>
         </div>

         <div class="button-wrapper">
             <button type="submit">CREATE</button>
         </div>
     </form>
     
     

 </div>
</body>
</html>
<script>
document.querySelector('form').addEventListener('submit', function(e) {
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;
    
    if (password !== confirmPassword) {
        e.preventDefault();
        alert('Passwords do not match!');
        return false;
    }
    return true;
});
</script>