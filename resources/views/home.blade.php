@extends('front.layout.app')

@section('title')
    <title>{{trans('web.title.home')}} | {{trans('web.title.welcome_to_qasr_al_mahba')}}</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/contact_us.css?v=1.3')}}">
    <link rel="stylesheet" href="{{asset('vendors/quill/quill.snow.css')}}">
@endsection
@section('content')
    <div class="page-wrapper">

        @include('front.layout.header')

        @include('front.components.sections.homepage_banner')

        @include('front.components.sections.our_success')

        @include('front.components.sections.invest')

        @include('front.components.sections.articles')


        @include('front.partners')

        @include('front.components.sections.videos')

        <section class="zero-padding-contact-us mb-100">
            <div class="container">
                <h4 class="mb-75 text-sm-center">{{trans('web.home.contact_us_title')}}</h4>
                @include('front.contact_us_form')
            </div>
        </section>
    </div>
    @include('front.layout.footer')
@endsection
<!--End pagewrapper-->
@section('js')
    <script>

        const links = JSON.parse(`@json($links)`);
        let arrVideos = [];
        const ytVideoPrefix = `https://www.youtube.com/embed/`
        const ytImagePathPrefix = `https://i.ytimg.com/vi/`
        const ytImagePathSufix = `/maxresdefault.jpg`

        for (var i = 0; i < links.length; i++) {
            arrVideos.push({data: links[i].link});
        }
        let currentVideo = document.getElementById('current-video')
        currentVideo.src = `${ytVideoPrefix}${arrVideos[0].data}`


        let gallery = document.querySelector('.gallery')
        gallery.innerHTML = ``

        for (let i = 0; i < arrVideos.length; i++) {
            gallery.innerHTML += `
            <div class="gallery__item filtered"
            style="background-image: url(${ytImagePathPrefix}${arrVideos[i].data}${ytImagePathSufix})"
            data="${arrVideos[i].data}">
            </div>`
        }

        gallery.addEventListener('click', (e) => {
            // When click on .gallery__item element
            if (e.target.classList.contains('gallery__item')) {
                currentVideo.src = `${ytVideoPrefix}${e.target.getAttribute('data')}`
            }
            // When click on .gallery__item__img element
            if (e.target.classList.contains('gallery__item__img')) {
                let data = e.target.src
                data = data.replace(ytImagePathPrefix, '')
                data = data.replace(ytImagePathSufix, '')
                currentVideo.src = `${ytVideoPrefix}${data}`
                console.log(currentVideo.src)
            }
            // When click on .gallery__item__span element
            if (e.target.classList.contains('gallery__item__span')) {
                console.log(e.target.innerText)
                for (let i = 0; i < arrVideos.length; i++) {
                    if (arrVideos[i].name === e.target.innerText) {
                        currentVideo.src = `${ytVideoPrefix}${arrVideos[i].data}`
                    }
                }
            }
        });
    </script>
@endsection
