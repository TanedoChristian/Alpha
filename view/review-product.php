<?php



include '../templates/header.php';



?>



    

        <section onmouseover="hidedropdown()">
            <?php echo" <p> $title </p>" ?>
            <div class="product-review-container">
            
            


            <?php
         
            ECHO <<<HERE
     
            <div class="product-image-review">
            <div class=sub-img>
            
            </div>
                <img src="../public/img/product/$productImage" alt="">
            </div>
            <div class="product-title-container">
                <div>
                <h1> $product </h1>
                <h3 class=""> PHP $productPrice .00</h3>
                </div>
                <div class="buy-container">
                <span>
    
                <a href="http://localhost/Alpha/scripts/process-add.php?add-to-cart=$product" disabled> 
              
                <i class="material-icons md-48 red">
                    shopping_cart
                </i>
                </a>
                </span>
                
                <button class="buy-btn">Buy Now</button>
                </div>
            </div>

            HERE;

            ?>
            </div>
           
        </section>
        
        <section class="commentS">
            
            <div class="product-review-comment flex">
                <div>
                <h1 class="Bebas"> Product Ratings </h1>
                <h3> Comment </h3>
                
                <?php
                    
                    if(isset($_SESSION['username'])) {

                        ECHO <<<HERE

                    

                        <div class="form-comment-container">

                

                        <form action="" method="POST" class="form-comment">
                                
                        <input type="text" name="comment" placeholder="Add Comment">
                        <input type="submit" value="Add comment" name="submit" style="background-color: #e52b1b;">

                        </form>
                        </div>

                        HERE;

                 }

        

    ?>

                </div>  
                <div class="comment-section">
                <?php
                    
                    foreach($result as $r){
                        ECHO <<<HERE
                            
                            <div class="comment-container">
                            <span><i class="material-icons md-48 user-profile red">
                            account_circle
                            </i></span>
                            <p class="Bebas">$r[username] </p>
                            <p class="comment"> $r[date] </p>
                            <p class="comment"> $r[comment] </p>
                            
                     
                            </div>
                            
                        HERE;
                    }
                
                ?>
                     </div>
            </div>
            </section>

        
    
</body>
</html>