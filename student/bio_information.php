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

        <h2>Student</h2> 
        <hr>
        <div id="treeDiv">
            <?php include './_menu.php'; ?>
        </div>
        <div id="containerDiv">
        <h2>Student Information</h2> 
        
        Branch <select>
            <option>--select branch--</option>
            <option>Colombo</option>
            <option>Gampaha</option>
        </select>

        <form action="reg_on_subject.php">
                <table border="0" width="50%">
                    <tbody>
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>NIC</td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><input type="text" /></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="Next" /></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>



    </body>
</html>
