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
            <h2>Manage Subject</h2>
            <form name="form1" method="post" action="">
                <table border="0" cellpadding="2">
                    <tbody>
                        <tr>
                            <td>Exam Name</td>
                                    <td><select>
                                            <option>--select exam--</option>
                                            <option>School Cambridge O/L</option>
                                            <option>IELTS</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Subject Name</td>
                            <td><input type="text" />
                            </td>
                        </tr>
                       
                        <tr>
                            <td>Fee</td>
                            <td><input type="text" />
                            </td>
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td><input type="submit"/></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <table border="0" width="100%">
                <thead>
                    <tr>
                        <th align="center">Exam</th>
                        <th align="center">Subject</th>
                        <th align="center">Fee</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">School Cambridge O/L</td>
                        <td align="center">English</td>
                        <td align="center">2500</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>



    </body>
</html>
