<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * 
        {
        box-sizing: border-box;
        }
        /* Create two equal columns that floats next to each other */
        .column1 
        {
        float: left;
        width: 50%;
        padding: 10px;  
        height: 850px;
        background: #aaa;
        }
        .column2 
        {
        float: left;
        width: 50%;
        padding: 10px;
        height: 850px;
        background: #bbb;
        }
        /* Clear floats after the columns */
        .row:after 
        {
        content: "";
        display: table;
        clear: both;
        }
        .texts
        {
            color: white;
        }
    </style>
    <script>
        //Clear previous output
        function clearOutput () {
            document.getElementById("output").innerHTML = "";
        }
        //Fibonacci Sequence
         function calcFibo () {
            let inputNum = document.getElementById('limit').value;
            let a = 0, b = 1, c;
            clearOutput();
            
            for(let i = 0; i < inputNum; i++)
            {
                document.getElementById("output").innerHTML += a + ", ";
                c = a + b;
                a = b;
                b = c;
            }
        }
        //Quarantine Checker
        function checkQuarantine () {
            let inputAge = document.getElementById('age').value;

            if(inputAge <21)
            {
                document.getElementById("outputAge").innerHTML = "Batan.on ra kau ka! Stay inside!";
            }
            else if(inputAge>65)
            {
                document.getElementById("outputAge").innerHTML = "Tiguwang na ka! Stay inside!";
            }
            else
            {
                document.getElementById("outputAge").innerHTML = "OK! Laag dira!";
            }
        }
    </script>
</head>
<body>
    <div class="row">
        <div class="column1">
            <h1 class="texts">Fibonacci Calculator</h1>
            <input type="number" min="1" oninput="validity.valid||(value='');" id="limit">
            <button onclick="calcFibo()">Calculate</button>
            <br>
            <h3 class="texts">
                Output:
            </h3>
            <div class="texts" id="output"></div>
        </div>
        <div class="column2">
            <h1 class="texts">Quarantine Checker</h1>
            <input type="number" min="1" oninput="validity.valid||(value='');" id="age">
            <button onclick="checkQuarantine()">Calculate</button>
            <br>
            <h3 class="texts">
                Output:
            </h3>
            <div class="texts" id="outputAge"></div>
        </div>
    </div>
</body> 
</html>