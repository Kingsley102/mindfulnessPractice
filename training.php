<?php include('header.php'); 


//block somone without login
if(!isset($_SESSION['email']))
{ 
    header("Location: /login.php");
}
?>

<form action="/functions.php?op=createDB" method="post">

  <label for="mindful_name"> Mindfulness Practice Mode </label>
  <input type="hidden" id="mindful_id" name="mindful_id" value="<?php echo $_GET['mindful_id'];?>">
  <input type="hidden" id="email" name="email" value="<?php echo $_SESSION['email'];?>">
  <h2><?php echo $mindfuls[$_GET['mindful_id']-1]['name'];?></h2>

  <label for="name">Date:</label>
  <input type="date" id="date" name="date"><br/>
<br>

  <label for="time">Start Time:</label>
  <input type="time" id="time" name="time" require><br/>
<br>

  <label for="quantity">Duration (mins): </label>
  <input type="number" id="quantity" name="quantity" min="1" max="999" value="1">

 <br><br>
  <input class="submitBtn" type="submit" value="Submit">
</form> 

<?php include 'footer.php'; ?>
