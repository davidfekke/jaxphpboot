

<?php
    $title = "Home";
    include 'header.php';
?>

    <div class="container">
		      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>JaxPHP example</h1>
        <p>Enough back-end and CMS for now. Time to talk about front-end design.</p>
		
		<p><a href="#" data-toggle="tooltip" title data-original-title="Default Bootstrap Tooltip">Twitter Bootstrap</a> is a free collection of tools for creating websites and web applications. It contains HTML and CSS-based design templates for typography, 	forms, buttons, navigation and other interface components, as well as optional JavaScript extensions. Bootstrap also offers responsive support so your websites can work well on mobile and desktop browsers.</p>

		<p>About the presenter: David Fekke is a software engineer based here in Jacksonville, FL and is the co-founder of the JaxNode User Group. He has experience building web applications built with PHP, ColdFusion, ASP.NET MVC and Node.js. He also develops mobile applications for iOS and Android devices.</p> 
        <p>
          <a class="btn btn-lg btn-primary" id="viewnavbardocs" href="#navbar" role="button">View navbar docs &raquo;</a>
        </p>
      </div>
	  
	<div class="row">
		<div class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
			  <li class="active">
				<a href="#">
				  <span class="badge pull-right">42</span>
				  Members
				</a>
			  </li>
			</ul>
		</div>
		<div class="col-md-10">
			<button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#myModal">
				I dare you to press me!
			</button>
		</div>
	</div>
	
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			  </div>
			  <div class="modal-body">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
    </div> <!-- /container -->

<?php
    include 'footer.php';
?>

