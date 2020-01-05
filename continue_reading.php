

 <?php
    
    $active='Blog';
    include("includes/header.php");

?>

  <div class="container_full">
    <div class="fix container">
      <div class="img">
        <img class="imgs" src="images/blog_templet1.png" alt="">
      </div>
    </div>
  </div>

  <div class="container_full content_wrapper_bg">
    <div class="fix container">
        <div class="content_wrapper">
          <section class="left_content">
              <article class="single_post_wrapper">
                
                
                    <div class="icon-set-date">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="far fa-star"></i>
                    </div>
                    <div class="heading">
                      <h2>DUIS AUTE IRURE DOLOR IN HENDERIT IN VOLUPTATE.</h2>
                    </div>
                    
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur

                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur

                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur

                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipop ex ea commo doconsequat, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
               
              </article>
              <div class="like-commnet-share">
                <div class="like">
                  <p>5 like</p>
                </div>
                <div class="commnt">
                  <p>2 Comment</p>
                </div>
                <div class="share">
                  <p>2 share</p>
                </div>


                
              </div>
              <button class="btn"><i class="fa fa-heart"></i></button>
               <button class="btn" onclick="document.getElementById('id01').style.display='block'"><i class="fa fa-comment"></i></button>

              <button class="btn"><i class="fas fa-share"></i></button>  
          </section>

          <div id="sidebar">
              <aside class="single_sidebar">
                <h2>Suggested</h2>
                <p>DUIS AUTE IRURE DOLOR IN HENDERIT IN VOLUPTATE.</p>
                <p>DUIS AUTE IRURE DOLOR IN HENDERIT IN VOLUPTATE.</p>
                <p>DUIS AUTE IRURE DOLOR IN HENDERIT IN VOLUPTATE.</p>
                <p>DUIS AUTE IRURE DOLOR IN HENDERIT IN VOLUPTATE.</p>
                
                
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

  <div class="container_full table_bg">
    <div class="fix container">
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="contains">
      <h2>Leave A Comment</h2>
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
          <textarea name="message" id="addres" required="required"></textarea>
          <br>
        </label>
        <br>
        
      <button type="submit" class="btton">Send</button>
      <label>
       
    </div>

    
  </form>
</div>
    </div>
  </div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<a class="gototop" href="#jump">
  <i class="fas fa-arrow-up"></i>
</a>


 <?php
    
    include("includes/footer.php");

?>
