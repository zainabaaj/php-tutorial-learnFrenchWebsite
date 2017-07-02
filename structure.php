<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="c.css" rel="stylesheet" type="text/css" />
    <link href="fonts.css" rel="stylesheet" type="text/css"/>
    <script src="j.js "rel="stylesheet" type="text/javascript"></script>
</head>

<body>
     <?php include 'header.php';?>
     <div id="page">
        <?php include "Untitled-1.php"; ?>
          <?php include 'sidebar.php';?>
     <div id="content" class="container">
       
        <?php 
            if(!isset($_GET['content'] ))
            {
                include 'h-content.php';
            }
             elseif  ($_GET['content'] == "getstarted")
            {

                include 'getstarted-content.php';
            }
            
            elseif  ( $_GET['content']  == "verbs")
            {

                include 'verbs-content.php';
            }
            
            elseif  ( $_GET['content']  == "grammar")
            {

                include 'list.php';
            }
            elseif($_GET['content']  == "gs-1")
            {
                include 'getstarted-alphabet-content.php';
            }
              elseif($_GET['content']  == "gs-2")
            {
                include 'getstarted-numbers-content.php';
            }
                elseif($_GET['content']  == "aboutUs")
            {
                include 'aboutUs.php';
            }
            
            ?>
     
            </div>
     </div>

 

 
    

<?php include 'footer.php';?>
</body>

</html>