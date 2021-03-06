<?PHP
/**
 * Endpoint Manager FreePBX File
 *
 * @author Javier Pastor
 * @license MPL / GPLv2 / LGPL
 * @package Endpoint Manager
 */
$epm = FreePBX::create()->Endpointman;

if ((! isset($_REQUEST['subpage'])) || ($_REQUEST['subpage'] == "")) {
	$_REQUEST['subpage'] = "manager";
}

?>

<div class="container-fluid" id="epm_config">
	<h1><?php echo _("End Point Configuraction Manager")?></h1>
	<h2><?php echo _("Package Manager")?></h2>
	<div class="row">
		<div class="col-sm-12">
			<div class="fpbx-container">
				<div class="display no-border">
					<div class="nav-container">
						<div class="scroller scroller-left"><i class="glyphicon glyphicon-chevron-left"></i></div>
						<div class="scroller scroller-right"><i class="glyphicon glyphicon-chevron-right"></i></div>
						<div class="wrapper">
							<ul class="nav nav-tabs list" role="tablist" id="list-tabs-epm_config">
								<?php foreach($epm->myShowPage() as $key => $page) { ?>
									<li data-name="<?php echo $key?>" class="change-tab <?php echo $key == $_REQUEST['subpage'] ? 'active' : ''?>"><a href="#<?php echo $key?>" aria-controls="<?php echo $key?>" role="tab" data-toggle="tab"><?php echo $page['name']?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="tab-content display">
						<?php foreach($epm->myShowPage() as $key => $page) { ?>
							<div id="<?php echo $key?>" class="tab-pane <?php echo $key == $_REQUEST['subpage'] ? 'active' : ''?>">
								<?php echo $page['content']?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>