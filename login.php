<?php 
    include_once 'layout_head.php';
    include_once 'layout_nav.php';
?>
<div class="login-card text-center">
    <img src="https://www.pngmart.com/files/9/Police-Badge-PNG-Picture.png" class="logo" alt="CRIMS Logo">
    <h4 class="mb-4">CRIMS Login</h4>
    <form>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="loginEmail" placeholder="Email" required>
        <label for="loginEmail">Email address</label>
      </div>
      <div class="form-floating mb-4">
        <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
        <label for="loginPassword">Password</label>
      </div>
      <button class="btn btn-primary w-100" type="submit">Login</button>
      <p class="mt-3 mb-0">Don't have an account? <a href="signup.php">Sign up</a></p>
    </form>
  </div>

  <?php
    include_once 'layout_foot.php';
  ?>