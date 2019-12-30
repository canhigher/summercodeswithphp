     
<?php
    if(isset($_GET['source']) && $_GET['source'] == "edit_post") {
        if(!isset($_GET['p_id']) || (isset($_GET['p_id']) && empty($_GET['p_id'])) ) {
            header("Location: http://localhost/cms/admin/posts.php");
        }

    }
 ?>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cross</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CMS Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php">Home Page</a> </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Post Actions <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="posts.php?source=add_post">Create Post</a>
                            </li>
                            <li>
                                <a href="posts.php">Post Operations</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#posts_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="posts_dropdown" class="collapse">
                            <li>
                                <a href="#">Create User</a>
                            </li>
                            <li>
                                <a href="#">User Operations</a>
                            </li>
                        </ul>
                    </li>                 
                    
                    <li class="active">
                        <a href=""><i class="fa fa-fw fa-file"></i>Profile</a>
                    </li>
                    <li class="active">
                        <a href="categories.php"><i class="fa fa-fw fa-file"></i>Categories</a>
                    </li>
                    <li class="active">
                        <a href=""><i class="fa fa-fw fa-file"></i>Comments</a>
                    </li>

                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>