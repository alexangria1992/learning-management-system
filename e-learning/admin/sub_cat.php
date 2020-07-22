<div id="bodyright">
    <h3>View All Sub Categories</h3>
    <div id="add">
        <details>
            <summary>Add Sub Category</summary>
        <form method="post" enctype="multipart/form-data">
        <select name="cat_id">
            <option value="">Select Category</option>
            <?php echo select_cat(); ?>
         </select>
             <input type="text" name="sub_cat_name" placeholder="Enter Category Name Here">
             <center><button name="add_sub_cat">Add Category</button></center>
       </form>
       </details>

    </div>
</div>

<?php echo add_sub_cat(); ?>