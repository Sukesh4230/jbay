@extends('website.header')

<style type="text/css">
    #arrow_right {
    display: none;
}

#arrow_left {
    display: none;
}
   </style>

<div id="maximage">
    @foreach ($room->sliders ?? [] as $slider)
        <div class="mc-image">
            <div class="overlay_slide">
                <img src="{{ asset('storage/' . $slider->image_url) }}">
                <div class="text_slide text_slide2">
                    <ul>
                        <li>
                            <!--    <h1>junglebay Premium Room</h1> -->
                        </li>
                        <li>
                            <p></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

    {{-- <div class="mc-image">
        <div class="overlay_slide">
            <img src="assets/images/jv/12.jpg">

            <div class="text_slide text_slide2">
                <ul>
                    <li>
                        <!--       <h1>junglebay Premium Room</h1> -->
                    </li>
                    <li>
                        <p></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mc-image">
        <div class="overlay_slide">
            <img src="assets/images/jv/13.jpg">

            <div class="text_slide text_slide2">
                <ul>
                    <li>
                        <!--        <h1>junglebay Premium Room</h1> -->
                    </li>
                    <li>
                        <p></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mc-image">
        <div class="overlay_slide">
            <img src="assets/images/jv/11.jpg">

            <div class="text_slide">
                <ul>
                    <li>
                        <h1></h1>
                    </li>
                    <li>
                        <p></p>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}

</div>




<!--  <section id="section_scrolldown" class="demo">
     <a href="#scrolldown"><span></span></a>
 </section> -->

<div class="section_arrow_slide">
    <a href="#" id="arrow_left">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a href="#" id="arrow_right">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
</div>

<div class="section_bundhayaphoto">

</div>
</section>

<section class="section_welcome section_accommodationpage">
    <div class="container">
        <h1>
            {{ $room->name }}
        </h1>
        <div class="col-md-9 pull-left dts">

            <p class="text_black">
                <img src={{ asset('web/assets/images/icon/facilitiesinroom/single-bed.png') }} class="extrabed">
                <span class="text_orange">Premium Room (2 persons)</span>
            </p>

            <p>{{ $room->description }}</p>

        </div>

        <div class="col-md-3 price_card">


            <h3 class="prc">&#8377; {{ $room->price }} + GST</h3>
            <p class="text-center">(Stay including breakfast)</p>
            <p class="text-center">(Extra Adult - &#8377; {{ $room->extra_adult_price }} + GST)</p>

        </div>

    </div>





</section>



<section class="section_welcome mb-5">

    <div class="container">
        <h1>Room Amenities</h1>
        <div class="section_amenities">
            <ul>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/air-conditioner.png') }}>
                    <p> Air-conditioning </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/balcony.png') }}>
                    <p> Private balcony </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/tv.png') }}>
                    <p> Flat Screen TV </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/minibar.png') }}>
                    <p> Mini bar </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/kettle.png') }}>
                    <p> Kettle and Coffee & Tea </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/safe-box.png') }}>
                    <p> Safe Box </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/shower.png') }}>
                    <p> Shower Hot/Cold water </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/toilet.png') }}>
                    <p> Toiletries </p>
                </li>
                <li>
                    <img src={{ asset('web/assets/images/icon/facilitiesinroom/hair-dryer.png') }}>
                    <p> Hair Dryer </p>
                </li>
            </ul>
        </div>

    </div>




    <div class="row_contentchild">
        <div class="owl-carousel owl-theme slide_photo1">
            @foreach ($room->footers as $footer)
                <div class="item">
                    <div class="imagebox_acoommodation" style="background: url({{ asset('storage/' . $footer->image_url) }}) right;">
                        <img id="myImg1" class="img-responsive" src="{{ asset('storage/' . $footer->image_url) }}" alt="">
                    </div>
                </div>
            @endforeach

           

        </div>
    </div>

</section>




<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>
@extends('website.footer')
