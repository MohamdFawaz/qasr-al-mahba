<div class="bt_bb_row_wrapper">
    <div class="bt_bb_row bt_bb_column_gap_50" data-structure="6-6">
        <div
            class="bt_bb_column col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top bt_bb_animation_fade_in animate bt_bb_padding_normal bt_bb_animation_fade_in animate animated"
            data-Sign inwidth="6">
            <div class="bt_bb_column_content">
                <header
                    class="bt_bb_headline bt_bb_font_weight_900 bt_bb_dash_top bt_bb_size_extralarge bt_bb_superheadline bt_bb_superheadline_outside bt_bb_subheadline bt_bb_align_inherit"
                    data-bt-override-class="{}">
                    <h2 class="bt_bb_headline_tag">
                        <span class="bt_bb_headline_content">
                            <span>
                            </span>
                        </span>
                    </h2>
                </header>
                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                <div class="bt_bb_row_inner" data-structure="6-6">
                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top"
                         data-width="6">
                        <div class="bt_bb_column_inner_content">
                            <div
                                class="bt_bb_service bt_bb_color_scheme_5 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_font_weight_normal bt_bb_vertical_align_top">
                                <span data-ico-economy="" class="bt_bb_icon_holder"><i
                                        class="fa fa-location-arrow"></i></span>
                                <div class="bt_bb_service_content">
                                    <div
                                        class="bt_bb_service_content_title">{{trans('web.home.contact_us.address_1_title')}}</div>
                                    <div
                                        class="bt_bb_service_content_text">{{trans('web.home.contact_us.address_1_desc')}}</div>
                                </div>
                            </div>
                            <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                        </div>
                    </div>
                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top"
                         data-width="6">
                        <div class="bt_bb_column_inner_content">
                            <div
                                class="bt_bb_service bt_bb_color_scheme_5 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_font_weight_normal bt_bb_vertical_align_top">
                                <span data-ico-economy="" class="bt_bb_icon_holder"><i
                                        class="fa fa-file"></i></span>
                                <div class="bt_bb_service_content">
                                    <div
                                        class="bt_bb_service_content_title">{{trans('web.home.contact_us.contact_title')}}</div>
                                    <div
                                        class="bt_bb_service_content_text">{{trans('web.home.contact_us.contact_desc')}}</div>
                                </div>
                            </div>
                            <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                        </div>
                    </div>
                </div>

                <div class="bt_bb_row_inner" data-structure="6-6">
                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top"
                         data-width="6">
                        <a href="mailto:{{trans('web.home.contact_us.email_us_content')}}">
                            <div class="bt_bb_column_inner_content">
                                <div
                                    class="bt_bb_service bt_bb_color_scheme_5 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_font_weight_normal bt_bb_vertical_align_top">
                                <span data-ico-economy="" class="bt_bb_icon_holder"><i
                                        class="fa fa-envelope"></i></span>
                                    <div class="bt_bb_service_content">
                                        <div
                                            class="bt_bb_service_content_title">{{trans('web.home.contact_us.email_us_title')}}</div>
                                        <div
                                            class="bt_bb_service_content_text">{{trans('web.home.contact_us.email_us_content')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="bt_bb_separator bt_bb_bottom_spacing_medium bt_bb_border_style_none"></div>
                            </div>
                        </a>
                    </div>
                    <div class="bt_bb_column_inner col-md-6 col-sm-12 bt_bb_align_left bt_bb_vertical_align_top"
                         data-width="6">
                        <a href="tel:{{trans('web.home.contact_us.call_us_dec')}}">
                            <div class="bt_bb_column_inner_content">
                                <div
                                    class="bt_bb_service bt_bb_color_scheme_5 bt_bb_style_filled bt_bb_size_large bt_bb_shape_circle bt_bb_font_weight_normal bt_bb_vertical_align_top">
                                    <span data-ico-economy="" class="bt_bb_icon_holder"><i
                                            class="fa fa-phone"></i></span>
                                    <div class="bt_bb_service_content">
                                        <div
                                            class="bt_bb_service_content_title">{{trans('web.home.contact_us.call_us_title')}}</div>
                                        <div
                                            class="bt_bb_service_content_text">{{trans('web.home.contact_us.call_us_dec')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-12 col-lg-6">
            <div class="wrapper">
                <form class="contact-us-form" method="post" action="{{route('submit-contact')}}">
                    <p id="error-message" class="error-message">{{trans('web.contact_form.submition_error')}}</p>
                    <p id="success-message" class="success-message">{{trans('web.contact_form.submitted_successfully')}}</p>
                    @csrf
                    @method('post')
                    <div class="row">
                        <div class="form-outline mb-4 col-6">
                            <input type="text" name="name" placeholder="{{trans('web.home.contact_us.full_name')}}"
                                   class="form-control contact-us-input" required/>
                        </div>
                        <div class="form-outline mb-4 col-6">
                            <input type="email" name="email" placeholder="{{trans('web.home.contact_us.email')}}"
                                   class="form-control contact-us-input" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-outline mb-4 col-6">
                            <input type="tel" name="phone" placeholder="{{trans('web.home.contact_us.phone_number')}}"
                                   class="form-control contact-us-input" required/>
                        </div>
                        <div class="form-outline mb-4 col-6">
                            <input type="text" name="project_scope"
                                   placeholder="{{trans('web.home.contact_us.project_scope')}}"
                                   class="form-control contact-us-input" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-outline mb-4 col-12">
                            <textarea rows="3"
                                      class="contact-us-textarea"
                                      name="content"
                                      placeholder="{{trans('web.home.contact_us.short_text')}}" required></textarea>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit"
                            class="btn btn-primary btn-block">{{trans('web.home.contact_us.submit')}}</button>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>
@section('js')
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
                }, err => {
                    console.log(err);
                    $error.addClass('shown');
                });
            });
        });
    </script>
@endsection
