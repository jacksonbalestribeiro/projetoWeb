<?php include_once("header.php");?>
		<link rel="stylesheet" href="lib/plyr/dist/plyr.css">

		<section>
			<div id="banner">			
				<h1>
					Orlando City
					<small>Orlando City Soccer Club</small>
				</h1>	
			</div>
			<div id="call-to-action">
				<div class="container">
						<div>
				 			<h2>Videos</h2>
				 			<hr>
				 		</div>	
				 		
					<div class="mx-auto video-player"> <!-- mx-auto é uma classe do Bootstrap que alinha os elementos ao centro, e a video-player explico no 7º passo abaixo -->
             		<video id="player" src="mp4/highlights.mp4" type="video/mp4" controls data-poster="img/highlights.jpg">
             			<track kind="captions" label="Português (BR)" src="vtt/legendas.vtt" srclang="pt-br" default>
             		</video>
 
        			</div>
						<div class="row thumbnails owl-carousel owl-theme" style="top: 62px;">
				 			<div class="item" data-video="highlights">
				 				<div class="item-inner">
				 					<img src="img/highlights.jpg" alt="Noticia">
				 					<h3>Shogas voadoras 01</h3>
				 				</div>
				 			</div>	
				 			<div class="item" data-video="Orlando_City_Foundation_2015">
				 				<div class="item-inner">	
				 					<img src="img/Orlando_City_Foundation_2015.jpg" alt="Noticia">
				 					<h3>Shogas voadoras 02</h3>
				 				</div>
				 			</div>
				 		</div>
				</div>
			</div>
		</section>

		<?php include_once("footer.php");?>

		<script src="lib/plyr/dist/plyr.js"></script>
		<script>
			(function(d, p){
		    	var a = new XMLHttpRequest(),
		        	b = d.body;
		    		a.open("GET", p, true);
		    		a.send();
		    	a.onload = function(){
		        	var c = d.createElement("div");
		        	c.style.display = "none";
		        	c.innerHTML = a.responseText;
		        	b.insertBefore(c, b.childNodes[0]);
		    	}
			
			})(document, "lib/plyr/dist/plyr.svg");
		</script>
		<script>
		$(function(){

			$(".thumbnails .item").on("click", function(){

				$("video").attr({
					"src":"mp4/"+$(this).data('video')+".mp4",
					"data-poster":"img/"+$(this).data('video')+".jpg"
				});

			});

			const player = new Plyr('#player');
		});
		</script> 