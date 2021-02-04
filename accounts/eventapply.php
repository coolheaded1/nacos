<?php 
    session_start();
    include "assets/connect2.php";
    $data=json_decode($_SESSION['stuData']);
    if(isset($_SESSION['stuData']))
    {
        $eventid=$_GET['id'];
        $membershipNo=$data->membershipNo;
        
        // Check if user has applied

        $query=mysqli_query($connect,"SELECT * from eventreg where eventid='$eventid' and membershipNo='$membershipNo'");

        if(mysqli_num_rows($query) ==0)
        {
            $insert = mysqli_query($connect,"INSERT into eventreg (id,eventid,membershipNo,date) values('','$eventid','$membershipNo',now())");
            if ($insert)
            {
                echo '<script>alert("You have successfully registered for this Event")</script>';
                echo '<script>window.history.go(-1)</script>';
            }
            else
            {
                echo mysqli_error($insert);
            }
            

        }
        else

        {
            echo '<script>alert("You have registered for this Event Already")</script>';
            echo '<script>window.history.go(-1)</script>';
        }
    }
    else
    {
        echo '<script>alert("You are not logged in")</script>';
        echo '<script>window.location.replace("../register.php")</script>';
    }   