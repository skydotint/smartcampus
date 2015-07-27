<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
	 	 <?php //var_dump($downloads); ?>
	<div class="leftMenu">
		<?php foreach($settings as $setting) { ?>					
		<div class="firstColumn">
			<h4 style="background: #278AF0">দরকারি লিঙ্কস ( অন সাইট)</h4>
				<ul>
					<?php echo $setting['importantlinks']; ?>
				</ul>
		</div>
		<div class="clear margin15"></div>
		<div class="secondColumn">
			<h4 style="background: #7AB700">দরকারি লিঙ্কস ( অফ সাইট)</h4>
				<ul>
					 <?php echo $setting['importantlinksoffsite']; ?>
				</ul>
		</div>
		<?php } ?>
		
		<div class="clear margin15"></div>
		<div class="secondColumn">
			<h4 style="background: #7AB700">ডাউনলোড কর্নার </h4>
				<ul>
				<?php foreach($downloads as $download) { ?>	
				<li>
				<span class="glyphicon glyphicon-menu-right"></span>
				<a target="_blank" href="<?php echo base_url(); ?>uploads/downloads/<?php echo $download['attachment']; ?>"><?php echo $download['downloadtitle']; ?></a>
				</li>	
				<?php } ?>
				</ul>
		</div>
		
		<div class="clear margin15"></div>
		<div class="secondColumn">
			<h4 style="background: #7AB700">নোটিশ বোর্ড</h4>
				<ul>
				<?php foreach($notices as $notice) { ?>	
				<li>
				<span class="glyphicon glyphicon-menu-right"></span>
				<a href="<?php echo base_url(); ?>notice/<?php echo $notice['noticeid']; ?>"><?php echo $notice['noticetitle']; ?></a>
				</li>	
				<?php } ?>
				</ul>
		</div>
		
		
	</div>
</div>