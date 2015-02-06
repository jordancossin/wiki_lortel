<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset('UTF-8'); ?>
		<title>
			<?php echo $this->fetch('title'); ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
			echo $this->Html->css('cake.generic');
			echo $this->Html->css('bootstrap.min');
			echo $this->Html->css('font-awesome.min');
			echo $this->Html->css('custom');
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
			echo $this->Html->script('bootstrap.min');
		?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<script>
				$.fn.pageMe = function(opts){
			var $this = this,
				defaults = {
					perPage: 7,
					showPrevNext: false,
					hidePageNumbers: false
				},
				settings = $.extend(defaults, opts);
			
			var listElement = $this;
			var perPage = settings.perPage; 
			var children = listElement.children();
			var pager = $('.pager');
			
			if (typeof settings.childSelector!="undefined") {
				children = listElement.find(settings.childSelector);
			}
			
			if (typeof settings.pagerSelector!="undefined") {
				pager = $(settings.pagerSelector);
			}
			
			var numItems = children.size();
			var numPages = Math.ceil(numItems/perPage);

			pager.data("curr",0);
			
			if (settings.showPrevNext){
				$('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
			}
			
			var curr = 0;
			while(numPages > curr && (settings.hidePageNumbers==false)){
				$('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
				curr++;
			}
			
			if (settings.showPrevNext){
				$('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
			}
			
			pager.find('.page_link:first').addClass('active');
			pager.find('.prev_link').hide();
			if (numPages<=1) {
				pager.find('.next_link').hide();
			}
			pager.children().eq(1).addClass("active");
			
			children.hide();
			children.slice(0, perPage).show();
			
			pager.find('li .page_link').click(function(){
				var clickedPage = $(this).html().valueOf()-1;
				goTo(clickedPage,perPage);
				return false;
			});
			pager.find('li .prev_link').click(function(){
				previous();
				return false;
			});
			pager.find('li .next_link').click(function(){
				next();
				return false;
			});
			
			function previous(){
				var goToPage = parseInt(pager.data("curr")) - 1;
				goTo(goToPage);
			}
			 
			function next(){
				goToPage = parseInt(pager.data("curr")) + 1;
				goTo(goToPage);
			}
			
			function goTo(page){
				var startAt = page * perPage,
					endOn = startAt + perPage;
				
				children.css('display','none').slice(startAt, endOn).show();
				
				if (page>=1) {
					pager.find('.prev_link').show();
				}
				else {
					pager.find('.prev_link').hide();
				}
				
				if (page<(numPages-1)) {
					pager.find('.next_link').show();
				}
				else {
					pager.find('.next_link').hide();
				}
				
				pager.data("curr",page);
				pager.children().removeClass("active");
				pager.children().eq(page+1).addClass("active");
			
			}
			};

			$(document).ready(function(){
				
			  $('#myTable').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:5});
				
			});
		</script>
		<script type="text/javascript">
		// Execution de cette fonction lorsque le DOM sera entièrement chargé
		$(document).ready(function() {
			// Masquage des réponses
			$("dd").hide();
			// CSS : curseur pointeur
			$("dt").css("cursor", "pointer");
			// Clic sur la question
			$("dt").click(function() {
				// Actions uniquement si la réponse n'est pas déjà visible
				if($(this).next().is(":visible") == false) {
					// Masquage des réponses
					$("dd").slideUp();
					// Affichage de la réponse placée juste après dans le code HTML
					$(this).next().slideDown();
				}
			});
		});
		</script>
	</head>
	<body>
		<div class="site-wrapper container-fluid">
			<div class="header">
				<?php
				if ($this->Session->read('Auth.User.id')){
					echo $this->element('navbar');
				}
				?>
			</div>
			<div class="content">
				<div class="container-fluid">
					<?php echo $this->Session->flash(); ?>
					
					<div class="content-wrapper">
						<?php
							echo $this->fetch('content');
							// /*Si l'utilisateur connecté*/
							//  if ($this->Session->read('Auth.User.id')){
							//  	echo $this->fetch('content');
							// }
							// else{
							// 	echo '<div class="error">Accès non autorisé. Veuillez vous authentifier</div>';
							// }
						?>
					</div>
				</div>
			</div>
			<div class="footer">
				
			</div>
		</div>

		<?php //echo $this->element('sql_dump'); ?> 
	</body>
</html>