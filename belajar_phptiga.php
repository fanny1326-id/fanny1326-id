<!DOCTYPE html>
<html>

<head>
    <title>Belajar Membuat Profil dengan PHP</title>
    <style>
        .box {
            width: 500px;
            margin: auto;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            border-style: dotted;
            background-color: cyan;
        }
        img {
            width: 80px;
            height: 100px;
        }
        table {
            padding: 5px;
            margin: auto;
            padding: 5px;
            background-color: whitesmoke;
        }
    </style>
</head>
<body>
    <div class="box">
        <h3 style="text-align: center;">Biodata Diri</h3>
        
        <?php 
        $nama   = "Fanny Riyyan Pradana";
        $nim    = 202520025;
        $alamat = "Desa Rejowinangun, Kec. Kemiri Kab. Purworejo";
        $email  = "fannyriyyanpradana@gmail.com";
        $bidang = "Multimedia";?>

        <table>
            <tr>
                <td rowspan="5"><img src="imagee.jpg" alt=""></td>
                <td>
                    <?php
                    echo "Nama   : ".$nama."<br>";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "Nim    : ".$nim. "<br>";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "Alamat : ".$alamat. "<br>";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "Email  : ".$email. "<br>";
                    ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                    echo "Bidang : ".$bidang. "<br>";
                    ?>
                </td>
            </tr>
            
        </table>
        
    </div>
</body>
</html>
