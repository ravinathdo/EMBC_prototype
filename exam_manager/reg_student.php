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
            <h2>Registrations</h2>
            <table border="0" width="25%">
                <tbody>
                    <tr>
                        <td>Exam</td>
                        <td>School Cambridge O/L</td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>RegOpen</td>
                    </tr>
                    <tr>
                        <td>Branch</td>
                        <td>Colombo</td>
                    </tr>
                </tbody>
            </table>

            <table border="0" width="50%">
                <thead>
                    <tr>
                        <th>Verification Code</th>
                        <th>Student Name</th>
                        <th>Reg Date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>18010001</td>
                        <td>G.P Fernando</td>
                        <td>01-02-2018</td>
                        <td>pending</td>
                        <td><a href="reg_explorer.php">Explorer</a></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </body>
</html>
