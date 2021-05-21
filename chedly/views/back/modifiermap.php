<?php  
include "../../core/mapc.php";

if (isset($_GET['id'])){
  
  

  
    $mapc=new mapc();
    $result=$mapc->recuperermap($_GET['id']);

    foreach($result as $row){



    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>SpringTime</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/s1.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
      <div id="top-navigation"><span>|</span>  </div>
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation">
      <ul>
        <li><a href="#" class="active"><span>Modifier</span></a></li>
       
      </ul>
    </div>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="#"></a> <span>&gt;</span>  </div>
    <!-- End Small Nav -->
    <!-- Message OK -->
    
    <!-- End Message OK -->
    <!-- Message Error -->
    
    <!-- End Message Error -->
    <br />
    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
         
          <!-- End Box Head -->
          <!-- Table -->
          
            <!-- Pagging -->
            
            <!-- End Pagging -->
          </div>
          <!-- Table -->
        </div>
        <!-- End Box -->
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          
          <!-- End Box Head -->
          <form action="modifiermapc.php" method="POST" class="login-html">
            <table border="0" align="center">

                <tr>
                    
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input   type="text" name="id" id="id" maxlength="50" class="tab" value="<?php echo $_GET['id']?>"  readonly ></td>
                </tr>
                <tr>
                    <td>
                        <label for="type">type:
                        </label>
                    </td>
                    <td><input type="text" name="type" id="type" maxlength="50" class="tab" value="<?php echo $_GET['type']?>"></td>
</textarea></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="nom" >nom:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nom" id="nom" class="tab" value=" <?php echo $_GET['nom']?>">
                    </td>
                </tr>
                <tr>
                    
                <div class="form-group">
                                
                                <input class="form-control"  id="image" name="image" type="file" placeholder="image"   />
                                                           </div>
                                                         
                                                             </div>
                </tr>
               
               
            </table>
            <input type="submit" value="modifier" class="button" > 
                    
                   
        </form>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <div id="sidebar">
        <!-- Box -->

        </div>
        <!-- End Box -->
      </div>
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
    <!-- Main -->
  </div>
</div>
<!-- End Container -->
<!-- Footer -->

</body>
</html>
