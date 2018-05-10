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
      	<li><a href="indexStdt.php"><span class="glyphicon glyphicon-home"></span> HOME</a></li>
      	<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="cis.php">CIS
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
          	<li class="dropdown-header">CIS program</li>
          	<li><a href="cisStdt.php">CIS</a></li>
          	<li class="dropdown-submenu">
              <a class="dropdown-toggle" data-toggle="dropdown">Concentration</a>
              <ul class="dropdown-menu">
              	<li><a href="concentStdt/conct_csecStdt.php">CSEC</a></li>
              	<li><a href="concentStdt/networkStdt.php">Networking</a></li>
                <li><a href="concentStdt/programStdt.php">Programming</a></li>
                <li><a href="concentStdt/webStdt.php">Web Design</a></li>
                <li><a href="concentStdt/emergStdt.php">Emerging Tech</a></li>
              </ul>
            </li>  
          </ul>
        </li>
        <li><a href="csecStdt.php">CSEC</a></li>
      	<li><a href="prtfPage.php">PORTFOLIO</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logoutStdt.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
  	</div>
  </div>
</nav>