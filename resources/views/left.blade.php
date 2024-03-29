<?php $user = Session::get('user'); ?>
<div class="col-sm-3">
			<!-- List-Group Panel -->
			@if(isset($user) && $user->level=='admin')
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-random"></span> Completely Synergize</h1>
				</div>
				<div class="list-group">
					<a href="#" class="list-group-item">Resource Taxing</a>
					<a href="#" class="list-group-item">Premier Niche Markets</a>
					<a href="#" class="list-group-item">Dynamically Innovate</a>
					<a href="#" class="list-group-item">Objectively Innovate</a>
					<a href="#" class="list-group-item">Proactively Envisioned</a>
				</div>
			</div>

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title"><span class="glyphicon glyphicon-cog"></span> Dramatically Engage</h1>
				</div>

				<div class="panel-body">
					<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible testing procedures for reliable supply chains. Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.</p>
					<p><button class="btn btn-default">Engage</button></p>
				</div>
			</div>
			@endif

			<!-- Text Panel -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<span class="glyphicon glyphicon-bullhorn"></span> 
						Active Predomination
					</h3>
				</div>
				<div class="panel-body">
					<p>Proactively envisioned multimedia based expertise and cross-media growth strategies.</p>
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default">Resource</button>
						<button type="button" class="btn btn-default">Envision</button>
						<button type="button" class="btn btn-default">Niche</button>
					</div>
				</div>
			</div>	
				
		</div><!--/Left Column-->
  