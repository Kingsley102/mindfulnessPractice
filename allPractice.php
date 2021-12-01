<?php include('header.php'); 


//block somone without login
if(!isset($_SESSION['email']))
    header("Location: /login.php");

?>

<h1>全部靜觀修習</h1>
<h3> Your Login Email is: <?php echo $_SESSION['email'];?></h3>
<?php
//Get  practice data
$practiceData = file_get_contents('data.csv');
$practices = str_getcsv($practiceData, "\r\n");
$i = 0;
$u = 0;
//Show all practice.

foreach($practices as $practice)
 
{
    $u += 1;
    $singlePractice = explode(",", $practice);
    error_reporting(0);
    
    if ($_SESSION['email']==$singlePractice[1])
    {
    echo '<div class="practice"><p>';
    echo 'Practice Date : '.$singlePractice[2].'<br/>';
    echo 'Time : '.$singlePractice[3].'<br/>';
    echo 'Duration : '.$mindfuls[$singlePractice[0]-1]['name'].' X '.$singlePractice[4].' mins <br/>';
    echo 'Last entry time : '.$singlePractice[5].'<br/>';
    echo '</p></div>';
    }
    else 
    {   
    $i += 1;
    }
}
if ($i == $u)
{
    echo 'Start the training today!';
}
?>

<?php include('footer.php'); ?>