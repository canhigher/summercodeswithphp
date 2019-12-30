<?php
include "functions.php";


  if (isset($_GET['p_id'])) {
    $the_post_id = $_GET['p_id'];
        
    $query="SELECT * FROM posts WHERE post_id = $the_post_id";
    $select_post_by_id = mysqli_query($connection,$query);
    
    
  
  if(empty($select_post_by_id)) {
      echo 'page not found';
  } else {

while($row=mysqli_fetch_assoc($select_post_by_id)){
    $post_id=$row['post_id'];
    $post_author=$row['post_author'];
    $post_title=$row['post_title'];
    $post_category_id =$row['post_category_id'];
    $post_status=$row['post_status'];
    $post_image=$row['post_image'];
    $post_tags=$row['post_tags'];
    $post_content=$row['post_content'];
    $post_comment_count=$row['post_comment_count'];
    $post_views_count=$row['post_views_count'];
    $post_date=$row['post_date'];
    
}


  
 if (isset($_POST['update_post'])) {
 
  $post_title=$_POST['post_title']; 
  $post_author=$_POST['post_author'];
  $post_category_id=$_POST['post_category'];
  $post_status=$_POST['post_status'];
  $post_image=$_FILES['post_image']['name'];
  $post_image_temp=$_FILES['post_image']['tmp_name'];
  $post_tags=$_POST['post_tags'];
  $post_content=$_POST['post_content'];
  



if (!empty($post_image)) {
        $location = 'images/';

        if  (move_uploaded_file($post_image_temp,"images/$post_image")){
            echo 'Uploaded';
        }

     else {
        echo 'please choose a file';}
    }
   else{
    $query="SELECT * FROM posts WHERE post_id=$the_post_id";
  }
 
    $query="UPDATE posts SET 
        post_title='{$post_title}', post_author='{$post_author}', post_date = now(),post_category_id='{$post_category_id}',
        post_status='{$post_status}', post_image='{$post_image}', post_tags='{$post_tags}',
    post_content='{$post_content}' WHERE post_id ='{$post_id}'";

    $update_post=mysqli_query($connection,$query);
    confirm($update_post);

   if (isset($update_post)) {
     echo "update done.";
   }
   else{
    echo "update unsuccessfull.";
   }
}
  
?>


<form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Post Add Page</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_title">Post Title</label>  
  <div class="col-md-4">
  <input value="<?php echo $post_title;?>"name="post_title" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->



<div class="form-group">
  <label class="col-md-4 control-label" for="post_title">Post Title</label>  
  
  <select name="post_category" id="">
  <?php
        
        $query="SELECT * FROM categories";
        $select_categories=mysqli_query($connection,$query);

        while($row=mysqli_fetch_assoc($select_categories)){
        $cat_id=$row['cat_id'];
        $cat_title=$row['cat_title'];
        echo "<option value=''>{$cat_title}</option>";}
        

  ?>
   </select>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_author">Post Author</label>  
  <div class="col-md-4">
  <input value="<?php echo $post_author;?>"name="post_author" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_status">Post Status</label>  
  <div class="col-md-4">
  <input value="<?php echo $post_status;?>"name="post_status" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_tags">Post Tags</label>  
  <div class="col-md-4">
  <input value="<?php echo $post_tags;?>" name="post_tags" placeholder="" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="post_content">Post Content</label>
  <div class="col-md-4">                     
    <textarea  class="form-control" id="post_content" name="post_content">
      <?php echo $post_content;?>
    </textarea>
    
  </div>
</div>
<div class="form-group">
  <img width="400" src="../images/<?php echo $post_image; ?>">
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">File Button</label>
  <div class="col-md-4">
    <input name="post_image" class="input-file" type="file">
  </div>
</div>
<!-- File Button --> 

<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button name="update_post" class="btn btn-primary">Send</button>
  </div>
</div>
<div class="form-group">
  
</div>
</fieldset>
</form>

</fieldset>
</form>

<?php }
 }
     
     ?>