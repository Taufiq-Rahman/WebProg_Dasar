<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Target Soal 1</title>
</head>
<style>
    thead{
        background-color : grey;
    }
</style>
<body>
    <table>
        <thead>
            <th colspan ="2">Data Yang Anda Masukkan!</th>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $_POST["NamaSoal1"]?></td>
            </tr>
            <tr>
                <td>Position</td>
                <td>:</td>
                <td>
                    <?php echo $_POST["position"]; ?>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="Soal1.php">Back</a>
</body>
</html>