<?php

if($_GET['op']=='createDB')
{
    createdb();
}

if($_GET['op']=='checkLogin')
{
    checkLogin($_POST['email'],$_POST['password']);
}

if($_GET['op']=='logout')
{
    logout();
}

if($_GET['op']=='joinMember')
{
    mbdb();
}


function logout()
{
    session_start();
    session_destroy();
    header("Location: /");
}


function checkLogin($email, $password)
{
    
//Get  member data
$memberData = file_get_contents('memberlist.csv');
$members = str_getcsv($memberData, "\r\n");

//Show all practice
foreach($members as $member)
{
    $singleMember = explode(",", $member);

    $memberEmail = $singleMember[1];
    $memberPassword = $singleMember[2];
    
    if($email==$memberEmail && $memberPassword == $password)
    {
        //Valid
        session_start();
        $_SESSION['email'] = $_POST['email'];
        header("Location: /allPractice.php");
        break;
    }
    
    else

    {
        
        header("Location: /loginWrong.php");
        
        
    }

}
}

function createdb(){
if(!isset($_SESSION['email']))
    header("Location: /login.php");
//database review
$myfile = fopen("data.csv", "a") or die("cant open file");
$data = $_POST['mindful_id'].','.$_POST['email'].','.$_POST['date'].','.$_POST['time'].','.$_POST['quantity'].','.date('Y-m-d H:i:s')."\r\n";
fwrite($myfile, $data);
fclose($myfile);

//transfer page
header("LOcation: /thankyou.php");

}

function mbdb(){

// member list
$myfile2 = fopen("memberlist.csv", "a") or die("cant open file");
$member = 'Beginner'.','.$_POST['newemail'].','.$_POST['newpassword']."\r\n";
fwrite($myfile2, $member);
fclose($myfile2);
header("LOcation: /thankyou.php");
}

?>
