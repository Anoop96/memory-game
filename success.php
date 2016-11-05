<!DOCTYPE html>
<html>
<?php
      session_start();
       if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false){
       	   header("location:loginpage.php");
       }

       $x= $_SESSION['username'];

 ?>
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Memory Game!!! </title>
        <link rel="stylesheet" href="Style.css"/>
        <script src="jquery-2.2.3.js"></script>
    </head>
    <body>
        <nav>
            <ul id="navBar">
                <li id="userName" class="pointerChange"> TEST USER </li>
                <li id="highScore"> High Score: 0 </li>
                <li id="logOut" class="pointerChange"> LOGOUT </li>
            </ul>
        </nav>

        <div id="gameName">
            <h1> Memory Game. Test How much you are able to remember. For NO use at all. </h1>
        </div>

        <div id="gameOptions">
            <ul id="optionList">
                <li class="pointerChange changeColor" onclick="removeOptions()"> PLAY GAME </li>
                <li class="pointerChange changeColor"> QUIT </li>
                <li class="pointerChange changeColor"> RESET YOUR PROGRESS </li>
            </ul>
        </div>

        <div id="mainGame">
            <div class="buttonHolder">
                <button onclick="selectColors()"> Play </button>
            </div>
            <div id="gameHolder">
                <table>
                    <tr>
                        <td id="box_1" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                        <td id="box_2" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                        <td id="box_3" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                    </tr>
                    <tr>
                        <td id="box_4" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                        <td id="box_5" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                        <td id="box_6" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                    </tr>
                    <tr>
                        <td id="box_7" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                        <td id="box_8" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                        <td id="box_9" class="colorBox" onclick="getUserInput(event)" onmousedown="reduceOpacity(event)" onmouseup="increaseOpacity(event)"></td>
                    </tr>
                </table>
            </div>
            <div class="buttonHolder">
                <button onclick="selectColors()"> Reset </button>
            </div>
        </div>
    </body>
    <script src="Script.js"></script>
</html>
</html>




