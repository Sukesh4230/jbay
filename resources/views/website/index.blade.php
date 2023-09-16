@extends('website.header')
<div id="maximage">
    @foreach ($sliders ?? [] as $slider)
        <div class="mc-image">
            <div class="overlay_slide">
                <img src="{{ asset('storage/' . $slider->image_url) }}">

                <div class="text_slide">
                    <ul>
                        <li>
                            <!-- <p class="t-20">Luxury Gone Wild!</p> -->
                        </li>
                        <li>
                            <h1>Luxury Gone Wild ! </h1>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>

<section id="section_scrolldown" class="demo">
    <a href="#scrolldown"><span></span></a>
</section>

</section>

<!-- <div class="section_arrow_slide">
    <a href="#" id="arrow_left">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a href="#" id="arrow_right">
        <i class="fa fa-angle-right" aria-hidden="true"></i>

    </a>
</div>

<div class="section_bundhayaphoto" id="about">
    <p>

    </p>
</div>
 -->


</section>


<section class="section_welcome" id="scrolldown">
    <div class="container">
        <h2 class="sechead">Welcome to Jungle Bay !</h2>
        {!! $content->content ?? '' !!}
    </div>
</section>


<h2 class="sub">Rooms</h2>

<section class="section_accommodation ">
    <div class="owl-carousel owl-theme slide_accommodation">
        <a href="poolvilla.php">
            <div class="item">
                <div class="imagebox_acoommodation imh" style="background: url({{ asset('storage/' . $DUKE) }}) right;">
                    <!-- <div class="name_accommodation">

                    </div> -->
                </div>
                <div class="details_accommodation text-left">


                    <ul>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/air-conditioner.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/tv.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/hair-dryer.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/safe-box.png') }}>
                        </li>
                    </ul>
                    <h2 class="blc bold text-left">Duke’s Pool Villa</h2>
                    <p class="text-left">
                        The Duke’s pool villa at Jungle Bay is one of the most luxurious pool villas in Wayanad. The
                        aesthetically designed spacious pool with a small waterfall on one side will refresh your body
                        and
                        mind.
                    </p>
                </div>
            </div>
        </a>
        <a href="beetle.php">
            <div class="item">
                <div class="imagebox_acoommodation imh"
                    style="background: url({{ asset('storage/' . $BEETLE) }}) right;">
                    <!--  <div class="name_accommodation">

                    </div> -->
                </div>
                <div class="details_accommodation">

                    <ul>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/air-conditioner.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/tv.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/hair-dryer.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/safe-box.png') }}>
                        </li>
                    </ul>
                    <h2 class="blc text-left">
                        Beetle – The Tree House
                    </h2>
                    <p class="text-left">
                        Hoisted along a Rosewood and Jackfruit tree is this tall Tree House spanning across 400 square
                        feet.
                        The thatched roof and the elevated stance with an aerial view adds to the feel.
                    </p>
                </div>
            </div>
        </a>
        <a href="jacuzzivillas.php">
            <div class="item">
                <div class="imagebox_acoommodation imh"
                    style="background: url({{ asset('storage/' . $REGAL) }}) right;">
                    <!--    <div class="name_accommodation">

                    </div> -->
                </div>
                <div class="details_accommodation">

                    <ul>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/air-conditioner.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/tv.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/hair-dryer.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/safe-box.png') }}>
                        </li>
                    </ul>
                    <h2 class="blc text-left">
                        Regal Jacuzzi Villa
                    </h2>
                    <p class="text-left">
                        Get pampered in our cozy couple jacuzzis here. The jaguar branded jacuzzi is just one of the
                        factors
                        giving that wow feel. Watch the early sunrise through the long french windows from the warmth of
                        your luxury bed.
                    </p>
                </div>
            </div>
        </a>
        <a href="bougainvilla.php">
            <div class="item">
                <div class="imagebox_acoommodation imh"
                    style="background: url({{ asset('storage/' . $BOUGAIN) }}) right;">
                    <!-- <div class="name_accommodation">

                    </div> -->
                </div>
                <div class="details_accommodation">

                    <ul>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/air-conditioner.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/tv.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/hair-dryer.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/safe-box.png') }}>
                        </li>
                    </ul>
                    <h2 class="blc text-left">
                        Bougain Villa
                    </h2>
                    <p class="text-left">
                        Bougain Villas are Jungle Bay's identity. The twin Villas with spacious rooms and wide open
                        balconies
                        facing the jungle is a special place.
                    </p>
                </div>
            </div>
        </a>

        <a href="pavilionroom.php">
            <div class="item">
                <div class="imagebox_acoommodation imh"
                    style="background: url({{ asset('storage/' . $PAVILION) }}) right;">
                    <!-- <div class="name_accommodation">

                    </div> -->
                </div>
                <div class="details_accommodation">

                    <ul>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/air-conditioner.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/tv.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/hair-dryer.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/safe-box.png') }}>
                        </li>
                    </ul>
                    <h2 class="blc text-left">Pavilion Room
                    </h2>
                    <p class="text-left">
                        The pavilions rooms with the juliette balconies face the plantations on one side and opens to
                        the
                        vast lawn on the other. Beautifully painted coloured walls and the cosy sofas gives a soothing
                        effect.
                    </p>
                </div>
            </div>
        </a>


        <a href="penthouse.php">
            <div class="item">
                <div class="imagebox_acoommodation imh"
                    style="background: url({{ asset('storage/' . $PENT) }}) right;">
                    <!-- <div class="name_accommodation">

                    </div> -->
                </div>
                <div class="details_accommodation">

                    <ul>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/air-conditioner.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/tv.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/hair-dryer.png') }}>
                        </li>
                        <li>
                            <img src={{ asset('website/assets/images/icon/facilitiesinroom/safe-box.png') }}>
                        </li>
                    </ul>
                    <h2 class="blc text-left">
                        Pent House
                    </h2>
                    <p class="text-left">
                        Penthouse is atop the Club House with a view to the far away mountains. The wooden stairs with
                        customized woodworks takes you to this beautiful space.
                    </p>
                </div>
            </div>
        </a>




    </div>
</section>


<section class="section_contentchild features secpad">
    <div class="">
        <h2 class="sub">Amenities</h2>
        <div class="owl-carousel owl-theme slide_accommodation">
            @foreach ($amenities ?? [] as $amenity)
                <a href="amenities.php">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                            style="background: url({{ asset('storage/' . $amenity->image_url) }}) right;">
                        </div>
                        <div class="details_accommodation text-center rps">
                            <h2 class="blc text-left"> {{ $amenity->name }} </h2>
                            <p class="text-left"> {{ $amenity->description }} </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>



    <div class="container-fluid m-70">
        <h2 class="sub">Activities</h2>
        <div class="owl-carousel owl-theme slide_accommodation">
            @foreach ($activities ?? [] as $activity)
                <a href="activity.php">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                            style="background: url({{ asset('storage/' . $activity->image_url) }}) right;">
                        </div>
                        <div class="details_accommodation text-center rps">
                            <h2 class="blc text-left"> {{ $activity->name }} </h2>
                            <p class="text-left"> {{ $activity->description }} </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>




    <div class="container-fluid m-70">
        <h2 class="sub">Discover Wayanad</h2>
        <div class="owl-carousel owl-theme slide_accommodation">
            @foreach ($discovers ?? [] as $discover)
                <a href="wayanad.php">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                            style="background: url({{ asset('storage/' . $discover->image_url) }}) right;">
                        </div>
                        <div class="details_accommodation text-center rps">
                            <h2 class="blc text-left"> {{ $discover->name }} </h2>
                            <p class="text-left"> {{ $discover->description }} </p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>



<!--   <h4 class="sub1">What We Have</h4> -->

<!--  <section class="section_promotion"> -->
<!--  <div class="overlay_promotion"></div>
        <div class="titlename">
            <div class="details_titlename">
                <p>What We Have</p>
            </div>
        </div> -->

<!--  <div class="owl-carousel owl-theme slide_promotion">
           <a href="wine-dine.php"> <div class="item">
                <div class="view overlay_gallery hm-red-strong">
                    <div class="item_img_box">
                        <div class="item_img">
                            <div class="details_promotion">
                                <h2 class="blc">
                                    Wine & Dine
                                </h2>

                            </div>
                            <div class="imagebox_promotion"
                                 style="background: url('website/assets/images/promotion/promotion-01.jpg') right;"></div>
                            <div class="mask flex-center">
                                <div class="text_gallery_hover">
                                    <h2 class="blc">
                                        Wine & Dine
                                    </h2>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div></a>
            <a href="amenities.php"><div class="item">
                <div class="view overlay_gallery hm-red-strong">
                    <div class="item_img_box">
                        <div class="item_img">
                            <div class="details_promotion">
                                <h2 class="blc">
                                    Amenities
                                </h2>

                            </div>
                            <div class="imagebox_promotion"
                                 style="background: url('website/assets/images/promotion/promotion-02.jpg') right;"></div>
                            <div class="mask flex-center">
                                <div class="text_gallery_hover">
                                    <h2 class="blc">
                                        Amenities
                                    </h2>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div></a>
           <a href="Wellness.php"> <div class="item">
                <div class="view overlay_gallery hm-red-strong">
                    <div class="item_img_box">
                        <div class="item_img">
                            <div class="details_promotion">
                                <h2 class="blc">
                                   Bhoomi – The Spa
                                </h2>


                            </div>
                            <div class="imagebox_promotion"
                                 style="background: url('website/assets/images/promotion/promotion-03.jpg') right;"></div>
                            <div class="mask flex-center">
                                <div class="text_gallery_hover">
                                    <h2 class="blc">
                                       Bhoomi – The Spa
                                    </h2>




                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div></a>
           <a href="activity.php"> <div class="item">
                <div class="view overlay_gallery hm-red-strong">
                    <div class="item_img_box">
                        <div class="item_img">
                            <div class="details_promotion">
                                <h2 class="blc">
                                    Activities
                                </h2>

                            </div>
                            <div class="imagebox_promotion"
                                 style="background: url('website/assets/images/promotion/promotion-04.jpg') right;"></div>
                            <div class="mask flex-center">
                                <div class="text_gallery_hover">
                                    <h2 class="blc">
                                        Activities
                                    </h2>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div></a>
        </div>
    </section> -->
<!--  <section class="section-padding theme-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 section-space single-column-img">
                        <img  src={{ asset('website/assets/images/750x600.jpg" alt="750x600" class="img-responsive mr-80">
                    </div><div class="col-md-1"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p></div>
                    <div class="col-md-6  report single-column-res">
                        <h3 class="cl text-center"><a href="#">Climate</a></h3>
                        <p>The temperature ranges between 0 °C (41 °F) and 25 °C (77 °F) in winter and 15 °C (59 °F) and 25 °C (77 °F) in summer. The summer is placid and pleasant from April to June.Monsoon is during June to August and is very beautiful with numerous streamsand waterfalls in the area.Winter falls from November till March and is cold and chilly as the temperature drops down to 0°C. Guests are advised to carry woollen clothes during winter</p>
                        <div class="report-points">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="report-ul">
                                        <li>
                                            <p>Altitude : 1000 m (3200 ft)above sea level</p>
                                        </li>
                                        <li>
                                            <p>Rainfall               :        June-August (275cm)</p>
                                        </li>
                                        <li>
                                            <p>Temperature   :      0-25°C (Summer 15-25°C, Winter 0-15°C)</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="report-ul report-ul-1">
                                        <li>
                                            <p>Languages          :        Malayalam, Tamil, Hindi &amp; English</p>
                                        </li>
                                        <li>
                                            <p>Winter              :      November to February</p>
                                        </li>
                                        <li>
                                            <p>Summer           :      Mid February till end May</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section> -->


<!--     <section class="section_facilities">
        <h1>
            Things to do in Wayanad
        </h1>
        <br>



        <div class="flip-card-container" style="--hue: 220">
    <div class="flip-card">

      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/1.jpg" alt="Brohm Lake">
          <figcaption>Banasura Dam</figcaption>
        </figure>

        <ul>
          <li>Detail 1</li>


        </ul>
      </div>

      <div class="card-back">
        <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/1.jpg" alt="Brohm Lake">
        </figure>

       <a href="https://goo.gl/maps/6ucUvUcvuvE5atxv9"> <button><i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp; Diraction</button></a>

        <div class="design-container">
          <span class="design design--1"></span>
          <span class="design design--2"></span>
          <span class="design design--3"></span>
          <span class="design design--4"></span>
          <span class="design design--5"></span>
          <span class="design design--6"></span>
          <span class="design design--7"></span>
          <span class="design design--8"></span>
        </div>
      </div>

    </div>
  </div>

 flip-card-container -->
<!--   <div class="flip-card-container" style="--hue: 170">
    <div class="flip-card">

      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/2.jpg" alt="Image 2">
          <figcaption>Wildlife Sanctuary</figcaption>
        </figure> -->

<!-- <ul>
          <li>Detail 1</li>
          <li>Detail 2</li>
          <li>Detail 3</li>
          <li>Detail 4</li>
          <li>Detail 5</li>
        </ul> -->
<!-- </div>

      <div class="card-back">
        <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/2.jpg" alt="image-2">
        </figure>

        <a href="https://goo.gl/maps/bEziRboYPzdjQJHx8"> <button><i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp; Diraction</button></a>

        <div class="design-container">
          <span class="design design--1"></span>
          <span class="design design--2"></span>
          <span class="design design--3"></span>
          <span class="design design--4"></span>
          <span class="design design--5"></span>
          <span class="design design--6"></span>
          <span class="design design--7"></span>
          <span class="design design--8"></span>
        </div>
      </div>

    </div>
  </div> -->
<!-- /flip-card-container -->

<!-- <div class="flip-card-container" style="--hue: 170">
    <div class="flip-card">

      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/3.jpg" alt="Image 2">
          <figcaption>Chembra Peak</figcaption>
        </figure>
   -->
<!-- <ul>
          <li>Detail 1</li>
          <li>Detail 2</li>
          <li>Detail 3</li>
          <li>Detail 4</li>
          <li>Detail 5</li>
        </ul> -->


<!--  <div class="card-back">
        <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/3.jpg" alt="image-2">
        </figure>

        <a href="https://goo.gl/maps/x4rfMhYMKE5YSbZZA"> <button><i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp; Diraction</button></a>

        <div class="design-container">
          <span class="design design--1"></span>
          <span class="design design--2"></span>
          <span class="design design--3"></span>
          <span class="design design--4"></span>
          <span class="design design--5"></span>
          <span class="design design--6"></span>
          <span class="design design--7"></span>
          <span class="design design--8"></span>
        </div>
      </div>

    </div>
  </div>
   -->
<!-- flip-card-container -->
<!-- <div class="flip-card-container" style="--hue: 350">
    <div class="flip-card">

      <div class="card-front">
        <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/4.jpg" alt="Brohm Lake">
          <figcaption>Soochipara Falls</figcaption>
        </figure> -->

<!-- <ul>
          <li>Detail 1</li>
          <li>Detail 2</li>
          <li>Detail 3</li>
          <li>Detail 4</li>
          <li>Detail 5</li>
        </ul> -->
<!-- </div>

      <div class="card-back">
         only if the image is necessary -->
<!--      <figure>
          <div class="img-bg"></div>
          <img class="img1" src={{ asset('website/assets/images/way/4.jpg" alt="Brohm Lake">
        </figure>

        <a href="https://goo.gl/maps/xUjx2wyUpXZ5yMbd6"> <button><i class="fa fa-location-arrow" aria-hidden="true"></i> &nbsp; Diraction</button></a> -->

<!-- can add svg here and remove these eight spans -->
<!--         <div class="design-container">
          <span class="design design--1"></span>
          <span class="design design--2"></span>
          <span class="design design--3"></span>
          <span class="design design--4"></span>
          <span class="design design--5"></span>
          <span class="design design--6"></span>
          <span class="design design--7"></span>
          <span class="design design--8"></span>
        </div>
      </div>

    </div>
  </div> -->








<!--             <div class="clearfix"></div>

              <br><br> <a href="Wayanad.php" class="btn_readmore">
                            More about Wayanad
                        </a>












    </section> -->


@extends('website.footer')
