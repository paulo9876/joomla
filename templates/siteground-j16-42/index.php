<?php
		<div class="sitename">
			<h1><a href="<?php echo $this->baseurl ?>"><?php echo $app->getCfg('sitename'); ?></a></h1>
		</div>
		
		<div id="search">
			<jdoc:include type="modules" name="position-0" />
		</div>
				
	
	<div class="top-menu">
		<div id="sgmenu">
		<table cellspacing="0" cellpadding="0" border="0" style="margin:0 auto;">
		<tr>
		<td>
			<jdoc:include type="modules" name="menuload" />
		</td>	
		</tr>	
		</table>
		</div>
	</div>
	<div class="wrapcont">
			<?php if( $this->countModules('position-7') ) : ?>
		</section>
	</div>