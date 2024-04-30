<style>
  .logo {
    width: 50%;
    height: 50%;
    border-radius: 25%;
    border: 1px solid white;
    background-color: white;
    object-fit: cover;
    object-position: center;
  }

  .nav-link.login {
    color: #ffffff;
    /* White text */
    background-color: #007bff;
    /* Blue background */
    padding: 8px 16px;
    border-radius: 20px;
    font-weight: bold;
  }

  .nav-link.login:hover {
    background-color: #0056b3;
    /* Darker blue on hover */
    text-decoration: none;
    /* Removes underline on hover */
  }
</style>
<div class="p-1">
  <div class="container-flex p-1 align-items-center mb-3 mb-md-0">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-2 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4"><img src="./assets/img/74px-DOST_seal.svg.png" alt="DOST-logo" class="me-3 ms-3 mt-3 mb-3 logo"></span>
        <h1>DOST-SETUP</h1>
      </a>
      <ul class="nav nav-pills align-items-center">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link login">Login</a></li>
      </ul>
    </header>
  </div>
</div>