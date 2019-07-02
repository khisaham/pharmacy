<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<base href="<?php echo base_url();?>" />
	<title><?php echo $this->config->item('company').' -- '.$this->lang->line('common_powered_by').' Appex Software Ltd' ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/ospos.css"/>
	<link rel="stylesheet" type="text/css" href="css/ospos_print.css" media="print" />
	
	<?php if ($this->input->cookie('debug') == "true" || $this->input->get("debug") == "true") : ?>
		<!-- start js template tags -->
		<script type="text/javascript" src="js/jquery-1.8.3.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery-ui-1.11.4.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.ajax_queue.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.autocomplete.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.bgiframe.min.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.color.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.form-3.51.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.jkey-1.1.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.metadata.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.tablesorter-2.20.1.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.tablesorter.staticrow.js" language="javascript"></script>
		<script type="text/javascript" src="js/jquery.validate-1.13.1-min.js" language="javascript"></script>
		<script type="text/javascript" src="js/common.js" language="javascript"></script>
		<script type="text/javascript" src="js/date.js" language="javascript"></script>
		<script type="text/javascript" src="js/imgpreview.full.jquery.js" language="javascript"></script>
		<script type="text/javascript" src="js/manage_tables.js" language="javascript"></script>
		<script type="text/javascript" src="js/nominatim.autocomplete.js" language="javascript"></script>
		<script type="text/javascript" src="js/phpjsdate.js" language="javascript"></script>
		<script type="text/javascript" src="js/swfobject.js" language="javascript"></script>
		<script type="text/javascript" src="js/tabcontent.js" language="javascript"></script>
		<script type="text/javascript" src="js/thickbox.js" language="javascript"></script>
		<!-- end js template tags -->
	<?php else : ?>
		<!-- start minjs template tags -->
		<script type="text/javascript" src="dist/opensourcepos.min.js?rel=a8ae30ad50" language="javascript"></script>
		<!-- end minjs template tags -->       
	<?php endif; ?>

	<script type="text/javascript">
		// live clock
	
		function clockTick() {  
			setInterval('updateClock();', 1000);  
		}

		// start the clock immediatly
		clockTick();

		var now = new Date(<?php echo time() * 1000 ?>);

		function updateClock() {
			now.setTime(now.getTime() + 1000);
			
			document.getElementById('liveclock').innerHTML = phpjsDate("<?php echo $this->config->item('dateformat').' '.$this->config->item('timeformat') ?>", now);
		}
	</script>

	<style type="text/css">
		html {
			overflow: auto;
		}
	</style>
</head>

<body>
	<div id="menubar" style="display: block;">
		<div id="menubar_container">
			<div id="menubar_company_info">
				<span id="company_title"><?php echo $this->config->item('company'); ?></span><br />
				<span style='font-size:8pt;'><?php echo $this->lang->line('common_powered_by').' Appex Software Ltd'; ?></span>
			</div>

			<div id="menubar_navigation">
				<?php
				foreach($allowed_modules->result() as $module)
				{
				?>
					<div class="menu_item">
						<a href="<?php echo site_url("$module->module_id");?>">
						<img src="<?php echo base_url().'images/menubar/'.$module->module_id.'.png';?>" border="0" alt="Menubar Image"></a><br>
						<a href="<?php echo site_url("$module->module_id");?>"><?php echo $this->lang->line("module_".$module->module_id) ?></a>
					</div>
				<?php
				}
				?>
			</div>
			
			<div id="menubar_footer">
				<?php echo $this->lang->line('common_welcome')." $user_info->first_name $user_info->last_name! | "; ?>
				<?php echo anchor("home/logout", $this->lang->line("common_logout")); ?>
			</div>
			
			<div id="menubar_date">
				<div id="liveclock"><?php echo date($this->config->item('dateformat').' '.$this->config->item('timeformat')) ?></div>
			</div>
		</div>
	</div>
	<div id="content_area_wrapper">
	<div id="content_area">
 