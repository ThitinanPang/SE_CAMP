<html>

<head>
    <meta charset="utf-8">
</head>
<body>
    <center>
    <?php $multi_x = 2; 
          $valu = 1;
    ?>

    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div>
    <?php for ($i=1; $i < 25; $i++) { 
        $valu = $multi_x * $i;
        echo " <table>
        <tbody>
            <tr>
                <td>$multi_x</td>
                <td>x</td>
                <td>$i</td>
                <td>=</td>
                <td>$valu</td>
            </tr>
        </tbody>
    </table>";
    }
    ?>
    </div>
    </center>
   
    <style>
        body{
            background-image: url('https://wallpapers.com/images/hd/1920x1080-aesthetic-glrfk0ntspz3tvxg.jpg');
            object-fit: cover;
        }
        table {
            width: 150px;
            height: 50px;
              
        }
        td{
            height: 30px;
            width: 50px;
            text-align: center;
    
        }
        div{
            width: 200px;
            height: 500px;
            overflow: scroll;
            background-color: #ffffff;
            border-radius: 20px;  
        }
    </style>

</body>

</html>