<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once './Projects/ProjectsDAO.class.php';
        
        $dao = new \FilRouge\Projects\ProjectsDAO();
        
        $dao->select("");
        
        
        ?>
    </body>
</html>
