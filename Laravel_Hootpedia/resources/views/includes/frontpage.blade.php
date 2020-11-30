<div class="text-center">
	<!--Article Example-->
	<h1 class="pt-5">Articles/Discussions</h1>
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
					<h5 class="card-title">{{$article->title}}</h5>
					<p class="small text-secondary">{{$article->content}}</p>
					<a href="/articles/show" class="btn btn-sm btn-outline-primary">Read More</a>
				</div>
			</div>
		</div>
            <br>
            @endforeach
	</div>
</div>

