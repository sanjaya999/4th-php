<?php
include "menu.php";
?>

<div class="main-content">
  <form action="db.php" method="post">
   <div class="title">Item Entry Form</div>
     <div class="content">
     <label> Item Name</label>
     <input type="text" name="itemName">

     <label> Price</label>
     <input type="text" name="price">

     <label>Photo</label>
     <input type="file" name="photo">

     <label> Remarks</label>
     <textarea rows="10" cols="50" name="remarks"></textarea>

     <input type="submit" class="btn success" name="">
     <input type="reset" class="btn delete" name="">

    </div>
    </form>
</div>

