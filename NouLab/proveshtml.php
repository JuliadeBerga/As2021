<html>
	<head>
	    <title>prova canviar fons</title>
	</head>
    <style type="text/css">
        
        body {
            background-repeat: no-repeat;
            background-size: cover;
            resize: both;
            width: screen.width;
            height: screen.height;
        }

        img.webgl {
            width: 700px;
            height: 400px;
            margin-top: 20px;
            margin-left: 90px;
            position: relative;
        }
        
        img.esq {
            width: 15%;
            height: 50%;
            margin-left: 20px;
            position: relative;
        }
        
        img.dre {
            width: 15%;
            height: 50%;
            position: relative;
            margin-left: 170px;
        }
        
        p.a {
            display: inline-block;
            padding: 5px;
            margin-right: 500px;
            margin-left: 300px;
            font-size: 200%;
            text-align: center; 
        }
        
        p.b {
            display: inline-block;
            padding: 5px;
            margin-right: 2px;
            font-size: 200%;
            text-align: center;
        }
        
        a.c {
            display: inline-block;
            padding: 5px;
            color: black;
            margin-left: 270px;
            font-size: 200%;
            padding-bottom: 1px;
            text-decoration: none;
            position: relative;
            text-align: center;
            bottom: -90px;
        }

    </style>
    <body
        <?php $nivell = $_GET["numero"];
        switch ($nivell) {
            case 1: 
            ?>
                background= "/SuperMario/Escenari/1.jpg"
            <?php
                break;
            case 2:
            ?>
                background = "/SuperMario/Escenari/2.jpg"
            <?php
                break;
            case 3:
            ?>
                background = "/SuperMario/Escenari/3.jpg"
            <?php
                break;
            case 4: 
            ?>
                background = "/SuperMario/Escenari/4.jpg"
            <?php
                break;
            case 5:
            ?>
                background = "/SuperMario/Escenari/5.jpg"
            <?php
                break;
            case 6:
            ?> 
                background = "/SuperMario/Escenari/6.jpg"
            <?php
                break;
            case 7:
            ?>
                background = "/SuperMario/Escenari/7.jpg"
            <?php
                break;
            case 8:
            ?>
                background= "/SuperMario/Escenari/8.jpg"
            <?php
                break;
            case 9:
            ?>
                 background= "/SuperMario/Escenari/9.jpg"
            <?php
                break;
            case 10:
            ?>
                background= "/SuperMario/Escenari/10.jpg"
            <?php
                break;
            case 11:
            ?>
                background = "/SuperMario/Escenari/11.jpg"
            <?php
                break;
            case 12:
            ?>
                background = "/SuperMario/Escenari/12.jpg"
            <?php
                break;
        }
        ?>
    >
        
        <div style = "position:relative, top:10px, left: 200px">
            <p class="a"> <b> Nivell: <?php echo $nivell = $_GET["numero"]; ?>  </b></p>
            <p class="b"> <b> Puntuació: </b></p>
        </div>
        
        
        <img class="esq" src="SuperMario/Personatge/SuperMario.png">
        <img class = "webgl" src="/descarga.png">
        <img class="dre" src="SuperMario/Amics/Luigi2.png">
        
        <!-- img src="/Sims/Personatge/1.png" height="500" width="190">
        <img src="/Sims/Personatge/2.png" height="500" width="500" align = "right" -->
        
        <div style = "position:relative, bottom:10px, left: 200px" >
            <a class="c" href=" "> <b> Rànquing  </b> </a>
            <a class="c" href=" "> <b> Tutorials </b> </a>
            <a class="c" href=" "> <b> Objectius </b> </a>
        </div>
	</body>
	</html>