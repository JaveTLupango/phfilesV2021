
  <?php 
  $nav = '<nav class="main-header navbar navbar-expand navbar-white navbar-light"> <ul class="navbar-nav ml-auto">';
  if(isset($_SESSION['identity']) != null)
  {
    $nav .= '<li class="nav-item d-none d-sm-inline-block">'.
            '<a href="" class="nav-link "><i class="fa fa-cog" aria-hidden="true"></i> Settings </a>'.
          '</li>'.
          '<li class="nav-item d-none d-sm-inline-block">'.
            '<a href="" class="nav-link ">|</a>'.
          '</li>'.
          '<li class="nav-item d-none d-sm-inline-block">'.
            '<a href="" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Profile </a>'.
          '</li>'.
          '<li class="nav-item d-none d-sm-inline-block">'.
            '<a href="" class="nav-link ">|</a>'.
          '</li>'.
          '<li class="nav-item d-none d-sm-inline-block">'.
            '<a href="" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Logout </a>'.
          '</li>';
  }else{
    $nav .= '<li class="nav-item d-none d-sm-inline-block">'.
              '<a href="" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Login </a>'.
            '</li>'.
            '<li class="nav-item d-none d-sm-inline-block">'.
              '<a href="" class="nav-link ">|</a>'.
            '</li>'.
            '<li class="nav-item d-none d-sm-inline-block">'.
              '<a href="" class="nav-link "><i class="fa fa-user" aria-hidden="true"></i> Register </a>'.
            '</li>';
  }
  $nav .= '</ul></nav>';

  echo $nav;