<?php

/*        function insert_categories(){
             global $connection;
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
    }

    ?>*/


function confirm($results){
    global $connection;
    if (!$results) {
        die("QUERY FAILED" .mysqli_error($connection));
    }
}

