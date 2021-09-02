<!-- jequery plugins -->
<script src="{{asset('front/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/slick.min.js')}}"></script>
<script src="{{asset('front/js/leaflet.min.js')}}"></script>
<script src="{{asset('front/js/appear.js')}}"></script>
<!-- Custom script -->
<script src="{{asset('front/js/script.js?v=1.3')}}"></script>
@yield('js')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
    $(function () {
        var $error = $('#error-message');
        var $sucess = $('#success-message');

        $('form').on('submit', function (e) {
            e.preventDefault();
            let data = $('.contact-us-form').serialize();
            axios.post('/contact-us', data).then(response => {
                $sucess.addClass('shown')
                $('form')[0].reset();
            }, err => {
                console.log(err);
                $error.addClass('shown');
            });
        });
    });
</script>
</body>
</html>
