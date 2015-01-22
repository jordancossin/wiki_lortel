<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('scriptHome');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	
	?>
</head>
<body>
<div id="container">
		<div id="header">
		<ul id="menu_horizontal" >
		<?php
		/*Si l'utilisateur connecté*/
		 if ($this->Session->read('Auth.User.id')){
			echo '<li class="dropdown">';
				echo $this->Html->link('Accueil',array('controller' => 'Users','action' => 'dashboard'));
			echo '</li >';
			echo '|<li class="dropdown">';
				echo $this->Html->link('Fournisseur',array('controller' => 'Providers','action' => 'search'));
			echo '</li>';
			echo '|<li class="dropdown">';
				echo $this->Html->link('Catalogue',array('controller' => 'Categories','action' => 'refprod')); 
			echo '</li>';
			echo '|<li class="dropdown">';
				echo $this->Html->link('Se déconnecter', array('controller' => 'Users', 'action' => 'logout'));
			echo '</li>';
			}
		else
		{
			
		}
		?>
		</ul>
		</div>
	</div>
	<div>
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>
	</div>
		<div id="footer">
		</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
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
</html>
