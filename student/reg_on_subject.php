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

            <h2>Register Subjects</h2>
            <table border="1">

                <tbody>
                    <tr>
                        <td>

                            <table border="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td>Ravinath </td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td>Fernando</td>
                                    </tr>
                                    <tr>
                                        <td>NIC</td>
                                        <td>885412547V</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>NO 35 Raddoluwa, Seeduwa</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                            <form action="reg_success.php">
                                
                                Subject <select>
                                    <option>--select subject--</option>
                                    <option>English</option>
                                    <option>Maths</option>
                                </select> 
                                <button>Add Subject</button>

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
                                <h2>Total 12000</h2>
                                <input type="submit" name="" value="Confirm And Register" />
                            </form>


                        </td>
                    </tr>

                </tbody>
            </table>


        </div>



    </body>
</html>
