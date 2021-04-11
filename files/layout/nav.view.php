


  <?php 
  $nav = '  <nav class="main-header navbar navbar-expand navbar-white navbar-light"> 
  <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     </ul>
  <ul class="navbar-nav ml-auto">

  ';

  if(isset($_SESSION['identity']) != null)
  {
    $nav .= '<a href="profile" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Profile </a>'.
          '</li>'.
          '<li class="nav-item">'.
            '<a href="" class="nav-link ">|</a>'.
          '</li>'.
          '<li class="nav-item ">'.
            '<a href="logout" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Logout </a>'.
          '</li>';
  }else{
    $nav .= ' <li class="nav-item">'.
              '<a href="login" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Login </a>'.
            '</li>'.
            '<li class="nav-item">'.
              '<a href="" class="nav-link ">|</a>'.
            '</li>'.
            '<li class="nav-item">'.
              '<a href="register" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Register </a>'.
            '</li>';
  }
  $nav .= '</ul>
  </nav>';

  echo $nav;

