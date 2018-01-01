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
            <h2>Registration</h2>
            <table border="0" width="25%">
                <tbody>
                    <tr>
                        <td>Exam Name</td>
                        <td><select>
                                <option>--select--</option>
                                <option>School Cambridge O/L</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><select>
                                <option>--select--</option>
                                <option>RegOpen</option>
                                <option>Active</option>
                                <option>Close</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Branch</td>
                        <td><select>
                                <option>--select--</option>
                                <option>Colombo</option>
                                <option>Gampaha</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" /></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

            <table width="100%" border="0">
                <tr>
                    <td><strong>Exam Name</strong></td>
                    <td><strong>Branch</strong></td>
                    <td><strong>Exam Date</strong></td>
                    <td><strong>Status</strong></td>
                    <td><strong>Exam Type</strong></td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>School</td>
                    <td>Colombo</td>
                    <td>11-03-2018</td>
                    <td>RegOpen</td>
                    <td>Cambridge O/L</td>
                    <td><a href="reg_student.php">View Students</a></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>



    </body>
</html>
