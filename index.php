<?php include('header.php'); ?>

<h1> Mindfulness Practice </h1>
<h2>	 </h2>

<div class="flex-grid">
<?php

//顯示不同mindfulness practice模式 

foreach ($mindfuls as $key => $mindful)
{
	echo '<div class="col">
    
    <img src="/images/'.$mindful['image'].'" />
	<br>
    <p>
    Name: '.$mindful['name'].'<br>
	Time duration: ' .$mindful['time_duration'].'<br>
    <a href="/training.php?mindful_id= '.$mindful['mindful_id'].'" class="trainBtn"> Start! </a>
    
    </p>
    <br> 
    </div>
    ';
}
?>

</div>




<?php include('footer.php'); ?>