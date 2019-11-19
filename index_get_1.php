<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jugadores</title>
    </head>
    <body>
        <form action="" method="get">
            <select name="jugadores">
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
           </select>             
           <button>Enviar</button>
        </form>
        <?php        
        if(isset($_GET) && !empty($_GET)){
            if(isset($_GET["jugadores"])){            
                echo "        <form action='' method='get'>";
                for($i=1;$i<=$_GET["jugadores"];$i++){
                    echo "Jugador$i<input type='text' name='j$i' value='' />";
                }
                echo "<button>Enviar</button></form>";
            }
        }
        ?>
    </body>
</html>
