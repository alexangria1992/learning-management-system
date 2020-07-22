<div id="bodyleft">
   <h3>Categories Management</h3>
   <ul>
       <li><a href="index.php">Dashboard</a></li>
       <li><a href="index.php?cat">View  Categories</a></li>
       <li><a href="index.php?sub_cat">View  Sub Categories</a></li>
   </ul>
   <h3>Course Management</h3>
   <ul>
       <li><a href="">Active Courses</a></li>
       <li><a href="">Pending Courses</a></li>
       <li><a href="">Unpublish Courses</a></li>
       <li><a href="">Advance Course Searching</a></li>
   </ul>
   <h3>User Management</h3>
   <ul>
       <li><a href="">View All Students</a></li>
       <li><a href="">View All Teachers</a></li>
       <li><a href="">Advance User Search</a></li>
   </ul>
   <h3>Payment Management</h3>
   <ul>
       <li><a href="">Pay To Teachers</a></li>
       <li><a href="">Complete Payment</a></li>
       <li><a href="">Advanced Payment Searching</a></li>
   </ul>
   <h3>Pages Management</h3>
   <ul>
       <li><a href="">Terms & Condition Page</a></li>
       <li><a href="">Contact Us Page</a></li>
       <li><a href="">About Us Page</a></li>
       <li><a href="">FAQs Page</a></li>
       <li><a href="">Edit Slider</a></li>
   </ul>
</div>

<?php
  if(isset($_GET['cat'])){
      include "cat.php";
  }

  if(isset($_GET['sub_cat'])){
    include "sub_cat.php";
}
?>