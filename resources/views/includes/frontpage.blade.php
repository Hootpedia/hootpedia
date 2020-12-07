<div class="text-center">
	<!--Article Example-->
	<h1 class="pt-5">Articles</h1>
	<div class="d-inline">

		<!-- Cards for Article Display -->

        @foreach($articles ?? '' as $article)
		<div class="card mx-auto d-flex justify-content-center shadow" style="width: 60%; min-height:300px; min-width:25rem;">
			<h2 class="border border-top-0 border-left-0 border-right-0 py-2">{{$article->tag}}</h2>
			<div class="card-body  py-5 row text-left">
				<div class="col-3 text-center p-1">
					<img class="img-fluid border rounded-circle"
						 src="https://cdn.discordapp.com/attachments/754460456206336021/758102864009887814/unknown.png"
						 style="max-width:100px; height:auto;">
				</div>
				<div class="col-9">
					<h3 class="card-title">{{$article->title}}</h3>
					<p class="small text-secondary">{{$article->created_at}}</p>
					{{--<button type="button" id="{{$article->id}}" class="articlebutton btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#exampleModalCenter">
					Read More
					</button>--}}
				</div>
					<button type="button" id="{{$article->id}}">
						<a href="/articles/{{ $article->id }}"></a>
					</button>
			</div>
		</div>
            <br>
            @endforeach
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

