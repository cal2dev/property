<?php $this->load->view('inc/header'); ?>
<body class="skin-blue fixed layout-top-nav" style="margin: 0px; overflow: visible;" >
	<div class="wrapper" id="wrapper" ng-controller="onBoardController">

        <?php $this->load->view('inc/nav');?>

       <!--  <div id="loading-bar" class="bar"></div> -->
			<div id="loading_view" >
				<h1><i class='fa fa-cog fa-spin'></i> ........Just a Moment </h1>
			</div>
            <!-- <div class="container-fluid page {{ pageClass }}" ng-view></div> -->
            <div ui-view></div>
            <!-- /#page-wrapper -->

        <!-- /#wrapper -->

<?php $this->load->view('inc/footer');?>
