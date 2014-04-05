<!-- Author: Khilan -->
<!-- File: businessscreen.php -->
<!-- Business Screen Page-->
<!-- PHP File-->
<html>
<head>
<!-- Title of the Website -->
<title>Business Screen</title>

<!-- Link to CSS reference -->
<link rel="stylesheet" type="text/css" href="css/businessscreen.css"/>
<link rel="shortcut icon" type="image/png" href="kp.png">
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> 


<!-- First Hide Button Contact property -->
<script>
$(function(){
	$('#desc').hide('hidden');
$('.hide').click(function() {
    $('#desc').hide("slow");
});
});
</script>


<!-- Second Hide Button Contact property -->
<script>
$(function(){
	$('#desc1').hide('hidden1');
$('.hide1').click(function() {
    $('#desc1').hide("slow");
});
});
</script>

<!-- Third Hide Button Contact property -->
<script>
$(function(){
	$('#desc2').hide('hidden2');
$('.hide2').click(function() {
    $('#desc2').hide("slow");
});
});
</script> 

<!-- Forth Hide Button Contact property -->
<script>
$(function(){
	$('#desc3').hide('hidden3');
$('.hide3').click(function() {
    $('#desc3').hide("slow");
});
});
</script>

</head>

<!-- Body -->
<body>

	     
<!-- Container --> 
<div id="Container">

		<!-- Header -->
		<div id="header">
             <div>
                <img align="left" src="image.png" name="pic"  id="pic"> <h1 id="Welcome">Welcome To My WebPage.</h1>
             </div>
     
      <!-- Menu Navigation -->
             <ul id="menu">
                 <li><a href="home.html">Home</a></li>
                 <li><a href="aboutme.html">About Me </a></li>        
                 <li><a href="project.html">Project</a></li>
                 <li><a href="service.html">Service</a></li>
                 <li><a href="https://github.com/Khilan/Khilan" target="_blank">GitHub</a></li>
                 <li><a href="contactme.html">Contact Me</a></li>
                 <li><a href="businesscontact.php" class="businesscontact">Business Contact</a></li>
              </ul>
        </div>
        
         <!-- Contain Area -->
        <div id="contain-area">
                
                <div>
               		 <h1 id="contact"> Contacts </h1>
                     <a href="logout.php">
                     	<input type="button" value="Logout" id="logout" >
                     </a>
                     
                </div>
                
                 <!-- First Contact -->
                 <div id="c1">
                     <div>
                     	<h1 id="bill">  1. Bill Gates 
                        </h1>
                     <!-- First contact Buttons -->
                     <form method="post" action="" >
                         <input type="submit" value="Show Detail" id="show" class="show" name="show" >
                         <input type="submit" value="Hide Detail" id="hide" class="hide" >     
                     </form>
                     <div>
                 
					 <?php
                                session_start(); // Session start
                                
                                if(isset($_SESSION["username"]))
                                {
									$dsn= 'mysql:host=localhost;dbname=login';
									$username = 'test';
									$password= '123';
                                try{
                                	$db= new PDO($dsn, $username, $password);
                                }
                                catch(PDOException $exception){
                                    echo "failed to connect";
                                } 
                         
                              if(isset($_POST['show']))
                                {  
                                $query="select * from contact where id='2'";  // Query for extracting data from the database
                                $result=$db->query($query);
                                $row = $result->fetch();
                                echo $row["name"];  echo("\n<br/>"); 
                                echo $row["address"];  echo("\n<br/>"); 
                                echo $row["number"]; echo("\n<br/>"); 
                                echo $row["company"]; echo("\n<br/>"); 
                                }
                    ?> 
                     </div>
                   </div>      
        	     </div>
                
                
                <!-- Second Contact -->
                 <div id="c2">
                     <div>
                         <h1 id="darren">  2. Darren Entwistle
                         </h1>
                         <!-- Second contact Buttons -->
                         <form method="post" action="" >
                             <input type="submit" value="Show Detail" id="show1" class="show1" name="show1" >
                             <input type="submit" value="Hide Detail" id="hide1" class="hide1" >     
                         </form>
                     <div>
                     
                     <?php
                                $dsn= 'mysql:host=localhost;dbname=login';
                                $username = 'test';
                                $password= '123';
                                try{
                                	$db= new PDO($dsn, $username, $password);
                                }
                                catch(PDOException $exception){
                                    echo "failed to connect";
                                } 
                    
                              if(isset($_POST['show1']))
                                {
									 $query="select * from contact where id='3'";
									 $result=$db->query($query);
									 $row = $result->fetch();
									 echo $row["name"];  echo("\n<br/>"); 
									 echo $row["address"];  echo("\n<br/>"); 
									 echo $row["number"]; echo("\n<br/>"); 
									 echo $row["company"]; echo("\n<br/>"); 
                                }
                       ?> 
                       </div>
                    </div>      
        	     </div>
                
                 
                 <!-- Third Contact -->
                 <div id="c3">
                     <div>
                         <h1 id="mukesh">  3. Mukesh Ambani 
                         </h1>
                         <!-- Third contact Buttons -->
                         <form method="post" action="" >
                             <input type="submit" value="Show Detail" id="show2" class="show2" name="show2" >
                             <input type="submit" value="Hide Detail" id="hide2" class="hide2" >     
                         </form>
                     <div>
                     
                     <?php
                                $dsn= 'mysql:host=localhost;dbname=login';
                                $username = 'test';
                                $password= '123';
                                try{
                                	$db= new PDO($dsn, $username, $password);
                                }
                                catch(PDOException $exception){
                                    echo "failed to connect";
                                } 
                    
                                 
                              if(isset($_POST['show2']))
                                { 
									$query="select * from contact where id='1'";
									$result=$db->query($query);
									$row = $result->fetch();
									echo $row["name"];  echo("\n<br/>"); 
									echo $row["address"];  echo("\n<br/>"); 
									echo $row["number"]; echo("\n<br/>"); 
									echo $row["company"]; echo("\n<br/>"); 
                                 }
                       ?>
                      </div> 
                    </div>    
                 </div>
                 
                 
                 <!-- Forth Contact -->
                 <div id="c4">
                     <div>
                         <h1 id="tim">  4. Tim Cook 
                         </h1>
                         <!-- Forth contact Buttons -->
                         <form method="post" action="" >
                             <input type="submit" value="Show Detail" id="show3" class="show3" name="show3" >
                             <input type="submit" value="Hide Detail" id="hide3" class="hide3" name="hide3">     
                         </form>
                 <div>
                 
                 <?php
							$dsn= 'mysql:host=localhost;dbname=login';
							$username = 'test';
							$password= '123';
							try{
								$db= new PDO($dsn, $username, $password);
							}
							catch(PDOException $exception){
								echo "failed to connect";
							} 
				
                             
                          if(isset($_POST['show3']))
                            {
								$query="select * from contact where id='4'";
								$result=$db->query($query);
								$row = $result->fetch();
								echo $row["name"];  echo("\n<br/>"); 
								echo $row["address"];  echo("\n<br/>"); 
								echo $row["number"]; echo("\n<br/>"); 
								echo $row["company"]; echo("\n<br/>"); 	
							}
							}
							else
							{
								header('location:businesscontact.php');
							}
				    ?> 
                 
                   </div>
                </div>     
        	 </div>
         </div>     
         
         <!-- Footer -->
        <div id="footer">
         	<p align="center"> Copyright &copy 2014;     My First Webpage  </p>
        </div>


</div>

</body>

</html>

