<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            #treeDiv{
                width: 25%;
                float: left;
            }
            #containerDiv{
                width: 75%;
                /*float: left;*/
            }
        </style>
    </head>
    <body>

        <h2>Exam Manager</h2> 
        <hr>
        <div id="treeDiv">
            <?php include './_menu.php'; ?>
        </div>
        <div id="containerDiv">
            <form action="reg_explorer.php">
                Verification Code <input type="text" /> <input type="submit" value="Search" />
            </form>
        </div>



    </body>
</html>
