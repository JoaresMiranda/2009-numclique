	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
		<div>
			<input type="text" value="busca" name="s" id="s" onfocus="if(this.value=='busca')this.value=''" onblur="if(this.value=='')this.value='busca'" />
			<input type="image" id="searchsubmit" src="<?php bloginfo('url'); ?>/wp-content/themes/numclique_v2/images/bt-busca.gif" value="Buscar" />
		</div>
	</form>
