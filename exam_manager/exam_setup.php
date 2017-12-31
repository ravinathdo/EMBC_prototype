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
            <?php include './_menu.php';?>
        </div>
        <div id="containerDiv">
            <h2>Exam Setup</h2>
            <form name="form1" method="post" action="">
              <table border="0" cellpadding="2">
                <tbody>
                  <tr>
                    <td>Exam Name</td>
                    <td><select>
                    <option>--select exam--</option>
                    <option>School</option>
                    <option>Professionals</option>
                    <option>IELTS</option>
                    <option>Cambridge English</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td>Branch</td>
                    <td><select>
                    <option>--select branch--</option>
                    <option>Colombo</option>
                    <option>Gampaha</option>
                    <option>Kandy</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td>Exam Date</td>
                    <td><input type="text"/></td>
                  </tr>
                  <tr>
                    <td>Status</td>
                    <td><select>
                    <option>--select status--</option>
                    <option>Pending</option>
                    <option>RegOpen</option>
                    <option>Active</option>
                    <option>Close</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td>Exam Type</td>
                    <td><select>
                    <option>--select type--</option>
                    <option>Cambridge O/L</option>
                    <option>Cambridge A/L</option>
                    <option>Edexcel O/L</option>
                    <option>Edexcel A/L</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><input type="submit"/></td>
                  </tr>
                </tbody>
              </table>
            </form>
            
            
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
    <td><a href="exam_status.php">RegOpen</a></td>
    <td>Cambridge O/L</td>
    <td><a href="#">manage subjects</a></td>
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
