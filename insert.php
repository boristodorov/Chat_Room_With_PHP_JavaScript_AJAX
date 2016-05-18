<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$uname = $_GET['uname'];
$msg = $_GET['msg'];


$conn = mysqli_connect('localhost', 'root', '', 'chatbox');


mysqli_query($conn, 'INSERT INTO logs (username , msg ) VALUES ('.$uname.' , '.$msg.'_)');

