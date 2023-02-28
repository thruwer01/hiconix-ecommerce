@extends('layouts.main')

@section('title'){{$title}}@endsection

@section('content')
<div class="container mt-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Главная</a></li>
            <li class="breadcrumb-item active">Публикации</li>
		</ol>
	</nav>
</div>


<div class="mobile-sub-menu d-block d-sm-none">
	<div class="mob-container">
        <div class="chosen"><span>Выбрать</span><i class="fa fa-caret-down"></i></div>
        <div class="menulist">
			<ul>
				<li><a href="/publications/news/">Новости</a></li>
				<li><a href="/publications/actions/">Акции</a></li>
				<li><a href="/publications/video/">Видео</a></li>
				<li><a href="/publications/articles/">Статьи</a></li>
			</ul>
		</div>
	</div>
</div>

<div class="sub-menu d-none d-sm-block">
	<div class="descmenulist">
		<ul>
			<li><a href="/publications/news/">Новости</a></li>
			<li><a href="/publications/actions/">Акции</a></li>
			<li><a href="/publications/video/">Видео</a></li>
			<li><a href="/publications/articles/">Статьи</a></li>
		</ul>
	</div>
</div>

<div class="container publish-row mt-2 pb-5">
    <h1>{{$title}}</h1>
    <div class="row">
		@foreach ($all as $news)
		<div class="col-sm-6 col-lg-4 col-xl-3">
			<div class="publish border">
				@if ($news->getHumanGroup() !== null)
				<div style="position: absolute; top: 20px; left: 0; padding: 3px 5px; background-color: #12aaed; font-size: 12px; color: white; font-weight: bold;">
					{{$news->getHumanGroup()}}
				</div>
				@endif
				<div class="img-publish">
				<a href="/publications/{{$news->group}}/{{$news->code}}" title="{!! mb_substr(trim($news->h1), 0, 34)!!}">
					
						@if($news->anonsImage() !== null)
						<img src="{{$news->anonsImage()}}" alt="{!! mb_substr(trim($news->h1), 0, 34)!!}">
						@else
						<img src="/images/products/no-photo.jpeg" alt="no-photo">
						@endif
					</a>
				</div>
				<a href="/publications/{{$news->group}}/{{$news->code}}">
					<span class="fw-bold">
						{!! mb_substr(trim($news->h1), 0, 100)!!}@if(strlen(trim($news->h1)) > 200)...@endif
					</span>
				</a>
				<div class="publish-bottom">
					<div class="row justify-content-center align-items-end">
						<div class="col-6">
							
							@if (!empty($news->date))
							<strong>
								{{date('d.m.Y',strtotime($news->date))}}
							</strong>
							@endif
							
						</div>
						<div style="col-6">
							
							<a class="news-buttons" href="/publications/{{$news->group}}/{{$news->code}}">Подробнее</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<div>
			{!!$all->links()!!}
		</div>
	</div>
</div>
</div>
@endsection