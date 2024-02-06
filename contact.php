
<?php
 include('./header.php');
?>

 <!-- contact section -->
 <div class="main" id="contact">
                <div class="contact-container">
                    
                    <form action="formSubmit.php" method="post">


                    <!--// <?php 
                       // if(isset($_SESSION['sent'])){
                        //    echo $_SESSION['sent'];
                           // unset($_SESSION['sent']);
                        //} 
                        
                       // if(isset($_SESSION['fail'])){
                       //     echo $_SESSION['fail'];
                       //     unset($_SESSION['fail']);
                       // }
                        ?> -->

                        <fieldset>
                        <legend>Message or Comment</legend>
                        <p class="welcome">Thank you for viewing my portfolio. Let's Connect.</p>
    
                        <div class="order-label">Email</div>
                        <input type="email" name="email" placeholder="E.g. kip2023@gmail.com" class="input-responsive" required>
    
                        <div class="order-label">Message</div>
                        <textarea name="message" rows="3" placeholder="Leave your Message or comment here" class="input-responsive" required></textarea>
    
                        <input class="btn" type="submit" name="submit" value="Send" class="btn btn-primary">
                        
                    </fieldset>
                    </form>
                   
                </div>

            </div>

<?php
include('./footer.php');
?>

