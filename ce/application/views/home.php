<!DOCTYPE html>
<html>

<head><title>Professionals shop</title></head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap4/css/bootstrap.css">
<style>
    * {
        margin:0;
        padding: 0;
    }
    header{
        background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(<?php echo base_url();?>assets/wspace.jpg);
        height:100vh;
        background-size:cover;
        background-position:center;
    }
    body{
        font-family: monospace;
    }
    .name{
        position: absolute;
        width: 1200px;
        margin-left: 0px;
        margin-top: 0px;
        padding: 10px;
    }
    h1{
        color:white;
        text-transform: uppercase;
        font-size: 70px;
        text-align:center;
        margin-top:275px;
    }
    .button{
        margin-top:30px;
        margin-left:440px;
    }
    .btn{
        border: 1px solid white;
        padding: 10px 30px;
        color:white;
        text-decoration: none;
        margin-right: 5px;
        font-size: 13px;
        text-transform: uppercase;
        border-radius: 30px;
    }
    .btn-one{
       background-color:transparent;
        font-family:"Roboto", sans-serif;
    }
        .btn-two{
       background-color: transparent;
        font-family:"Roboto", sans-serif;
    }
    .btn:hover{
        background-color:dodgerblue;
        
    }
        

    
    
</style>
<body>
    
    <header>
    
    <div class='name '>
          <?php if ($this->session->flashdata('user_signup_failed')){?>
            <?php echo "<div class='alert alert-danger alert-dismissible fade show'> 
            <button class='close' type='button' data-dismiss='alert'>x</button>
            ".$this->session->flashdata('user_signup_failed')."
            </div>"; ?>

        <?php } ?>
          <?php if ($this->session->flashdata('user_registered')){?>
            <?php echo "<div class='alert alert-success alert-dismissible fade show'> 
            <button class='close' type='button' data-dismiss='alert'>x</button>
            ".$this->session->flashdata('user_registered')."
            </div>"; ?>

        <?php } ?>

        <a href="<?php echo base_url();?>enter/index" class="btn btn-info" style="float: right; font-size: 18px;">Login</a>
       <h1>Professionals Shop</h1> 
        
        <div class=button>
            <a href="<?php echo base_url();?>homecnt/employee " class="btn btn-one">Employee Sign up</a>
            <a href="<?php echo base_url();?>homecnt/employer" class="btn btn-two">Employer Sign up</a>
            
        </div>
        </div>
    
    </header>
    
    
    
    </body>





</html>