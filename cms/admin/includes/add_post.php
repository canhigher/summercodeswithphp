<?php 
include "functions.php";
// echo "<pre>";
 //) print_r($_FILES['image']); exit;

if (isset($_POST['create_post'])) {
 
            $post_title        = $_POST['post_title'];
            $post_author       = $_POST['post_author'];
            $post_category_id  = $_POST['post_category_id'];
            $post_status       = $_POST['post_status'];
    
            $post_image        = $_FILES['post_image']['name'];
            $post_image_temp   = $_FILES['post_image']['tmp_name'];
    
    
            $post_tags         = $_POST['post_tags'];
            $post_content      = $_POST['post_content'];
            $post_date         = date('d-m-y');
            $post_comment_count=4;

            



      move_uploaded_file($post_image_temp, "../images/$post_image" );



      $query = "INSERT INTO posts(post_category_id, post_title, post_author, post_date,post_image,post_content,post_tags,post_status)";
             
      $query .= " VALUES('{$post_category_id}','{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_status}') "; 
            
      
      $create_post_query = mysqli_query($connection, $query);  
      

      confirm($create_post_query);



      $the_post_id = mysqli_insert_id($connection);



      echo "<p class='bg-success'>Post Created.<a href='http://localhost/cms/admin/posts.php?source=add_post'>Create More Posts</a></p>";
       
            //$query="SELECT * FROM posts WHERE post_id=$the_post_id ";
            //$select_image=mysqli_query($connection,$query);
            //while ($row=mysqli_fetch_array($select_image)) {
             // $post_image=$row['post_image'];
          }

  ?>




<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Post Add Page</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_title">Post Title</label>  
  <div class="col-md-4">
  <input name="post_title" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
       <label for="category">Category</label>
       <select name="post_category" id="">
           
<?php

        $query = "SELECT * FROM categories";
        $select_categories = mysqli_query($connection,$query);
        
        while($row = mysqli_fetch_assoc($select_categories )) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
            
            
            echo "<option value=''>{$cat_title}</option>";
           
        }
?>

       </select>
      
      </div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_category_id">Post Category ID</label>  
  <div class="col-md-4">
  <input name="post_category_id" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_author">Post Author</label>  
  <div class="col-md-4">
  <input name="post_author" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_status">Post Status</label>  
  <div class="col-md-4">
  <input name="post_status"class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_tags">Post Tags</label>  
  <div class="col-md-4">
  <input name="post_tags" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_content">Post Content</label>
  <div class="col-md-4">                     
    <textarea class="form-control" name="post_content"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">File Button</label>
  <div class="col-md-4">
    <input name="post_image" class="input-file" type="file">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button name="create_post" class="btn btn-primary">Send</button>
  </div>
</div>

</fieldset>
</form>
