<?php

    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit']))
    {
        $conn = mysqli_connect('localhost','root','','event') or die("Connection Failed");

        if(isset($_POST['FIRST NAME']) && isset($_POST['EMAIL']) && isset($_POST['PHONE NO']) && isset($_POST['EVENT TYPE']))
        {
            $FIRSTNAME = $_POST['FIRSTNAME'];
            $EMAIL = $_POST['EMAIL'];
            $PHONE = $_POST['PHONE'];
            $EVENTTYPE = $_POST['EVENTTYPE'];

            $sql = "INSERT INTO `project` (`FIRSTNAME`, `EMAIL`, `PHONE`, `EVENTTYPE`)  VALUES ('$FIRSTNAME','$EMAIL','$PHONE','$EVENTTYPE')";

          

            if(mysqli_query($conn,$sql))
            {
                echo "Entry Successfull";
            }
            else
            {
                echo "Error Occured";
            }

        }
    }



?>