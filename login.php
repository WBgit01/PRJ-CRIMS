<?php 
    include_once 'layout_head.php';
    include_once 'layout_nav.php';
?>
<!-- Main Login Section -->
<div class="container login-container d-flex align-items-center">
  <div class="row w-100">
    <!-- Login Form -->
    <div class="col-lg-6 d-flex justify-content-center align-items-center">
      <div class="login-card w-75">
        <div class="text-center mb-4">
          <img src="Libs/Images/logo_crims.png" alt="Logo" width="50" />
          <h3 class="mt-3">Login</h3>
        </div>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" />
          </div>
          <div class="mb-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" />
          </div>
          <a href="#" class="forgot text-primary">Forgot password?</a>
          <div class="text-center mt-3">
            <button type="submit" class="btn-login w-80 mx-auto">Login</button>
          </div>
        </form>
        <p class="text-center mt-3 signup-link">Don't have an account? <a href="#">Sign up</a></p>
      </div>
    </div>

    <!-- Illustration Section -->
    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
      <img src="Libs/Images/log_img.png" class="illus-img" alt="Illustration" />
    </div>
  </div>
</div>

