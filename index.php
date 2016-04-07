<?php
require_once 'class/FB-login.php';
$fb = new FB();
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
    <script>
        //add a click event to the join button and roll a random number between 1 and 4 for the rooms
        document.getElementById('join').addEventListener('click',function(){
            var x = Math.floor((Math.random()*4)+1);
            switch (x){
                case 1:
                    window.location.assign('room1.php');
                    break;
                case 2:
                    window.location.assign('room2.php');
                    break;
                case 3:
                    window.location.assign('room3.php');
                    break;
                case 4:
                    window.location.assign('room4.php');
                    break;

            }

        });

        document.getElementById('logout').addEventListener('click',function(){
            window.location.assign('logout.php');



        });

    </script>
    </body>
</html>
