    <center>
    	 <?php if ($this->session->flashdata('login_failed')){?>
            <?php echo "<div class='alert alert-danger alert-dismissible fade show'> 
            <button class='close' type='button' data-dismiss='alert'>x</button>
            ".$this->session->flashdata('login_failed')."
            </div>"; ?>

        <?php } ?>
        
<div id="sform">
        <h2>Login</h2>
        <div id="uform">
    <?php echo form_open('enter/login');; ?>
     
  
        Email Address :<br> <input type="text" name="mail" placeholder="Enter your email address" class="form-control"  required autofocus><br>        
        Password :<br> <input type="password" name="pass" placeholder="Enter your password" class="form-control" required ><br><br>
        
        
        <input type="submit" style="" class="btn btn-info btn-block" value="Login" ><br><br>


    </form>
</div>
</div>
</center>
</body>
</html>
