<!DOCTYPE html>
<html>
<head>
<title>Kate Stannard's Website</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/main.css" />
<link rel="stylesheet" href="css/form.css" />
</head>


<body>
  
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  
  <div id="home_header">
    <img src="images/katebanner2.jpg" alt="floral banner" style="width: 100%;"> 
    
   
    

</div>
  
 

  <nav>
    
    <ul class="topnav" id="myTopnav">
      <a href="index.php">Kate Stannard</a>
      <li><a href="index.php" class="selected">Home</a></li>
      <li><a href="current.php">Current Work</a></li>
      <li><a href="bio.php">Bio</a></li>
      <li><a href="contactkate.php">Contact</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
  

  
 



  

</header>
        
<!-- START LEFT COL -->
<section>
 
 

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
<img src="images/kate.jpg" class="desktop" alt="Kate with her pets" />
 <img src="images/kate.jpg" class="phone" alt="Kate with her pets" />
 <img src="images/kate.jpg" class="tablet" alt="Kate with her pets" />
   
 <p>"Our task is to say a holy yes to the real things of our life as they exist – the real truth of who we are: several pounds overweight, the gray, cold street outside, the Christmas tinsel in the showcase, the Jewish writer in the orange booth across from her blond friend who has black children. We must become writers who accept things as they are, come to love the details, and step forward with a yes on our lips so there can be no more noes in the world, noes that invalidate life and stop these details from continuing.”
  <em>― Natalie Goldberg, Writing Down the Bones: Freeing the Writer Within</em> </p>
  <a href ="https://www.facebook.com/kate.stannard.5011"><i class="fa fa-facebook"></i></a> 
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 
   
      
    
    
 
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<footer>
  <p><small>&copy; 2021 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Kate Stannard</a>, All Rights Reserved ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>

<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</body>
</html>

