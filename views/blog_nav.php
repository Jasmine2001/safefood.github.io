<nav 
  class="sticky-top navbar-dark bg-secondary" 
  style="width:100%; position: absolute; z-index: 10; background-color: #d1e5eb"
>
  <div style="width: 100%">
    <div 
      align="right" 
      style="color:#f6f6f6"
    >
      <?php echo "Hello  <b>" . $_SESSION['username'] . "</b>&nbsp;&nbsp;&nbsp;" ?>
      <button 
        class="btn-outline-dark btn" 
        onclick="window.location = '/safefood/personal.php'"
      >
      <img src="/safefood/views/jasmine2.png">
      </button>
      <button 
        class="btn" 
        onclick="window.location = '/safefood/views/change-password.php'"
      >
        <b>修改密碼</b>
      </button>
      <button class="btn" onclick="
        Swal.fire({
        icon: 'warning',
        title: 'warning',
        text: 'Are you sure you want to logout?',
        showCancelButton: true,
        }).then((result) => {
          if (result.value) {
            window.location = '/safefood/index.php'
          }
        })"
      ><b>登出</b></button>
      <button 
        class="btn" 
        onclick="window.location = '/safefood/views/blog.php'"
      >
        <b>回部落格</b>
      </button>
      <button 
        class="btn" 
        onclick="window.location = '/safefood/views/write_article.php'"
      >
        <b>寫點東西</b>
      </button>
    </div>
  </div>
</nav>
<ul 
  class="nav justify-content-end" 
  style="background-color: white"
>
<header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="./img/logo2.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="http://127.0.0.1/safefood/index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">pages</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1/safefood/views/registration.php">sign up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://127.0.0.1/safefood/views/login.php">login</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </header>
  
  
</ul>