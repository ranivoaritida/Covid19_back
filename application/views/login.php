<!DOCTYPE html>  
 <html>  
 <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
	  <link href="<?php echo site_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
 </head>  
 <body>  
      <div class="container">  
           <br /><br /><br />  
           <form method="post" action="<?php echo base_url(); ?>main/login_validation">  
                <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />                
                </div>  
                <div class="form-group">  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />
                </div>  
                <div class="form-group">  
                     <input type="submit" name="insert" value="Login" class="btn btn-info" />  
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>  
                </div>  
           </form>  
      </div>  
 </body>  
 </html>  