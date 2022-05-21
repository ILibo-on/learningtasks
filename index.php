<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : ''; 
?>
<! DOCTYPE html>
<html>
     <head>
          <title>My Page</title>
           <style>
           <?php include "stylesheet.css" ?>
           </style>
    </head>
    <body>
      <p>Please fill up what is asked before opening the website.</p>

        
    <script src="script.js">
     
     </script>
         <div id="wrapper">
           <div id="header">
               <h1>CASE STUDY:

WEB DESIGNER PORTFOLIO </h1>
               <div id="navigation">
     
    <ul>
        <li><a href="index.php">Home</a></li>
         <li><a href="LT2/index.html" target="_blank">Learning Task 2.1</a></li>
        <li><a href="LT4/index.html" target="_blank">Learning Task 4.1</a></li>
         <li><a href="LT3/index.html" target="_blank">Learning Task 3.1</a></li>
         <li><a href="LT5/index.html" target="_blank">Learning Task 5.1</a></li>
        <li><a href="Midterm/index.html" target="_blank">Midterm</a></li>
        </ul>
        <?php
           switch($page) {
             
           }
        ?>
                    </div>
            </div>
               <div id="content">
                   <div id="content wrapper">
                       <div id="about - text">
                       </div>
                       
                   </div>
               </div>
               <div id="footer">
                   
                
               </div>
            </div>
    </body>
</html>
