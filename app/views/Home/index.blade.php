<a id="home"></a><!--anchorLink: home -->

@section('links')
@parent
@if (!empty($data))
<li class=""><a href="#home" data-target=".nav-collapse" class="anchorLink">Home</a></li>
<li><a href="#welcome" class="anchorLink">Welcome</a></li>
<li><a href="#post" class="anchorLink">Post</a></li>
<li><a href="#pictures" class="anchorLink">Your Pictures</a></li>
@endif
<li class="{{{ $gender }}}">
    <a href="{{{ $loginUri }}}">
        @if (empty($data))
        {{{ $loginText }}}
        @else
        <div></div>{{{ $data['first_name'].' '.$data['last_name'] }}}
        @endif
    </a>
</li>
@stop

<!--start: image grid -->
<div id="ri-grid" class="ri-grid ri-grid-size-2">
    <img alt="content" class="ri-loading-image" src="img/loading.gif"/>
    <ul>
        <li><a href="#"><img alt="content" src="motion/img/small/1.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/2.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/3.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/4.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/5.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/6.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/7.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/8.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/9.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/10.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/11.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/12.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/13.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/14.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/15.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/16.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/17.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/18.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/19.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/20.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/21.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/22.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/23.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/24.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/25.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/26.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/27.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/28.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/29.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/30.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/31.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/32.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/33.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/34.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/35.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/36.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/37.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/38.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/39.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/40.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/41.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/42.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/43.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/44.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/45.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/46.jpg"/></a></li>
        <li><a href="#"><img alt="content" src="motion/img/small/47.jpg"/></a></li>
    </ul>
</div>
<!-- end: image grid -->

<!--start: motion-home -->
<div id="motion-home">

    <!--start: Container -->
    <div class="container">

        <a id="welcome">&nbsp;</a><!--anchorLink: welcome -->

        <!-- start: Row -->
        <div class="row">

            <div class="span12">
                <div class="separator">
                    <div class="thumbs-up">
                        <span><i class="icon-thumbs-up"></i></span>
                    </div>
                </div>
            </div>

            <div class="span12">
                @if (!empty($data))
                <div class="baseline {{ $display }}">
                    <h2>Thank you for using our service.</h2>
                    <h2>Feel free to use our Upload Picture features. Enjoy.</h2>
                </div>
                <div class="baseline {{ $displayNotLiked }}">
                    <h2>Thank you for using our service.</h2>
                    <h3>We have noticed that you have not liked our page on facebook.</h3> <br />
                    <h3>Please consider to <div display="{{ $display }}" class="fb-like" data-href="https://www.facebook.com/NonProfitTest" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div> our page. Thank you.</h3>
                </div>
                @else
                <div class="baseline">
                    <h2>Welcome to Pictures4U. We hope you enjoy your stay. </h2>
                    <h3>To make full use of all our features, please consider logging in with your facebook account.</h3>
                    <h4>Currently we have a total of {{{ $amount or 0 }}} users, of which are {{{ $male or 0 }}} male and {{{ $female or 0 }}} female.</h4>
                    <h2>Enjoy</h2>
                </div>
                @endif
            </div>

            <div class="span12 {{ $displayOther }}">
                <div class="arrow-down">
                    <a href="#post" class="anchorLink"><i class="icon-circle-arrow-down"></i></a>
                </div>
            </div>

        </div><!-- end: Row -->
    </div><!-- end: container -->

</div>
<!-- end: home -->

<hr>
<hr>

<!--start: motion-service -->
<div id="motion-service" class="{{ $displayOther }}">
    <div class="service-pattern">
        <!--start: Container -->
        <div class="container">

            <a id="post">&nbsp;</a><!--anchorLink: Post a picture -->

            <!-- start: Row -->
            <div class="row">

                <div class="span12">
                    <div class="title">
                        <h3>Post a Picture</h3>
                    </div>
                </div>

                <div class="service">
                    <div class="span12">
                        <h2> <span class="firstword">Use </span> this form to submit a picture to your profile</h2>
                        <div id="contact-form">
                            {{ Form::open(array('url' => 'uploadPicture', 'class' => 'form-contact', 'files' => true)) }}
                            <div class="span8">
                                <fieldset>
                                    <div class="clearfix">
                                        <div class="input">
                                            <div class="input-prepend">
                                                <span class="add-on">Description:</span>
                                                <input type="text" class="input" value="" id="description" name="description" size="18" tabindex="1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix">
                                        <div class="input">
                                            <div class="input-prepend">
                                                <span class="add-on" style="width: 81px;">Picture:</span>
                                                <input type="file" class="input" id="newPhoto" name="newPhoto" size="18" tabindex="2" style="width: 81%;">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="span4 col-centered">
                                <div class="actions">
                                    <button class="btn send btn-large " type="submit" tabindex="3">Upload Picture</button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>

                <div class="span12">

                    <div class="arrow-down">
                        <a class="anchorLink" href="#pictures"><i class="icon-circle-arrow-down"></i></a>
                    </div>

                </div>

            </div><!-- end: Row -->
        </div><!-- end: container -->

    </div><!-- end: service-pattern -->

</div>
<!-- end: service -->

@if(!empty($pictures))
<!--start: motion-work -->
<div id="motion-work" class="{{ $displayOther }}">
    <div class="work-pattern" style="border-top: 10px solid #E8881C">
        <!--start: Container -->
        <div class="container">

            <a id="pictures">&nbsp;</a><!--anchorLink: work -->

            <div class="row"><!-- start: Row -->

                <div class="span12">
                    <div class="title">
                        <h3>Your Uploaded Pictures</h3>
                    </div>
                </div>

                <div class="span12">
                @foreach($pictures as $picture)
                <div class="span3">
                    <img class="fifti lazy image" width="400" data-original="{{ $picture->path }}">
                    <div class="clearfix" style="text-align:center;">
                        <p>{{$picture->message}}</p>
                    </div>
                </div>
                @endforeach
                </div>
            </div>
        </div><!-- end: Row -->
        <hr>
        <hr>
        <hr>
    </div><!-- end: Container -->
</div><!-- end: work-pattern -->
<!--end: work -->
@endif

<!--start: motion-social -->
<div id="motion-social">
    <div class="social">

        <!--start: Container -->
        <div class="container">

            <!-- start: Row -->
            <div class="row">

                <div class="span12">

                    <a id="social">&nbsp;</a><!--anchorLink: social -->

                    <div class="title-social"><h3>Connect :</h3></div>

                    <p>You can find us in the usual places online.</p>

                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item ch-img-1">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-1"></div>
                                        <div class="ch-info-back">
                                            <h3><a href="#"><i class="icon-twitter"></i> </a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="ch-item ch-img-2">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-2"></div>
                                        <div class="ch-info-back">
                                            <h3><a href="#"><i class="icon-google-plus"></i> </a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="ch-item ch-img-3">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-3"></div>
                                        <div class="ch-info-back">
                                            <h3><a href="#"><i class="icon-facebook"></i> </a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="ch-item ch-img-4">
                                <div class="ch-info-wrap">
                                    <div class="ch-info">
                                        <div class="ch-info-front ch-img-4"></div>
                                        <div class="ch-info-back">
                                            <h3><a href="#"><i class="icon-pinterest"></i> </a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div><!-- end: Row -->
        </div><!-- end: Container -->

    </div>
</div>
<!-- end: social -->
