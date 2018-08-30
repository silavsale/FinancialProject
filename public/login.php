<?php require_once('../private/initialize.php');

$page_title = 'Login';

include(SHARED_PATH . '/public_header.php')
?>

<div id="content">

    <div id="main-menu">
        <h2>Main Menu</h2>
        <ul>
            <li><a href=" ">Finance</a>

            </li>
            <li><a href=" ">News</a>

            </li>
        </ul>
    </div>

</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <!-- Start form -->
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-check">
                    <!--                    <button class="btn btn-primary" type="button" name="showpassword" id="showpassword"-->
                    <!--                            value="Show Password">Show password-->
                    <!--                    </button>-->
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-success" type="button" name="register" id="register" value="Register">
                        Register
                        new account
                    </button>

                </div>


            </form>
            <?php
                echo "<br />";

                echo "<hr />";
                echo "<br />";

            ?>
            <p>For more information visit <a href="info.php" target="_blank">Info</a> page</> <br/></p><br/>

            <!-- End form -->
        </div>


    </div>
</div>
<?php

echo "<hr />";

?>

<?php include(SHARED_PATH . '/public_footer.php') ?>
