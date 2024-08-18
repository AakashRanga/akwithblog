<?php include('header.php'); ?>
<style>
    .notepad {
        font-family: Arial, sans-serif;
        margin: 20px;
        line-height: 2.3;
        margin-left: 20px;
    }
</style>
<?php
$code = <<<'CODE'
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form Using Glass Effect</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Open Sans", sans-serif;
    }

    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      width: 100%;
      padding: 0;
      margin: 0;
      position: relative;
      background: url("https://images.news18.com/ibnlive/uploads/2022/12/yamaha-rx-100-1-16721329214x3.jpg") no-repeat center center;
      background-size: cover;
    }

    .wrapper {
      width: 400px;
      border-radius: 8px;
      padding: 30px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.5);
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      background: rgba(0, 0, 0, 0.5); /* Add a slight background color to make the text more readable */
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 20px;
      color: #fff;
    }

    .input-field {
      position: relative;
      border-bottom: 2px solid #ccc;
      margin: 15px 0;
    }

    .input-field label {
      position: absolute;
      top: 50%;
      left: 0;
      transform: translateY(-50%);
      color: #fff;
      font-size: 16px;
      pointer-events: none;
      transition: 0.15s ease;
    }

    .input-field input {
      width: 100%;
      height: 40px;
      background: transparent;
      border: none;
      outline: none;
      font-size: 16px;
      color: #fff;
    }

    .input-field input:focus~label,
    .input-field input:valid~label {
      font-size: 0.8rem;
      top: 10px;
      transform: translateY(-120%);
    }

    .forget {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 25px 0 35px 0;
      color: #fff;
    }

    #remember {
      accent-color: #fff;
    }

    .forget label {
      display: flex;
      align-items: center;
    }

    .forget label p {
      margin-left: 8px;
    }

    .wrapper a {
      color: #efefef;
      text-decoration: none;
    }

    .wrapper a:hover {
      text-decoration: underline;
    }

    button {
      background: #fff;
      color: #000;
      font-weight: 600;
      border: none;
      padding: 12px 20px;
      cursor: pointer;
      border-radius: 3px;
      font-size: 16px;
      border: 2px solid transparent;
      transition: 0.3s ease;
      width: 100%;
    }

    button:hover {
      color: #fff;
      border-color: #fff;
      background: rgba(255, 255, 255, 0.15);
    }

    .register {
      text-align: center;
      margin-top: 30px;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Login</h2>
      <div class="input-field">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <button type="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="#">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>

CODE;
?>
<p style="margin-top:100px;"></p>

<div class="container ">
    <div class="row gy-5">
        <div class="col-md-8 order-1 order-md-1">
            <div class="codecontent">
                <h1>Create a Login Form with Glass Effect using HTML and CSS</h1>
                <div class="col-md-12">
                    <img src="images/access.jpg" class="img-fluid" alt="">
                </div>
                <h2>Steps to Create a Login Form with Glass Effect</h2>
                <p>Follow these steps to design a login form with a modern glass effect:</p>
                <ul class="notepad">
                    <li>Create a new folder and name it <strong>glass-login</strong>.</li>
                    <li>Inside the folder, create two files: <strong>index.html</strong> and <strong>style.css</strong>.
                    </li>

                    <li>In your index.html file, add the essential HTML markup and Styles to structure your Login page.
                    </li>
                </ul>
                <div class="code-container">
                    <button class="copy-button" onclick="copyCode()">Copy</button>
                    <pre id="code-block"><code><?php echo htmlspecialchars($code); ?></code></pre>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4 order-2 order-md-2 card-view">
            <ul class="nav nav-tabs title-nav mb-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="background-color:black !important;"
                        href="#">Technology</a>
                </li>
            </ul>

            <div class="card mb-3 removecardborder" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body pb-zero">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs title-nav mb-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" style="background-color:black !important;"
                        href="#">Research</a>
                </li>
            </ul>

            <div class="card mb-3 removecardborder" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body pb-zero">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-4 col-md-4 p-0">
                        <div class="card-body px-0 pb-0">
                            <img src="images/access.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                    </div>
                    <div class="col-8 col-md-8 p-0">
                        <div class="card-body">
                            <h5 class="card-title small-font">30+ Free Login & Registration Form Templates in HTML & CSS
                            </h5>
                            <p class="card-text"><small class="text-muted">August 04, 2024</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
<script src="script/script.js"></script>
<script>
    function copyCode() {
        const codeBlock = document.getElementById('code-block');
        const range = document.createRange();
        range.selectNode(codeBlock);
        window.getSelection().removeAllRanges(); // Clear any existing selections
        window.getSelection().addRange(range); // Select the code block
        document.execCommand('copy');
        window.getSelection().removeAllRanges(); // Deselect the code block
        alert('Code copied to clipboard!');
    }
    window.addEventListener('scroll', function () {
        let navbar = document.querySelector('.navbar');

        if (window.scrollY > 50) {
            navbar.classList.add('navbar-small');
            navbar.classList.remove('navbar-large');
        } else {
            navbar.classList.add('navbar-large');
            navbar.classList.remove('navbar-small');
        }
    });

    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((block) => {
            hljs.highlightBlock(block);
        });
    });
</script>