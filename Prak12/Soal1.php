<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taufiqurrahman 2373025</title>
</head>
<Style>
    table{
        border : 1px solid black;
        border-collapse : collapse;
    }
    th,tr,td{
        border : 1px solid black;
    }
    th{
        background-color : grey;
    }
</Style>
<body>
    <a href="index.html">home</a>
    <form action="Target1.php" method="post">
        <table>
            <thead>
                <th colspan="2">Add Profile</th>
            </thead>
            <tbody>
                <tr>
                    <td>Name </td>
                    <td><input type="text" name="NamaSoal1" id=""></td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td><select name="position" id="">
                        <optgroup label="Programmer">
                            <option value="Senior Programmer">Senior Programmer</option>
                            <option value="Junior Programmer">Junior Programmer</option>
                        </optgroup>
                        <optgroup label="System Analyst">
                            <option value="Senior Analyst">Senior Analyst</option>
                            <option value="Junior Analyst">Junior Analyst</option>
                        </optgroup>
                    </select></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="Password" id=""></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td><input type="password" name="ConfirmPass" id=""></td>
                </tr>
                <tr align="right">
                    <td colspan ="2">
                        <input type="submit" value="Reset">
                        <input type="submit" value="Save">
                    </td>
                </tr>
        </tbody>
    </table>
    <?php
        $name = $position = $pass = $confirmPass = "";
        $message = "";
        $showresult = false ;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $name =$_POST['NamaSoal1'];
            $position = $_POST['position'];
            $pass = $_POST['Password'];
            $confirmPass = $_POST['ConfirmPass'];

            if(empty($name)){
                echo "Input nama belum diisi!!";
            } else if (empty($pass)){
                echo "Input Password belum diisi!!";
            } else if (empty($confirmPass)){
                echo "Input Confirm Password belum diisi!!";
            } else if ($pass !== $confirmPass){
                echo "Password dan Confirm Password belum sama!!";
            } else {
                $showresult = true;
            }
        }
        
    ?>
    </form>
</body>
</html>