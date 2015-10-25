<?php require_once "helper.php"; ?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap_v3/css/bootstrap.css">

	<link rel="stylesheet" type="text/css" href="bootstrap_v3/css/bootstrap-theme.css">
</head>
<body>
	<div class="container">
		<div class ="row">
			<!-- LeftSide -->
			<div class = "col-lg-4">
				<div role="tabpanel">

				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active">
				    	<a href="#old" aria-controls="old" role="tab" data-toggle="tab">Old Testament</a>
				    </li>
				    <li role="presentation">
				    	<a href="#new" aria-controls="new" role="tab" data-toggle="tab">New Testament</a>
				    </li>
				    
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active fade in" id="old">
				    	<table class="table table-condensed table-bordered">
				    		<?php for( $i=0; $i < 39; $i++ ): ?>
				    		<tr>
				    			<td><?= $books[$i]; ?></td>
				    			<td>
				    				<button class="btn btn-primary read" data-verse="<?= $verse[$i]; ?>">Read</button>
				    			</td>
				    			<td>
				    				<button class="btn btn-info info" data-info="<?= $info[$i]; ?>">Info</button>
				    			</td>
				    			<td>
				    				<button class="btn btn-danger">Watch</button>
				    			</td>
				    		</tr>
				    		<?php endfor; ?>
				    	</table>
				    </div>
				    <div role="tabpanel" class="tab-pane fade" id="new">
				    	<table class="table table-condensed table-bordered">
				    	<?php for( $i=39; $i < 66; $i++ ): ?>
				    	<tr>
				    		<td><?= $books[$i]; ?></td>
				    		<td>
				    			<button class="btn btn-primary read" data-verse="<?= $verse[$i]; ?>">Read</button>
				    		</td>
				    		<td>
				    			<button class="btn btn-info info" data-info="<?= $info[$i]; ?>">Info</button>
				    		</td>
				    		<td>
				    			<button class="btn btn-danger">Watch</button>
				    		</td>
				    	</tr>
				    	<?php endfor; ?>
				    	</table>
				    </div>
				  </div>

				</div>
			</div>

			<!-- RightSide -->
			<div class="col-lg-8">
				<a href="#" class="thumbnail" data-toggle="tooltip" data-placement="left" data-title="Bible" >
					<img src="bootstrap_v3/img/bible.jpg" class="thumbnail">
				</a>
				<div id="content"></div>
			</div>
		</div> 
	</div>
	<script type="text/javascript" src = "bootstrap_v3/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src = "bootstrap_v3/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(function () {
			$(".read").click( function () {
				var verse = $(this).data('verse');

				$("#content").html("<p class='well'>"+verse+"</p>");
			});

			$(".info").click( function () {
				var info = $(this).data('info');

				$("#content").html("<p class='well'>"+info+"</p>");
			});
		});
	</script>
</body>
</html>