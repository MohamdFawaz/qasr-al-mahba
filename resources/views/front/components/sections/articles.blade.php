<section class="articles-section pt-135 rpt-85 pb-145 rpb-130">
    <div class="container" style="position: relative">
        <h2 class="text-center">{{trans('web.home.articles')}}</h2>
        @foreach($articles as $article)
            <div class="row">
                <div class="col-12 pl-30 pr-30">
                    <h3>{{$article->title}}</h3>
                    <div class="ql-editor">
                        {!! $article->content !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
