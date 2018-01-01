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
            <h2>Exam Subject Time Table</h2>
            <p>School Cambridge O/L</p>
            
            <table border="0" width="50%">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Fee</th>
                        <th>Date</th>
                        <th>From Time</th>
                        <th>To Time</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>English</td>
                        <td>2500</td>
                        <td><input type="date"/></td>
                        <td><input type="time"/></td>
                        <td><input type="time"/></td>
                        <td><input type="submit" /></td>
                    </tr>
                    <tr>
                        <td>Maths</td>
                        <td>2500</td>
                        <td><input type="date"/></td>
                        <td><input type="time"/></td>
                        <td><input type="time"/></td>
                        <td><input type="submit" /></td>
                    </tr>
                    
                </tbody>
            </table>

        </div>



    </body>
</html>
