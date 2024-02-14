<!DOCTYPE html>
<html lang="en">

<head>
    <title>Javascript101</title>
</head>
<style>
    #input_numbers{
        width: 100px;
        height: 25px;
        border-radius: 8px;
        border-width: 0;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
    #input_numbers:focus{
        background-color: #FBFBFB;
        border-width: 0;
        transition: 0.2s;
    }
    #enter{
        color: #fff;
        font-weight:bold ;
        background-color: #30426A;
        width: 100px;
        height: 30px;
        border-radius: 10px;
        font-size: 16px;
        border-width: 0;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
    #enter:hover{
        background-color: #5171b6;
        cursor: pointer;
        transition: 0.2s;
    }
    #delete{
        width: 100px;
        height: 30px;
        border-radius: 10px;
        font-size: 16px;
        color: #fff;
        font-weight:bold ;
        background-color: #CB2029;
        border-width: 0;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
    #delete:hover{
        background-color: #f7474f;
        cursor: pointer;
        transition: 0.2s;
    }
    td{
        padding: 10px;
        text-align: center;
        border: 1px solid #ffffff;
    }
    #answer{
        font-size:24px;
        max-width: 800px;
        margin: 15px auto;
        padding: 20px;
        background-color: #fff;
        border-radius:  10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    #entnum{
        color: #fff;
    }
    body {
        background-image: url('https://wallpapers.com/images/hd/1920x1080-aesthetic-glrfk0ntspz3tvxg.jpg');
        font-family: Arial, sans-serif;
        background-color: #EDF6FB;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }


</style>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <center>
        <h1>Mutiplication Table</h1>
    </center>
    <center>
        <div>
            <br>
            <label for="number" id="entnum" >enter number : </label>

            <input type="text" id="input_numbers">
            <button id = "enter">enter</button>
            <button id = "delete">delete</button>
        </div>
        <div id = "answer"></div>

    </center>
    <script>
        $(document).ready(function() {
            $("#enter").click(function() {
                let number = $("#input_numbers").val();
                let result = "<tr><th>Mutiple Table " + number + "</th></tr>";
                for (let i = 1; i <= 24; i++) {
                    result += "<tr><td>" + number + "x" + i + "=" + (number * i) + "</td></tr>";


                }
                $("#answer").html(result);

            });

            $("#delete").click(function() {
                deleteTable();

            });

            function deleteTable() {
                $("#input_numbers").val("");
                $("#answer").empty();
            }
        });
    </script>
</body>

</html>