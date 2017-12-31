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
            <form name="form1" method="post" action="">
                <table border="0" cellpadding="2">
                    <tbody>
                        <tr>
                            <td>Exam Name</td>
                            <td>School
                            </td>
                        </tr>
                        <tr>
                            <td>Branch</td>
                            <td>Colombo
                            </td>
                        </tr>
                        <tr>
                            <td>Exam Date</td>
                            <td>11-03-2018</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>RegOpen</td>
                        </tr>
                        <tr>
                            <td>Exam Type</td>
                            <td>Cambridge O/L
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit"/></td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>



    </body>
</html>
