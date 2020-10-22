<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel=stylesheet href="css/estilo.css"></link>
</head>
<body>
    <table border="1">
        <tr>
            <td colspan="3">
                <form name="tela">
                    <input class="aumentar" name="tela2"/>
                </form>
            </td>
            <td>
                <button class="button" type="button" name="AC" value="limpar" onclick="limpar()">AC</button>
            </td>
        </tr>
        <tr>
            <td>
                <button class="button" type="button" name="7" value="7" onclick="insert(7)">7</button>
            </td>
            <td>
                <button class="button" type="button" name="8" value="8" onclick="insert(8)">8</button>
            </td>
            <td>
                <button class="button" type="button" name="9" value="9" onclick="insert(9)">9</button>
            </td>
            <td>
                <button class="button" type="button" name="/" value="/" onclick="insert('/')">/</button>
            </td>
        </tr>
        <tr>
            <td>
                <button class="button" type="button" name="4" value="4" onclick="insert(4)">4</button>
            </td>
            <td>
                <button class="button" class="button" type="button" name="5" value="5" onclick="insert(5)">5</button>
            </td>
            <td>
                <button class="button" type="button" name="6" value="6" onclick="insert(6)">6</button>
            </td>
            <td>
                <button class="button" type="button" name="*" value="*" onclick="insert('*')">X</button>
            </td>
        </tr>
        <tr>
            <td>
                <button class="button" type="button" name="1" value="1" onclick="insert(1)">1</button>
            </td>
            <td>
                <button class="button" type="button" name="2" value="2" onclick="insert(2)">2</button>
            </td>
            <td>
                <button class="button" type="button" name="3" value="3" onclick="insert(3)">3</button>
            </td>
            <td>
                <button class="button" type="button" name="-" value="-" onclick="insert('-')">-</button>
            </td>
        </tr>
        <tr>
            <td>
                <button class="button" type="button" name="0" value="0" onclick="insert(0)">0</button>
            </td>
            <td>
                <button class="button" type="button" name="." value="." onclick="insert('.')">.</button>
            </td>
            <td>
                <button class="button" type="button" name="=" value="=" onclick="resposta('=')">=</button>
            </td>
            <td>
                <button class="button" type="button" name="+" value="+" onclick="insert('+')">+</button>
            </td>
        </tr>
    </table>
    <script src="js/calculating.js"></script>
</body>
</html>