<?php 
    include_once 'layout_head.php';
    include_once 'layout_nav.php';
?>
<div class="signup-card text-center">
    <img src="https://www.pngmart.com/files/9/Police-Badge-PNG-Picture.png" class="logo" alt="CRIMS Logo">
    <h4 class="mb-4">Create an Account</h4>
    <form>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="signupName" placeholder="Full Name" required>
        <label for="signupName">Full Name</label>
      </div>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="signupEmail" placeholder="Email" required>
        <label for="signupEmail">Email address</label>
      </div>
      <div class="form-floating mb-3">
        <input type="tel" class="form-control" id="signupCNumber" placeholder="Contact Number" required>
        <label for="signupEmail">Contact Number</label>
      </div>
      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="signupPassword" placeholder="Password" required>
        <label for="signupPassword">Password</label>
      </div>
      <div class="form-floating mb-4">
        <input type="password" class="form-control" id="signupConfirm" placeholder="Confirm Password" required>
        <label for="signupConfirm">Confirm Password</label>
      </div>
      <button class="btn btn-success w-100" type="submit">Sign Up</button>
      <p class="mt-3 mb-0">Already have an account? <a href="login.php">Log in</a></p>
    </form>
  </div>

  <?php
    include_once 'layout_foot.php';
  ?>