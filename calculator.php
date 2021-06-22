<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="author" content="Oğuzhan Erçelik">
    <meta name="keywords" content="HTML, CSS">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Homework">
    <title>Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script>
        function display(val) {
            document.getElementById("result").value += val
        }

        function solve() {
            let x = document.getElementById("result").value
            let y = eval(x)
            document.getElementById("result").value = y
        }

        function clear() {
            document.getElementById("result").value = ""
        }

        function reverse() {
            let x = document.getElementById("result").value
            let y = eval('1/' + x)
            document.getElementById("result").value = y
        }
    </script>
    <style>
        input[type="button"] {
            background-color: rgb(128, 196, 228);
            border: solid black 0;
            border-radius: 20px;
            width: 100%
        }

        input[type="button"]:hover {
            background-color: rgb(42, 139, 184);
        }

        input[type="text"] {
            background-color: white;
            border: solid black 2px;
            border-radius: 20px;
            width: 100%
        }

        div div {
            border-radius: 12px;
        }
    </style>
</head>

<body>
<div class="d-flex justify-content-center">
    <div class="container-lg col-lg-3 bg-secondary pt-2 mt-3 mr-3 ml-3 border border-dark">
        <table class="table table-borderless">
            <tr>
                <td colspan="3">
                    <div class="text-center text-white">
                        <h1>Handmade Calculator</h1>
                    </div>
                    <input class="pl-3" type="text" id="result" />
                </td>
            </tr>
            <tr>
                <td class="col-4"><input type="button" value="7" onclick="display('7')" /> </td>
                <td class="col-4"><input type="button" value="8" onclick="display('8')" /> </td>
                <td class="col-4"><input type="button" value="9" onclick="display('9')" /> </td>
            </tr>
            <tr>
                <td><input type="button" value="4" onclick="display('4')" /> </td>
                <td><input type="button" value="5" onclick="display('5')" /> </td>
                <td><input type="button" value="6" onclick="display('6')" /> </td>
            </tr>
            <tr>
                <td><input type="button" value="1" onclick="display('1')" /> </td>
                <td><input type="button" value="2" onclick="display('2')" /> </td>
                <td><input type="button" value="3" onclick="display('3')" /> </td>
            </tr>
            <tr>
                <td><input type="button" value="0" onclick="display('0')" /> </td>
                <td><input type="button" value="." onclick="display('.')" /> </td>
                <td><input type="button" value="/" onclick="display('/')" /></td>
            </tr>
            <tr>
                <td><input type="button" value="+" onclick="display('+')" /> </td>
                <td><input type="button" value="-" onclick="display('-')" /> </td>
                <td><input type="button" value="*" onclick="display('*')" /> </td>
            </tr>
            <tr>
                <td><input type="button" value="1/x" onclick="reverse()" /> </td>
                <td><input type="button" value="C" onclick="clear()" /> </td>
                <td><input type="button" value="=" onclick="solve()" /> </td>
            </tr>
        </table>
    </div>
</div>
</body>

</html>