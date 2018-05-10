<nav class="navbar navbar-default">
  <div class="container-fluid">
  	<!-- ------------------- Mobile Navbar ------------------- -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <!-- ------------------- Desktop Nav bar ------------------ -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      	<li><a href="indexFac.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
      	<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">CIS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li class="dropdown-header">CIS program</li>
          	<li><a href="cisFac.php">CIS</a></li>
          	<li class="dropdown-submenu">
              <a class="dropdown-toggle" data-toggle="dropdown">Concentration</a>
              <ul class="dropdown-menu">
              	<li><a href="concentFac/conct_csecFac.php">CSEC</a></li>
              	<li><a href="concentFac/networkFac.php">Networking</a></li>
                <li><a href="concentFac/programFac.php">Programming</a></li>
                <li><a href="concentFac/webFac.php">Web Design</a></li>
                <li><a href="concentFac/emergFac.php">Emerging Tech</a></li>
              </ul>
            </li>  
          </ul>
        </li>
        <li><a href="csecFac.php">CSEC</a></li>
      	<li><a href="portfolios.php">PORTFOLIO'S</a></li>
      	<li><a href="createU_fac.php"><span class="glyphicon glyphicon-user"></span> Create User</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logoutFac.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
  	</div>
  </div>
</nav>