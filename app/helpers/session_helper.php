
<?php

    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['admin']) || isset($_SESSION['user'])){
            return true;
        }
        else{
            return false;
        }
    }