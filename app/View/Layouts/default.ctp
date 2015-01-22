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
			//echo $this->Html->css('scriptHome');
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
			echo $this->Html->script('bootstrap.min');
			echo $this->Html->script('prototype');
			echo $this->Html->script('scriptaculous');
		?>
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

	<script type="text/javascript">
	function faq_toggle(pdiv) {
	var action = (pdiv.style.display == "block") ? "none" : "block";
	pdiv.style.display = action;
	}
	function faq_toggle_all(action) {
	var faqs = document.getElementById('faqs');
	var pfaqs = faqs.getElementsByTagName('p');
	for(i=0;i<pfaqs.length;i++) {
	pfaqs[i].style.display=action;
	}
	}

	var faqs = document.getElementById('faqs');
	var pfaqs = faqs.getElementsByTagName('p');
	var hfaqs = faqs.getElementsByTagName('h4');
	for(i=0;i<pfaqs.length;i++) {
	//hfaqs[i].setAttribute("onclick","faq_toggle(pfaqs["+i+"])"); // Does not work in IE.
	hfaqs[i].onclick = function(){
	var faqs = document.getElementById('faqs');
	var pfaqs = faqs.getElementsByTagName('p');
	var hfaqs = faqs.getElementsByTagName('h4');
	for(j=0;j<hfaqs.length;j++) {
	if(hfaqs[j] === this) {
	faq_toggle(pfaqs[j]);
	}
	}
	}
	hfaqs[i].style.fontStyle="italic";
	hfaqs[i].style.cursor="pointer";
	hfaqs[i].style.color="#006699";
	pfaqs[i].style.display="none";
	}
	</script>

	</body>
</html>