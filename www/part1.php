<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

<section id="slideshow">
    <div class="container">
            <div class="c_slider"></div>
            <div class="slider">
                <figure>
                    <img src="../images/poudres.png" alt="" width="640" height="310" />
                </figure>
                <figure>
                    <img src="../images/enfants1.png" alt="" width="640" height="310" />
                </figure>
                <figure>
                    <img src="../images/enfants2.png" alt="" width="640" height="310" />
                </figure>
                <figure>
                    <img src="../images/enfants3.png" alt="" width="640" height="310" />
                </figure>
            </div>
            </div>
            <span id="sl_play" class="sl_command"></span>
            <span id="sl_pause" class="sl_command"></span>
            
            <span id="sl_i1" class="sl_command sl_i"></span>
            <span id="sl_i2" class="sl_command sl_i"></span>
            <span id="sl_i3" class="sl_command sl_i"></span>
            <span id="sl_i4" class="sl_command sl_i"></span>
            
            <span id="timeline"></span>

            <a class="play_commands pause" href="#sl_pause" title="Maintain paused">Pause</a>
            <a class="play_commands play" href="#sl_play" title="Play the animation">Play</a>

            <a class="commands prev commands1" href="#sl_i4" title="Aller à la dernière slide">&lt;</a>
            <a class="commands next commands1" href="#sl_i2" title="Aller à la 2ème slide">&gt;</a>
            <a class="commands prev commands2" href="#sl_i1" title="Aller à la 1ère slide">&lt;</a>
            <a class="commands next commands2" href="#sl_i3" title="Aller à la 3ème slide">&gt;</a>
            <a class="commands prev commands3" href="#sl_i2" title="Aller à la 2ème slide">&lt;</a>
            <a class="commands next commands3" href="#sl_i4" title="Aller à la 4ème slide">&gt;</a>
            <a class="commands prev commands4" href="#sl_i3" title="Aller à la 3ème slide">&lt;</a>
            <a class="commands next commands4" href="#sl_i1" title="Aller à la 1ère slide">&gt;</a>

            <ul class="dots_commands">
                <li><a title="Afficher la slide 1" href="#sl_i1">Slide 1</a></li>
                <li><a title="Afficher la slide 2" href="#sl_i2">Slide 2</a></li>
                <li><a title="Afficher la slide 3" href="#sl_i3">Slide 3</a></li>
                <li><a title="Afficher la slide 4" href="#sl_i4">Slide 4</a></li>
            </ul>
    </div>   
</section>
<!------------------------------------------ RESPONSIVE DESIGN ---------------------------------->
    <section class="container" >
        
            <div class="row" id="pad1">
                <span class="col-lg-5 offset-lg-4 text-center Dosis-Bold">"RESPONSIVE DESIGN MEANS ON</span>
            </div> 
            <div class="row">
                <span class="col-lg-5 offset-lg-4 text-center Dosis-Bold"> WEBSITE FOR ALL OF YOUR DEVICES."</span>
            </div>
            
            <div class="row" id="pad2">
                <div class="col-2 offset-2 col-lg-2 offset-lg-4">
                    <img class="icone" src="../images/bateau-icones.png" alt"" />
                </div>

                <div class="col-2 col-lg-2">
                    <img class="icone" src="../images/mobile-icones.png" alt"" />
                </div>

                <div class="col-2 col-lg-2">
                    <img class="icone" src="../images/icones-calques.png" alt"" />
                </div>
            </div>   
    </section>

    <section class="container">
        <div class="row" id="pad2">
            <div class="col-lg-3 offset-lg-1 text-center">
                <h3 class="Dosis-Bold">STRATEGY</h3>
                <p class="Dosis-ExtraLight3">Aenean rhoncus consequat imperdiet. Aliquam id faucibus ex. Donec vel dapibus orci. Vivamus congue lacus at erat faucibus fringilla. Suspendisse et aliquet nisl. Mauris et consequat tortor, ac blandit libero. Ut auctor consectetur eros quis lacinia.Aenean rhoncus consequat imperdiet. Aliquam id faucibus ex.</p>
            </div>

            <div class="col-lg-3 offset-lg-1 text-center">
                <h3 class="Dosis-Bold">MOBILE</h3>
                <p class="Dosis-ExtraLight3">Aenean rhoncus consequat imperdiet. Aliquam id faucibus ex. Donec vel dapibus orci. Vivamus congue lacus at erat faucibus fringilla. Suspendisse et aliquet nisl. Mauris et consequat tortor, ac blandit libero. Ut auctor consectetur eros quis lacinia.Aenean rhoncus consequat imperdiet. Aliquam id faucibus ex.</p>
            </div> 
            
            <div class="col-lg-3 offset-lg-1 text-center">
                <h3 class="Dosis-Bold">RESPONSIVE</h3>
                <p class="Dosis-ExtraLight3">Aenean rhoncus consequat imperdiet. Aliquam id faucibus ex. Donec vel dapibus orci. Vivamus congue lacus at erat faucibus fringilla. Suspendisse et aliquet nisl. Mauris et consequat tortor, ac blandit libero. Ut auctor consectetur eros quis lacinia.Aenean rhoncus consequat imperdiet. Aliquam id faucibus ex.</p>
            </div>    
        </div>
    </section>

 <!-- we are small compagny that ----------------------------------------------------------------------------------->   
    <section class="fond-we">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3" id="pad3">
                    <h3 class="Dosis-Bold">WE ARE A SMALL COMPAGNY THAT DOES BIG THINGS</h3>
               </div> 
                   
                <div class="col-lg-7"> <!--- super col 7 ------------------------------------->
                    <div class="col-12">
                        <span class="Dosis-ExtraLight3">NamNam eget nulla quis ipsum commodo fermentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere</span>
                        <span class="Dosis-ExtraLight3">cubilia Curae; Quisque fermentum dolor neque, posuere porta orci ultrices non.NamNam eget nulla quis ipsum commodo.</span>
                    </div>

                    <div class="row">
                        <div class="col-5" id="pad4">
                            <img src="../images/enfants1.png" alt="">
                        </div>

                        <div class="col-7" id="pad4">
                            <div class="Dosis-ExtraLight3" >2 enfants<br /></div>
                            <div class="Dosis-ExtraLight3" id="pad6">Ut ante nunc, feugiat nec congue vel, tristique sit amet nisi. Nunc aliquet, ante a efficitur faucibus, nulla dui tincidunt sem, at dapibus libero sem in orci. Praesent lacinia sodales velit ac suscipit.</br></div>
                            <div class="Dosis-Extralight3" id="pad6">#deuxenfants</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-5" id="pad4">
                            <img src="../images/enfants2.png" alt="">
                        </div>

                        <div class="col-7" id="pad4">                        
                            <div class="Dosis-ExtraLight3">Plein d'enfants<br /></div>
                            <div class="Dosis-ExtraLight3" id="pad6">Ut ante nunc, feugiat nec congue vel, tristique sit amet nisi. Nunc aliquet, ante a efficitur faucibus, nulla dui tincidunt sem, at dapibus libero sem in orci. Praesent lacinia sodales velit ac suscipit.</br></div>
                            <div class="Dosis-Extralight3"id="pad6">#pleindenfant</div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-5" id="pad4">                   
                            <img src="../images/enfants3.png" alt=""> 
                        </div>  

                        <div class="col-7" id="pad4">                       
                            <div class="Dosis-ExtraLight3">des mains d'enfants<br /></div>
                            <div class="Dosis-ExtraLight3" id="pad6">Ut ante nunc, feugiat nec congue vel, tristique sit amet nisi. Nunc aliquet, ante a efficitur faucibus, nulla dui tincidunt sem, at dapibus libero sem in orci. Praesent lacinia sodales velit ac suscipit.</br></div>
                            <div class="Dosis-Extralight3" id="pad6">#maindenfants</div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3" id="bordure"> <!-------------- super col 5 --------------------------->

                   	<div class="texte">
	                    <div class="col-12" id="pad5">
	                        <h4 class="Dosis-Bold1 text-center">VIVE LES ENFANTS</h4>
	                    </div>
	                   
	                    <div class="col-12">
	                        <span class="Dosis-ExtraLight3">+ Nunc malesuada varius.<br />
		                        + Nan at egestas sodales.<br />
		                        + Nulla et hendrerit leo.<br />
		                        + Vivanus libero porttitor.<br />
		                        + suspendisse convalis.<br />
		                        + Nunc arius elit sagittis
		                    </span>
	                    </div>

	                    <div class="col-12" id="pad5">
	                    	<h4 class="Dosis-Bold1 text-center">ILS S'EN METTENT PARTOUT</h4>
	                    </div>

	                    <div class="col-12">
	                    	<span class="Dosis-ExtraLight3">+ Donec in tempor urna.<br />
	                    		+ Duis mattis dictum.<br />
	                    		+ Aenean obortis egestas.<br />
	                    		+ Nunc pibus nunc.<br />
	                    		+ Aliquam aliquet.<br />
	                    		+ Ut tempus congue.<br />
	                    	</span>
	                    </div>

	                    <div class="col-12" id="pad5">
	                    	<h4 class="Dosis-Bold1 text-center">A LA DOUCHE!</h4>
	                    </div>

	                    <div class="col-12">
	                    	<span class="Dosis-Extralight3">+ Nulla id orci non velit.<br />
	                    		+ Ullamcorper consectetur.<br />
	                    		+ In vitae purus vel arcu.<br />
	                    		+ Vehicula pretium.<br />
	                    		+ Nam at egestas sodales.<br />
	                    		+ Aenean obortis egestas.
	                    	</span>
	                    </div>
	                </div>
                </div>
            </div>
        </div> 
    </section>

