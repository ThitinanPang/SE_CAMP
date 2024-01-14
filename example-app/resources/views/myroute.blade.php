<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Multiple Table</title>
    <style>
        body{
            background-image: url('https://512pixels.net/wp-content/uploads/2023/01/10-4-6k-scaled.jpg');
            background-size: cover; 
        }
        .container {             
            flex-direction: column;             
            display: flex;            
            align-items: center;             
            width: 100%;             
            height: 100vh;             
            margin: 0px;             
            padding: 0px;             
            overflow: auto;         
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $myinput; ?>x</h1>
        <?php
        $value = 0;
        for ($i=1; $i <= 24; $i++) {
            $value = $myinput * $i;
            echo "
                    <table>
                        <tbody>
                            <tr>
                                <td>$myinput</td>
                                <td>x</td>
                                <td>$i</td>
                                <td>=</td>
                                <td>$value</td>
                            </tr>
                        </tbody>
                    </table>";
        }
        ?>
    </div>
</body>
</html>