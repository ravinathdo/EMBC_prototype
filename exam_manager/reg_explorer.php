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
            <h2>Student Registration Verification</h2> 
            <table border="0" width="100%">
                <tbody>
                    <tr>
                        <td colspan="2">
                            School Cambridge O/L | <b>03-02-2018</b> | PENDING
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table border="1" width="100%">
                                <tbody>
                                    <tr>
                                        <td>First Name</td>
                                        <td>Ravinath</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name</td>
                                        <td>Fernando</td>
                                    </tr>
                                    <tr>
                                        <td>NIC</td>
                                        <td>8636552145V</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>No 35 Raddoluwa,Seeduwa</td>
                                    </tr>
                                    <tr>
                                        <td>Verification Code</td>
                                        <td>18010001</td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                        <td>
                               <table border="1" width="100%">
                                <tbody>
                                    <tr>
                                        <td>English</td>
                                        <td>2500</td>
                                    </tr>
                                    <tr>
                                        <td>Maths</td>
                                        <td>3500</td>
                                    </tr>
                                    <tr>
                                        <td>Science</td>
                                        <td>3500</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h2>Total 107500</h2>
                            <button>Approve Now</button>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>



    </body>
</html>
