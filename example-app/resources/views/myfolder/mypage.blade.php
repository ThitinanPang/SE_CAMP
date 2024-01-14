<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Multiplication Table</title>
    <style>
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            background-image: url('https://wallpapers.com/images/hd/1920x1080-aesthetic-glrfk0ntspz3tvxg.jpg');
            background-size: cover; 
        }
        h1{
            margin-top: 20px;
            text-align: center;
        }
        .box {
            border-radius: 25px;
            background-color: rgb(7, 143, 255) ;
            
        }
        #input_number {
            position: relative;
            display: inline-block;
            width: 340px;
            height: 50px;
            border: none;
            outline: none;
            padding: 0 25px;
            border-radius: 25px 0 0 25px;

        }
        #btn_submit {
            position: relative;
            display: inline-block;
            border-radius: 0 25px 25px 0;
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
    <div><h1>Easy Multiplication Table</h1></div>
    <div class="box">
        <form method="post" action="/my-route">
            @csrf
            <input type="number" name="myinput" id="input_number">
            <button type="submit" id="btn_submit">ดูสูตรคูณ</button>
        </form>
    </div>
    </div>
</body>
</html>