
<?php  

    include "includes/header.php";
    ?>

<body>

    <div id="wrapper">

        <!-- Navigation -->
<?php  

    include "includes/navigation.php";
    ?>

                    <?php 
                    if ($connection)
                        {echo "Connected";}
                    else 
                        echo "Unconnected";
                    ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            welcome to the administration
                            <small>by Can Yuksel</small>
                        </h1>
                            <div class="col-xs-6">
                                <!--INSERT INTO CATEGORIES -->
                                            <?php
                                            $query="SELECT * FROM categories";
                                            $select_categories=mysqli_query($connection,$query);
                                                    if(isset($_POST['submit'])){
                                                        $cat_title=($_POST['cat_title']);
                                                        if ($cat_title=="" || empty($cat_title)) {
                                                            echo "This area cannot be empty";
                                                        }
                                                        else{
                                                            $query="INSERT INTO categories(cat_title)";
                                                            $query.= "VALUE('{$cat_title}')";}
                                                            $create_category_query=mysqli_query($connection,$query);
                                                            if(!$create_category_query){
                                                            die('QUERY NOT WORKING'.mysqli_error($connection));
                                                        
                                                    }
                                            }

                                            ?>
                                <form action="" method="post">
                                <div class="form_group">
                                    <label>Add Category</label>
                                    <input class="form-control" type="text" name="cat_title"> 
                                </div></br>

                                <div class="form_group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category"> 
                                </div>
                            </form>
                            <form action="" method="post">
                                <div class="form_group">
                                    <label>Edit Category</label>
                                      <!--EDIT PROCESS -->
                                    <?php 
                                      if (isset($_GET['edit'])) {
                                            $the_cat_id=$_GET['edit'];


                                            $query="SELECT FROM categories WHERE cat_id=$the_cat_id";
                                            $select_all_edit=mysqli_query($connection,$query);
                                            if($select_all_edit){
                                        echo "Good.";
                                        }
                                        else{
                                            echo "Bad.";

                                            
                           ?>
                        <?php }}
                       ?>

                        <?php  
                                        //UPDATE QUERY
                                        
                                        if (isset($_GET['edit']))   {
                                        $cat_id=$_GET['edit'];

                                        if (isset($_POST['update_category'])) {
                                        $the_cat_title=$_POST['cat_title'];
                                                                              

                                        $query="UPDATE categories SET cat_title='{$the_cat_title}'WHERE cat_id='{$cat_id}'";
                                        $update_query=mysqli_query($connection,$query);
                                        if (!$update_query) {
                                            die("QUERY FAILED". mysqli_error($connection));
                                        }

                                                                    }}


                        ?>




                                    <input class="form-control" type="text" name="cat_title"> 
                                </div></br>

                                <div class="form_group">
                                    <input class="btn btn-primary" type="submit" name="update_category" value="Update Category"> 
                                </div>
                            </form>
                            </div>

                            <div class="col-xs-6">

                                    <table class="table table-bordered table-hover">

                                        <thead>
                                            <tr>
                                            <th>Concerts Dates</th>
                                            <th>Places</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                            <?php 
                                    while($row=mysqli_fetch_array($select_categories)){
                                    $cat_id=$row['cat_id'];
                                    $cat_title=$row['cat_title'];
                                    echo "<tr>";
                                    echo "<td>{$cat_id}</td>";
                                    echo "<td>{$cat_title}</td>";
                                    echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
                                    echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
                                    echo "</tr>";
                                }
                            ?>
                          
                             
                                            
                                
                            <!--DELETE PROCESS -->
                            <?php 
                                    if (isset($_GET['delete'])) {
                                        $the_cat_id=$_GET['delete'];
                                  

                                        $query="DELETE FROM categories WHERE cat_id={$the_cat_id}";
                                        $delete_query=mysqli_query($connection,$query);
                                        if($delete_query){
                                        echo "Delete is success.";
                                        }
                                        else{
                                            echo "Delete unsuccessfull.";
                                            
                                        }
                                    }




                            ?>
                                                
                                            </tbody>
                                            
                                            

                                        

                                    </table>

                            </div>
                            

                        
                        <!--        <ol class="breadcrumb">
                                    <li>
                                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="active">
                                        <i class="fa fa-file"></i> Blank Page
                                    </li>
                                </ol> -->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

       <?php  

    include "includes/footer.php";
    ?>
