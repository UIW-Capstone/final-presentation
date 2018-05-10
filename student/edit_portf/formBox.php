<form id="portf" class="stdt_form" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>#portf" method="POST">
  <div class="form-group stdt_fmContainer">
  <div class="row">
    <div class="col-xs-12 col-sm-4">
        <label for="fname">* First Name</label><span class="error"> <?php echo $fnameErr; ?></span> 
          <input class="form-control" type="text" id="fname" name="fname" placeholder="First Name" required>
              
        <label for="lname">* Last Name</label><span class="error"> <?php echo $lnameErr; ?></span> 	
          <input class="form-control" type="text" id="lname" name="lname" placeholder="Last Name" required>
          		
        <label for="idnum">* PID</label><span class="error"> <?php echo $idnumErr; ?></span> 
          <input class="form-control" type="text" id="idnum" name="idnum" placeholder="ID Number" required>			
          <br>
     </div>
     
     <div class="col-xs-12 col-sm-4">   
        <label for="sel_major">* Select Major:</label>
          <select class="form-control" name="sel_major" id="sel_major" required>
          	<option selected></option>
            <option value="cis">CIS</option>
            <option value="csec">CSEC</option>
          </select>
        <label for="sel_conct">* Select Concentration:</label>
          <select class="form-control" name="sel_conct" id="sel_conct" required>
            <option selected></option>
            <option value="networking">Networking</option>
            <option value="cyber security">Cyber Security</option>
            <option value="web development">Web Development</option>
            <option value="programming">Programming</option>
            <option value="emerging tech">Emerging Tech</option>
            <option value="undecided">Undecided</option>
          </select>
        <label for="sel_grdlvl">* Grade Level:</label>
          <select class="form-control" name="sel_grdlvl" id="sel_grdlvl" required>
            <option></option>
            <option value="freshman">Freshman</option>
            <option value="sophmore">Sophmore</option>
            <option value="junior">Junior</option>
            <option value="senior">Senior</option>
          </select>
    </div>
    
    <div class="col-xs-6 col-sm-4">
        <label for="comment">List any specific skill sets below:</label><span class="error"> <?php echo $commentErr; ?></span> 
        	<textarea data-toggle="tooltip" title="Max 200 characters only letters and numbers. Special characters -,. allowed" class="form-control" name="comment" id="comment" placeholder="e.g. Kali Linux, PHP, C++, Basket Weaving" rows="2"></textarea>
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
        
        <div class="custom-file">
        <label class="form-control-file" for="image">Profile Picture</label>
          <input type="file" class="custom-file-input" name="image" id="image">
        </div>
        
       <!--  <div class="custom-file">
        <label class="form-control-file" for="docFile">Upload project file</label>
          <input type="file" class="custom-file-input" id="docFile" />
        </div> -->
    </div>
  </div>
  
    <div class="row">
      <h5 class="center">CIS / CSEC core courses</h5>
      <div class="col-xs-12 col-sm-4">
      	<div class="checkbox form-check mb-2">
          <label><input type="checkbox" value="1301">1301 Computer Information Systems</label>
        </div>
        <div class="checkbox form-check mb-2">
          <label><input type="checkbox" value="2328hardware">2328 Hardware and Systems Software</label>
        </div>  
        <div class="checkbox">
          <label><input type="checkbox" value="2330prog">2330 Programming I</label>
        </div>
        <div class="checkbox form-check mb-2">
          <label><input type="checkbox" value="2335network">2335 Network+</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="2340win">2340 Windows OS</label>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-4">
      	<div class="checkbox">
          <label><input type="checkbox" value="2350uni">2350 UNIX/Linux OS</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="2368web">Website Development I</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="3319intern">Internship in CIS</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="3362analysisn">3362 Systems Analysis and Desig</label>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-4">
      	 <div class="checkbox">
          <label><input type="checkbox" value="3367networks/tele">3367 Networks and Telecomm</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4190seminar">190 Seminar in CIS</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4310management">4310 Management of Technology</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4390capstone">4390 CIS CapstoneS</label>
        </div>
      </div>  
     </div>
     
    <div class="row">   
      <div class="col-xs-12 col-sm-4"> 
      <h5>Networking</h5>
      	<div class="checkbox">
          <label><input type="checkbox" value="3325linuxnetworking">3325 Linux Networking</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="3340client-server">3340 Client-SErver Networking</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4340compsystemssecurity">4340 Computer Systems Security</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4355cloud">4355 Cloud Computing</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4370compnetworksecurity">4370 Computer Network Security</label>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-4">
      <h5>Programming</h5>
        <div class="checkbox">
          <label><input type="checkbox" value="3330programmingII">3330 Programming II</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="3360computerscience">3360 Computer Science</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4330object">4330 Object Oriented Programming</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4340compsystemssecurity">4340 Computer Systems Security</label>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-4">
      <h5>CSEC</h5>
        <div class="checkbox">
          <label><input type="checkbox" value="3340client-server">3340 Client-Server Networking</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4340compsystemssecurity">4340 Computer Systems Security</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4355cloud">4355 Cloud Computing</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4370compnetworksecurity">4370 Computer Network Security</label>
        </div>
      </div>
    </div>  
    
    <div class="row">
      <div class="col-xs-12 col-sm-4">
      <h5>Web</h5>
        <div class="checkbox">
          <label><input type="checkbox" value="3310database">3310 Database Systems Management</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="3365webII">3365 Development II</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4340compsystemssecurity">4340 Windows Systems Security</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4375dynamic">4375 Dynamic Websites</label>
        </div>
      </div>
      
      <div class="col-xs-12 col-sm-4">  
      <h5>Emerging Tech</h5>
        	<div class="checkbox">
          <label><input type="checkbox" value="3380emerging">3380 Emerging Technologies</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4340compsystemssecurity">4340 Computer Systems Security</label>
        </div>
        <div class="checkbox">
          <label><input type="checkbox" value="4380virtual">4380 Virtual Environments</label>
        </div>
      </div>
    </div>
   <input type="submit" value="Submit" name="submit" id="submit" class="btn btn-default" style="margin:0 30px 0 0;">
	<a href="indexStdt.php" style="color:red">Cancel</a>
	
	<a href="prtfPage.php" class="btn btn-primary active pull-right" role="button" aria-pressed="true" style="background:red">Preview Portfolio</a>

    <?php require('portfSubmit.php') ?>
	
  </div> <!-- container closing div -->
</form>
