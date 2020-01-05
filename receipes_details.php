<?php
    
    $active='Receipes';
    include("includes/header.php");

?>

 <div class="container_full">
    <div class="fix container">
      <div class="img">
        <img src="images/rep_header.jpg" alt="">
      </div> 
    </div>
  </div>

<div class="container_full">
    <div class="fix container">
      <div class="allcategories">
        <form action="">

        <select name="" id="categories">
          <option value="categories">Select Category</option>
          <option value="category 1">Breakfast</option>
          <option value="category 2">Lunch</option>
          <option value="category 2">Dinner</option>
          <option value="category 2">Snacks</option>
          <option value="category 2">fastfood</option>
        </select>

        <select name="" id="categories">
          <option value="categories">Select SubCategory</option>
          <option value="category 1">Waffle</option>
          <option value="category 2">Pancake</option>
          <option value="category 2">Fruit Salad</option>
          <option value="category 2">Sandwich</option>
          <option value="category 2">Fride Rice</option>
          <option value="category 2">Meat</option>
          <option value="category 2">Taco</option>
          <option value="category 2">Pizza</option>
          <option value="category 2">Burger</option>
          <option value="category 2">Brown Pack</option>
          <option value="category 2">Buiscuits</option>
        </select>
          
          <a href="#"><input type="button" value="Search" class="btnnn"></a>
      </form>
      </div>
      
    </div>
  </div>

  <div class="container_full">
    <div class="fix container">
      <div class="img">
        <img src="images/receipes/waffle.jpg" alt="">
      </div>
    </div>
  </div>

  <div class="container_full content_wrapper_bg">
    <div class="fix container">
        <div class="content_wrapper">
          <section class="left_content">
              <article class="single_post_wrapper">
                <h5>02-05-2019</h5>
                
                    <div class="icon-set-date">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="heading">
                      <h2>Waffle With Fruit</h2>
                    </div>
                    
                <p><strong>1.</strong> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>

                <p><strong>2.</strong> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>

                <p><strong>3.</strong> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>

                <p><strong>4.</strong> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
               
              </article>

                   
          </section>

          <div id="sidebar">
              <aside class="single_sidebar">
                <h2>Ingredients</h2>
                <p>4 Tbsp(57gm) Butter</p>
                <p>2 Large Eggs</p>
                <p>2 Yogurt containers suger</p>
                <p>1 Vanila (170gm)</p>
                <p>2 Container white flour</p>
                <p>1.5 yogurt Milk</p>
                <p>1/4 Tbsp Cinnamon</p>
                <p>1 Cup Freash Blueberries</p>
                
              </aside>
            
          </div>
        </div>
    </div>
  </div>

<div class="container_full comnt">
    <div class="fix container">
      <div class="comment">
        <div class="name">Name</div>
        <div class="email">name@gmail.com</div>
        <div class="coment">Comment</div>
      </div>
    </div>
  </div>

  <div class="container_full table_bgs">
    <div class="fix container">
    <div class="booktable">
      <form action="" method="">
        <h1>Leave A Comment</h1>
        <label for="">
          <p class="tableform">Name</p>
          <input type="text" name="name" required="required">
        </label>
        <label for="">
          <p class="tableform">Email</p>
          <input type="email" name="email" required="required">
          <br>
        </label>
      
        <label for="">
          <p class="tableform">Write Your Comment</p>
          <br>
          <textarea name="message" id="addrs" required="required"></textarea>
          <br>
        </label>
        <br>
        <input type="submit" name="post" value="Send">
      </form>
      </div>
    </div>
  </div>
<?php
    
    $active='Receipes';
    include("includes/footer.php");

?>
<a class="gototop" href="#jump">
  <i class="fas fa-arrow-up"></i>
</a>
