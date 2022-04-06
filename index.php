<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootrstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="css/styles.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <!-- título de página -->
    <title>Restaurante</title>
    <!-- ícono de pàgina -->
    <link rel="shortcut icon" href="img/icono.svg" type="image/x-icon">
    <!-- fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&family=Quicksand:wght@600&family=Special+Elite&display=swap" rel="stylesheet">
    <!-- javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        if (file_exists('xml/menu.xml')) {
            $menu = simplexml_load_file('xml/menu.xml');
        } else {
            exit('Error abriendo menu.xml.');
        }
    ?>
    <div class="column-100 row">
        <div class="column-33">
        <div class="columnimg1">
                <img src="img/titulo.png" alt="">

            </div>
            <div class="column1">
                <?php
                    $aux=[];
                    foreach($menu->plato as $plato){
                        if(!in_array((string)$plato['tipo1'],$aux)){
                            
                            echo '<h1>'.$plato['tipo1'].'</h2>'; 
                        
                           /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
                                echo $plato['tipo'];
                            } */
                            array_push($aux,(string)$plato['tipo1']);
                        }
                        if($plato['tipo1']=='TAPAS'){
                            echo '<br>';
                            echo '<h2>'.$plato->titulo.'</h2>'.' ------------------------- ';
                            echo '<h3>'.$plato->precio.'</h3>';
                            echo '<p>'.'( '.$plato->descripcion.' -- '.$plato->calorias.' )'.'</p>';
                            if(isset($plato->caracteristicas->nombre['tema'])==(string)'gluten'){
                            echo '<img src="img/gluten.svg" alt="">';
                            }
                            if(isset($plato->caracteristicas->nombre['tema1'])=='picante'){
                                echo '<img src="img/picante.svg" alt="">';
                            }
                            if(isset($plato->caracteristicas->nombre['tema2'])=='estrella'){
                                echo '<img src="img/estrella.svg" alt="">';
                            }
                            /* echo $plato->caracteristicas->nombre; */
                        }
                    }
                ?>
            </div>
            <div class="bravas">
                <div class="bravas">
                    <img src="img/bravas.png" alt="">
                </div>
            </div>
            <div class="column2">
                <?php
                        $aux=[];
                        foreach($menu->plato as $plato){
                            if(!in_array((string)$plato['tipo5'],$aux)){
                                
                                echo '<h1>'.$plato['tipo5'].'</h2>'; 
                            
                            /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
                                    echo $plato['tipo'];
                                } */
                                array_push($aux,(string)$plato['tipo5']);
                            }
                            if($plato['tipo5']=='PLATOS COMBINADOS'){
                                echo '<br>';
                                echo '<h2>'.$plato->titulo.'</h2>'.' ------------------------- '.'<h3>'.$plato->precio.'</h3>';
                                echo '<p>'.'( '.$plato->descripcion.' -- '.$plato->calorias.' )'.'</p>';
                                if(isset($plato->caracteristicas->nombre['tema'])==(string)'gluten'){
                                    echo '<img src="img/gluten.svg" alt="">';
                                    }
                                if(isset($plato->caracteristicas->nombre['tema1'])==(string)'picante'){
                                    echo '<img src="img/picante.svg" alt="">';
                                }
                                if(isset($plato->caracteristicas->nombre['tema2'])==(string)'estrella'){
                                    echo '<img src="img/estrella.svg" alt="">';
                                }
                                /* echo $plato->caracteristicas->nombre; */
                            }
                        }
                    ?>
            </div>  
        </div>
        <div class="column-33 border-column">
            <div class="columnimg">
                <img src="img/titulo.png" alt="">

            </div>
            <div class="column3">
                    <?php
                            $aux=[];
                            foreach($menu->plato as $plato){
                                if(!in_array((string)$plato['tipo4'],$aux)){
                                    
                                    echo '<h1>'.$plato['tipo4'].'</h2>'; 
                                
                                /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
                                        echo $plato['tipo'];
                                    } */
                                    array_push($aux,(string)$plato['tipo4']);
                                }
                                if($plato['tipo4']=='HAMBURGUESAS'){
                                    echo '<br>';
                                    echo '<h2>'.$plato->titulo.'</h2>'.' ------------------------- '.'<h3>'.$plato->precio.'</h3>';
                                    echo '<p>'.'( '.$plato->descripcion.' -- '.$plato->calorias.' )'.'</p>';
                                    if(isset($plato->caracteristicas->nombre['tema'])==(string)'gluten'){
                                        echo '<img src="img/gluten.svg" alt="">';
                                        }
                                    if(isset($plato->caracteristicas->nombre['tema1'])==(string)'picante'){
                                        echo '<img src="img/picante.svg" alt="">';
                                    }
                                    if(isset($plato->caracteristicas->nombre['tema2'])==(string)'estrella'){
                                        echo '<img src="img/estrella.svg" alt="">';
                                    }
                                    /* echo $plato->caracteristicas->nombre; */
                                }
                            }
                        ?>
            </div>
            <div>
                <div class="hamburguesa">
                    <img src="img/hambur.png" alt="">
                </div>
            </div>
            <div>
                    <div class="frankfurt">
                        <img src="img/frankfurt.png" alt="">
                    </div>
            </div>
            <div>
                <div class="bocata">
                    <img src="img/bocata.png" alt="">
                </div>
            </div>
                <div class="columnleyenda">
                    <div class="padding">
                        <img src="img/gluten.svg" alt=""><p>Que lleva gluten</p>
                        <img src="img/picante.svg" alt=""><p>Que es picante</p>
                        <img src="img/estrella.svg" alt=""><p>Es plato estrella</p>
                    </div>

                </div>  

            </div>
            <div class="column-33">
                <div class="column1 padding-top">
                        <?php
                            $aux=[];
                            foreach($menu->plato as $plato){
                                if(!in_array((string)$plato['tipo2'],$aux)){
                                    
                                    echo '<h1>'.$plato['tipo2'].'</h2>'; 
                                
                                /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
                                        echo $plato['tipo'];
                                    } */
                                    array_push($aux,(string)$plato['tipo2']);
                                }
                                if($plato['tipo2']=='BOCATAS CALIENTES'){
                                    echo '<br>';
                                    echo '<h2>'.$plato->titulo.'</h2>'.' ------------------------- '.'<h3>'.$plato->precio.'</h3>';
                                    echo '<p>'.'( '.$plato->descripcion.' -- '.$plato->calorias.' )'.'</p>';
                                    if(isset($plato->caracteristicas->nombre['tema'])==(string)'gluten'){
                                        echo '<img src="img/gluten.svg" alt="">';
                                        }
                                    if(isset($plato->caracteristicas->nombre['tema1'])==(string)'picante'){
                                        echo '<img src="img/picante.svg" alt="">';
                                    }
                                    if(isset($plato->caracteristicas->nombre['tema2'])==(string)'estrella'){
                                        echo '<img src="img/estrella.svg" alt="">';
                                    }
                                    /* echo $plato->caracteristicas->nombre; */
                                }
                            }
                        ?>
                </div>
                <div class="column2">
                        <?php
                            $aux=[];
                            foreach($menu->plato as $plato){
                                if(!in_array((string)$plato['tipo3'],$aux)){
                                    
                                    echo '<h1>'.$plato['tipo3'].'</h2>'; 
                                
                                /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
                                        echo $plato['tipo'];
                                    } */
                                    array_push($aux,(string)$plato['tipo3']);
                                }
                                if($plato['tipo3']=='BOCATAS FRIOS'){
                                    echo '<br>';
                                    echo '<h2>'.$plato->titulo.'</h2>'.' ------------------------- '.'<h3>'.$plato->precio.'</h3>';
                                    echo '<p>'.'( '.$plato->descripcion.' -- '.$plato->calorias.' )'.'</p>';
                                    if(isset($plato->caracteristicas->nombre['tema'])==(string)'gluten'){
                                        echo '<img src="img/gluten.svg" alt="">';
                                        }
                                    if(isset($plato->caracteristicas->nombre['tema1'])==(string)'picante'){
                                        echo '<img src="img/picante.svg" alt="">';
                                    }
                                    if(isset($plato->caracteristicas->nombre['tema2'])==(string)'estrella'){
                                        echo '<img src="img/estrella.svg" alt="">';
                                    }
                                    /* echo $plato->caracteristicas->nombre; */
                                }
                            }
                        ?>
                </div>

            </div>
        </div>
            <?php
/*                 foreach($menu->plato as $plato){
                    echo $plato->titulo;
                    echo '<br>';
                    echo $plato->descripcion;
                    echo '<br>';
                    if(isset($plato->caracteristicas->nombre['tema'])=='gluten'){
                    echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M416.1 128.1C407.6 138.3 392.4 138.3 383 128.1C373.7 119.6 373.7 104.4 383 95.03L471 7.03C480.4-2.343 495.6-2.343 504.1 7.03C514.3 16.4 514.3 31.6 504.1 40.97L416.1 128.1zM327.2 230.1L295.3 261.1C312.5 263.6 329.5 268.8 345 277.4C329.1 303.9 320 334.9 320 368C320 369 320 370.1 320 371.1C290.9 375.6 260 366.6 237.6 344.1L225.4 331.9L193.5 363.8C221.1 366.5 249.7 378.8 271.5 400.7L294.2 423.3L271.5 445.9C234 483.4 173.3 483.4 135.8 445.9L123.5 433.7L54.63 502.6C42.13 515.1 21.87 515.1 9.372 502.6C-3.124 490.1-3.124 469.9 9.372 457.4L78.29 388.5L67.88 378C30.39 340.6 30.39 279.8 67.88 242.3L90.51 219.6L113.1 242.3C134.1 263.3 146.3 289.7 149.7 317.1L180.1 286.6L169.7 276.2C132.2 238.7 132.2 177.9 169.7 140.5L192.3 117.8L214.1 140.5C235.1 161.4 248.1 187.9 251.5 215.3L281.9 184.8L271.5 174.4C234 136.9 234 76.12 271.5 38.63L294.2 15.1L316.8 38.63C321.3 43.15 325.4 47.94 329.1 52.93L375 7.029C384.4-2.343 399.6-2.343 408.1 7.029C418.3 16.4 418.3 31.6 408.1 40.97L350.7 99.2C355.9 120.7 355.4 143.2 349.3 164.5C369.6 158.7 391.1 157.1 411.7 162.4L471 103C480.4 93.66 495.6 93.66 504.1 103C514.3 112.4 514.3 127.6 504.1 136.1L458.8 183.1C463.3 186.3 467.6 189.8 471.7 193.7C426.4 199.9 386.5 223.5 359.1 257.4C352 253.3 345.4 248.3 339.4 242.3L327.2 230.1zM352 368C352 288.5 416.5 224 496 224C575.5 224 640 288.5 640 368C640 447.5 575.5 512 496 512C416.5 512 352 447.5 352 368zM496 464C509.3 464 520 453.3 520 440C520 426.7 509.3 416 496 416C482.7 416 472 426.7 472 440C472 453.3 482.7 464 496 464zM479.1 288V368C479.1 376.8 487.2 384 495.1 384C504.8 384 511.1 376.8 511.1 368V288C511.1 279.2 504.8 272 495.1 272C487.2 272 479.1 279.2 479.1 288z"/></svg>';
                    }
                    if(isset($plato->caracteristicas->nombre['tema1'])=='picante'){
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M465 134.2c21.46-38.38 19.87-87.17-5.65-123.1c-7.541-10.83-22.31-13.53-33.2-5.938c-10.77 7.578-13.44 22.55-5.896 33.41c14.41 20.76 15.13 47.69 4.098 69.77C407.1 100.1 388 95.1 368 95.1c-36.23 0-68.93 13.83-94.24 35.92L352 165.5V256h90.56l33.53 78.23C498.2 308.9 512 276.2 512 239.1C512 198 493.7 160.6 465 134.2zM320 288V186.6l-52.95-22.69C216.2 241.3 188.5 400 56 400C25.13 400 0 425.1 0 456S25.13 512 56 512c180.3 0 320.1-88.27 389.3-168.5L421.5 288H320z"/></svg>';
                    }
                    if(isset($plato->caracteristicas->nombre['tema2'])=='estrella'){
                        echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z"/></svg>';
                    }
                    echo $plato->caracteristicas->nombre;
                    echo '<br>';
                } */
            ?>
    </div>
</body>
</html>