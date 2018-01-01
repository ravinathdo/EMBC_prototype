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

        <h2>Exam Officer</h2> 
        <hr>
        <div id="treeDiv">
            <?php include './_menu.php'; ?>
        </div>
        <div id="containerDiv">
            <h2>Manage Time Table</h2>
            <form name="form1" method="post" action="timetable_setup.php">
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
                            <td></td>
                            <td><input type="submit" value="Add Time Table"/></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            

        </div>



    </body>
</html>
