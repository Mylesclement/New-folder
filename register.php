<?php

$data = $_POST;

if (empty($data['username']) ||
    empty($data['password'])) {
    
    die('Please fill all required fields!');
}

  
