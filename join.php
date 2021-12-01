<?php include('header.php'); ?>

<form action="functions.php?op=joinMember" method="post">

  <label for="newemail">電郵:</label>
  <input type="email" id="newemail" name="newemail" require><br>
  
  <label for="newemail">密碼:</label>
  <input type="password" id="newpassword" name="newpassword">
  
  <br>
  <input type="submit" value="Join">
</form>

<?php include('footer.php'); ?>