<?php
   function add_cat(){
       include 'inc/db.php';
       if(isset($_POST['add_cat'])){
        $cat_name = $_POST['cat_name'];

        $check=$con->prepare("select * from cat where cat_name='$cat_name'");
        $check->setFetchMode(PDO:: FETCH_ASSOC);
        $check->execute();
        $count=$check->rowCount();

        if($count==1){
            echo"<script>alert('Category Already Added')</script>";
            echo"<script>window.open('index.php?cat', '_self')</script>";
        } else{
            $add_cat=$con->prepare("insert into cat(cat_name)values('$cat_name')");
            if($add_cat->execute()){
                
                echo"<script>alert('Category Added Successfully')</script>";
                echo"<script>window.open('index.php?cat', '_self')</script>";
    
            }
            else {
                echo"<script>alert('Category Added Unsuccessfully')</script>";
                echo"<script>alert('Category Added Successfully')</script>";
                }
             }  
          }
       }

       function select_cat(){
           include 'inc/db.php';
           $get_cat=$con->prepare("select * from cat");
           $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
           $get_cat->execute();
           while($row=$get_cat->fetch()):
            echo "<option>".$row['cat_name']."</option>";
        
           endwhile;
       }
?>