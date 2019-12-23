@foreach($articles as $article)
	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 margin">
		<div class="news-box">
			<figure>
				<a href="{{ route('get.detail.article',[str_slug($article->a_name), $article->id]) }}">
					<img src="{{ pare_url_file($article->a_avatar) }}" alt="img" />
				</a>
			</figure>
			<h3>
				<a href="{{ route('get.detail.article',[str_slug($article->a_name), $article->id]) }}">{{ $article->a_name }}</a>
			</h3>
			<p>{{ $article->a_description }}</p>
		</div>
	</div>
@endforeach