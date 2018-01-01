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
            <h2>Manage Clashes</h2>
            <h3>School Cambridge O/L</h3>
            <table border="0" width="100%">
                <thead>
                    <tr>
                        <th align="center">Verifi Code</th>
                        <th align="center">Student Name</th>
                        <th align="center">Date</th>
                        <th align="center">Clash Subjects</th>
                        <th align="center"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1801020001</td>
                        <td align="center">Ravinath Fernando</td>
                        <td align="center">01-03-2018</td>
                        <td align="center"><p>English [9:00an-12:00pm]</p>
                            <p>Maths [9:00an-12:00pm]</p></td>
                        <td align="center"><a href="">Manage</a></td>
                    </tr>
                    <tr>
                        <td align="center">1801020002</td>
                        <td align="center">Yohan Fernando</td>
                        <td align="center">01-03-2018</td>
                        <td align="center"><p>English [9:00an-12:00pm]</p>
                            <p>Maths [9:00an-12:00pm]</p></td>
                        <td align="center"><a href="">Manage</a></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>



    </body>
</html>
