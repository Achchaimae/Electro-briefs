
<?php

    session_start();

    function isLoggedIn(){
        if(isset($_SESSION['admin'])){
            return true;
        }
        else{
            return false;
        }
    }