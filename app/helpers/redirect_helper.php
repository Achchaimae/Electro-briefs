<?php 
    function redirect($url)
    {
        header('location: ' . URLROOT . '/' . $url);
    }
  