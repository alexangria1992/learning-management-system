<div id="bodyright">
    <h3>View All Categories</h3>
    <div id="add">
        <details>
            <summary>Add Category</summary>
        <form method="post" enctype="multipart/form-data">
             <input type="text" name="sub_cat_name" placeholder="Enter Category Name Here">
             <center><button name="add_cat">Add Category</button></center>
       </form>
       </details>

    </div>
</div>

<?php echo add_sub_cat(); ?>