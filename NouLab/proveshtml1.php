<html>
	<head>
	    <title>prova canviar fons</title>
	</head>
    <style type="text/css">
        
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }

    </style>
    <body
        <?php $nivell = $_GET["numero"];
        switch ($nivell) {
            case 1: 
            ?>
                background= "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/1.jpg"
            <?php 
                break;    
            case 2: 
            ?>
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/2.png"
            <?php
                break;
            case 3:
            ?>
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/3.png"
            <?php
                break;
            case 4: 
            ?>
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/4.jpg"
            <?php
                break;
            case 5:
            ?>
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/5.jpg"
            <?php
                break;
            case 6:
            ?> 
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/6.jpg"
            <?php
                break;
            case 7:
            ?>
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/7.png"
            <?php
                break;
            case 8:
            ?>
                background= "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/8.jpg"
            <?php
                break;
            case 9:
            ?>
                 background= "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/9.png"
            <?php
                break;
            case 10:
            ?>
                background= "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/10.png"
            <?php
                break;
            case 11:
            ?>
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/11.jpg"
            <?php
                break;
            case 12:
            ?>
                background = "/Jocs-20200127T141723Z-001/Jocs/Sims/Escenari/12.png"
            <?php
                break;
        }
        ?>
    >
                
        <div style = "position:relative, top:10px, left: 200px">
            <pre>Nivell:                 Puntuació: </pre> 
        </div>
        
        <img src="/Jocs-20200127T141723Z-001/Jocs/Sims/Personatge/1.png" height="500" width="190">
        <img src="/Jocs-20200127T141723Z-001/Jocs/Sims/Personatge/2.png" height="500" width="500" align = "right">
        
        <div bottom="0" >
            <p style="text-align:right">Rànquing</p>
            <p></p>
            <pre align ="bottom"> Rànking:           Tutorials:           Objectius: </pre>
        </div>

        <a href="/entrarPantalla.html">elegir pantalla</a>
	</body>
	</html>