<!DOCTYPE html>
<html>

<head>
    <title>Login page</title>
    <meta charset="utf-8">
</head>

<style>
    @import url('https://fonts.googleis.com/css?family=Pacifico|Rock+Salt');
    html,
    body,
    section {
        height: 130%;

    }

    body {
        color: #fff;
        text-align: center;
    }

    .xop-container {
        display: flex;
    }

    div {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .xop-left {
        background: linear-gradient(rgba(0, 0, 0, 0.85), rgba(255, 255, 255, 0.10)), url(<?php echo base_url();?>assets/wspace.jpg);
        background-size: cover;
        flex: 1;
        padding: 1rem;
        transition: all .2s ease-in-out;
        box-shadow: 10px 10px grey;

    }

    .xop-right {
        background: linear-gradient(rgba(0, 1, 0, 0.85), rgba(164, 222, 102, 0.10)), url();
        background-size: cover;
        flex: 1;
        padding: 1rem;
        transition: all.2s ease-in-out;
        box-shadow: 10px 10px grey;

    }

    .xop-left:hover,
    .xop-right:hover {
        transform: scale(0.95);

    }

    .xop-left h1 {
        font-family: 'Rock Salt', cursive;
        font-size: 6rem;
    }

    .xop-right h1 {
        font-family: 'Pacifico', cursive;
        font-size: 3rem;
        color: skyblue;
    }

    .xop-button {
        border-radius: 30px;
        color: #fff;
        background-color: #fcad26;
        padding: 1.5%;
        margin: 0.2%;
        text-align: center;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all 0.3s;
        width: 150px;
    }

    .xop-button:hover {
        background-color: #fcc567;

    }

    .loginbox {
        font-size: 19px;
        color: ghostwhite;

    } 
    input[type=email],
     input[type=date],
    input[type=text],
    input[type=password],
    input[type=number] {
        width:70%;
        padding: 5px 5px;
        margin: 1px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 50px;
    }
    input[type=reset],
    input[type=submit] {
        width: 19%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 30px;
        color: white;
        background-color: deepskyblue;
        font-size: 15px;
    }

</style>


<body>
    <?php if ($this->session->flashdata('user_signup_failed')){?>
            <?php echo "<div class='alert alert-danger alert-dismissible fade show'> 
            <button class='close' type='button' data-dismiss='alert'>x</button>
            ".$this->session->flashdata('user_signup_failed')."
            </div>"; ?>

        <?php } ?>

    <section class="xop-container">

        <div class="xop-left">
            <article>
                <h1>PROFESSIONALS SHOP</h1>
            </article>
        </div>
        <div class="xop-right">

            <article>
                <h1>
                   Employee Sign Up

                </h1>
            </article>
            <br><br><br>
            <div class=loginbox>

                
                    <?php echo validation_errors();?>

                    <form action="<?php echo base_url();?>homecnt/employeedash" method="POST" enctype="multipart/form-data">
                                <p>Full name</p>
                                <input type="text" name="fullnames" id="fullnames" placeholder="Enter your fullnames" required><br>
                                <p>Date of Birth</p>
                                <input type="date" name="dob" id="dob" placeholder="Enter your Date of birth" required><br>
                                <p>Id number</p>
                                <input type="number" name="idnum" id="idnum" placeholder="Enter your id number" required><br>
                                <p>Email address</p>
                                <input type="email" name="email" id="email" placeholder="Enter your email address" required><br>
                                <p>Password</p>
                                <input type="password" name="pass" placeholder="Enter a password" required><br>
                                <p>Confirm your password</p>
                                <input type="password" name="vpass" placeholder="Re-type password" required><br>
                                <p>What type of employee are you</p>
                                <select class="form-control" name="typeofemployee" required>
                                    <option>Individual</option>
                                    <option>Organisation</option>
                                </select><br>

                                                                     
                                <p><input type="submit" value="Submit" class="btn btn-primary"></p>
                                <p><input type="reset" class="btn btn-primary"></p><br>


                </form>

            </div>
        </div>


    </section>


</body>





</html>
