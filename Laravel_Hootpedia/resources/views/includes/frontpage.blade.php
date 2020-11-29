<div class="text-center">
	<!--Article Example-->
	<h1 class="pt-5">Articles/Discussions</h1>
	<div class="d-inline">
		<p>Article blocks go here.</p>
		
		<?php $count = DB::table('articles')->count(); ?>
		@for ($i = 0; $i < 5; $i++)
		<!-- Cards for user Discussions -->
		<div class="card mx-auto my-4 d-flex justify-content-center shadow" style="width: 60%; min-width:25rem;">
			<h2 class="border border-top-0 border-left-0 border-right-0 py-2">Topic</h2>
			<div class="card-body row text-left">
				<div class="col-3 text-center p-1">
					<img class="img-fluid border rounded-circle"
						 src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
						 style="max-width:100px; height:auto;">
				</div>
				<div class="col-9">
					<h5 class="card-title">Subject title</h5>
					<p class="small text-secondary">Author Name</p>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk
						of the card's content.</p>
					<button type="button" class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
					Read More
					</button>
				</div>
			</div>
		</div>
		@endfor
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered w-75" role="document">
    <div class="modal-content  w-100">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('includes.post')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>