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
                echo"<script>window.open('index.php?cat', '_self')</script>";
            }
             }  
          }
       }

       function add_sub_cat(){
        include 'inc/db.php';
        if(isset($_POST['add_sub_cat'])){
         $cat_name = $_POST['sub_cat_name'];
         $cat_id = $_POST['cat_id'];
 
         $check=$con->prepare("select * from sub_cat where sub_cat_name='$cat_name'");
         $check->setFetchMode(PDO:: FETCH_ASSOC);
         $check->execute();
         $count=$check->rowCount();
 
         if($count==1){
             echo"<script>alert('Sub Category Already Added')</script>";
             echo"<script>window.open('index.php?sub_cat', '_self')</script>";
         } else{
             $add_cat=$con->prepare("insert into sub_cat(sub_cat_name, cat_id)values('$cat_name','$cat_id')");
             if($add_cat->execute()){
                 
                 echo"<script>alert('Sub Category Added Successfully')</script>";
                 echo"<script>window.open('index.php?sub_cat', '_self')</script>";
     
             }
             else {
                 echo"<script>alert('Sub Category Added Unsuccessfully')</script>";
                 echo"<script>window.open('index.php?sub_cat', '_self')</script>";

                 }
              }  
           }
        }

        

        function view_cat(){
            include "inc/db.php";
            $get_cat=$con->prepare("select * from cat");
            $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
            $get_cat->execute();
            $i=1;
            while($row=$get_cat->fetch()):
                echo"<tr>
                        <td>".$i++."</td>
                        <td>".$row['cat_name']."</td>
                        <td><a href='#'>Edit</td>
                        <td><a href='#'>Delete</td>

                    </tr>";
               
            endwhile;
            
        }

        function view_sub_cat(){
            include "inc/db.php";
            $get_cat=$con->prepare("select * from sub_cat");
            $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
            $get_cat->execute();
            $i=1;
            while($row=$get_cat->fetch()):
                $id=$row['cat_id'];
                $get_c = $con->prepare("select * from cat where cat_id='$id'");
                $get_c->setFetchMode(PDO:: FETCH_ASSOC);
                $get_c->execute();
                $row_cat=$get_c->fetch();
                echo"<tr>
                        <td>".$i++."</td>
                        <td>".$row['sub_cat_name']."</td>
                        <td>".$row_cat['cat_name']."</td>
                        <td><a href='#'>Edit</td>
                        <td><a href='#'>Delete</td>

                    </tr>";
               
            endwhile;
            
        }
 

       function select_cat(){
           include 'inc/db.php';
           $get_cat=$con->prepare("select * from cat");
           $get_cat->setFetchMode(PDO:: FETCH_ASSOC);
           $get_cat->execute();
           while($row=$get_cat->fetch()):
            echo "<option value='".$row['cat_id']."'>".$row['cat_name']."</option>";
        
           endwhile;
       }
?>