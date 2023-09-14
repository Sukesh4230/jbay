@extends('website.header')



<div id="maximage">
    <div class="mc-image">
        <div class="overlay_slide">
            <img src={{ asset('website/assets/images/1.jpg') }}>

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
    <div class="mc-image">
        <div class="overlay_slide">
            <img src={{ asset('website/assets/images/2.jpg') }}>

            <div class="text_slide text_slide2">
                <ul>
                    <li>
                        <!-- <p class="t-20">Luxury Gone Wild!</p> -->
                    </li>
                    <li>
                        <!-- <h1>Luxury Gone Wild ! </h1> -->
                    </li>
                    <li>
                        <!-- <p>Selection of accommodation and warmly service from Jungle Bay. </p> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mc-image">
        <div class="overlay_slide">
            <img src={{ asset('website/assets/images/3.jpg') }}>

            <div class="text_slide text_slide2">
                <ul>
                    <li>
                        <!--  <p class="t-20">Luxury Gone Wild!</p> -->
                    </li>
                    <li>
                        <!-- <h1>Luxury Gone Wild ! </h1> -->
                    </li>
                    <li>
                        <!-- <p>Selection of accommodation and warmly service from Jungle Bay. </p> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mc-image">
        <div class="overlay_slide">
            <img src={{ asset('website/assets/images/222.jpg') }}>

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
    <!--           <div class="mc-image">
                <div class="overlay_slide">
                    <img src="assets/images/4.jpg">

                    <div class="text_slide text_slide2">
                        <ul>
                            <li>

                            </li>
                            <li>

                            </li>
                        </ul>
                    </div>
                </div>
            </div> -->


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

        <p>
            Nestled amidst the wilderness at Irulam is this picturesque resort in Wayanad. The scenic drive
            through the Chethalayam wildlife range takes you to Jungle Bay Resorts and Spa. The whiff of the
            greens and the rustles of the bamboo here takes you to an ethereal experience.
        </p>
        <p>

            The majestic Club House hosting a spacious lobby, a luxe lounge and the open pool view restaurant
            welcomes you. The opulent pool villa, jacuzzi villas and the stunning tree house are just few of the
            amenities awaiting to take your breath away.

        </p>

        <p>Dotted along the vast green spaces are these beautifully crafted villas with spacious rooms and
            balconies. Take a stroll through the meandering foot paths or pick up a bicycle from the docks for a
            day out.</p>

        <p>
            Visit the spa for a rejuvenating session and head out to the infinity pool to unwind yourself. There
            are activities galore for kids and adults alike to keep you entertained throughout your stay.
        </p>
        <p>Experience pristine luxury at Jungle Bay!</p>

    </div>


</section>


<h2 class="sub">Rooms</h2>

<section class="section_accommodation ">
    <!--         <div class="titlename">
            <div class="details_titlename">
                <p>Rooms</p>
            </div>
        </div> -->



    <div class="owl-carousel owl-theme slide_accommodation">
        <a href="poolvilla.php">
            <div class="item">
                <div class="imagebox_acoommodation imh" style="background: url('assets/images/pv/50.jpg') right;">
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
                <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/th/1.jpg') right;">
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
                <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/jv/11.jpg') right;">
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
                <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/bv/2.jpg') right;">
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
                <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/pr/1.jpg') right;">
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
                <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/ph/1.jpg') right;">
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
            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/acoommodation/gardentriple/09.jpeg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Ooze – The Lounge
                        </h2>

                        <p class="text-left">
                            The luxurious lounge in the huge Club House is a must visit spot during your stay. Enjoy a
                            private dinner under the beautiful star lit sky ceiling. The plush interiors and the
                            ambience is pure class.
                        </p>
                    </div>
                </div>
            </a>
            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/dining/35.jpeg') right;">
                        <!--  <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Avocado – Multicuisine Restaurant
                        </h2>

                        <p class="text-left">
                            Enjoy our special cuisines at the 60 seater open restaurant with a pool view. The hanging
                            plants and the unique interiors adds to the ambience.
                        </p>
                    </div>
                </div>
            </a>
            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/activities/scubadiving/50.jpg') right;">
                        <!--    <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Infinity Pool
                        </h2>

                        <p class="text-left">
                            Take a dip with your family at the big infinity pool here. There’s a separate area for
                            adults and kids, with a beautiful deck and loungers. The infinity faces the plantations and
                            the valley around.
                        </p>
                    </div>
                </div>
            </a>
            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/6.png') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Gymnasium
                        </h2>

                        <p class="text-left">
                            The Gymnasium atop the pavilion has a treadmill, cycle and other fitness equipments. The
                            open feel and the ventilation makes it an ideal spot for a fitness session.
                        </p>
                    </div>
                </div>
            </a>

            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/7.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodationc rps"><br>
                        <h2 class="blc text-left">
                            Kids Play Area
                        </h2>

                        <p class="text-left">
                            The kids play area is a spacious open area with greenery around. Kids will enjoy this space
                            with lot of games including a trampoline.
                        </p>
                    </div>
                </div>
            </a>


            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/lib2.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Library
                        </h2>

                        <p class="text-left">
                            The library is in the Great room of the Club House. With a good collection of English and
                            regional books this is a great spot for a bibiliophile. With chairs, sofas and bean bags
                            enjoy a good read and unwind yourself.
                        </p>
                    </div>
                </div>
            </a>

            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/cof.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Confluence – Conference Room
                        </h2>

                        <p class="text-left">
                            The conference room in the pavilion has a 80 seat capacity. This is ideal for hosting
                            corporate conferences, private group dinners and parties. Best in class audio systems and
                            projectors are used for a professional experience.
                        </p>
                    </div>
                </div>
            </a>

            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/fot.jpeg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Arena
                        </h2>

                        <p class="text-left">
                            Arena is a huge open area at the heart of Jungle Bay. Enjoy a game of football, badminton or
                            other outdoor activities here. It’s the perfect spot for destination weddings, gala dinners
                            and outdoor parties.
                        </p>
                    </div>
                </div>
            </a>

            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/amp.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Amphitheatre
                        </h2>

                        <p class="text-left">
                            Surrounded by jungle on one side, this private space with gallery seating is the place to
                            unwind with some music and a bonfire. Located at one corner of the resort this is a special
                            place to unwind.
                        </p>
                    </div>
                </div>
            </a>

            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/cmp.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Camp Fire
                        </h2>

                        <p class="text-left">
                            Campfires are arranged on request at the resort with live music. Gather around the campfire
                            and enjoy the warmth of our hospitality.
                        </p>
                    </div>
                </div>
            </a>

            <a href="amenities.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/tnt.webp') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Camping Tents
                        </h2>

                        <p class="text-left">
                            Spend time in the camping tents erected on request within the Resort. It would be a unique
                            experience amidst the bamboo plantations and the jungle.
                        </p>
                    </div>
                </div>
            </a>




        </div>







    </div>



    <div class="container-fluid m-70">
        <h2 class="sub">Activities</h2>





        <div class="owl-carousel owl-theme slide_accommodation">
            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/1/Cycling/1.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Cycling
                        </h2>

                        <p class="text-left">
                            The scenic routes amidst the jungle is a rider’s paradise. Take a bicycle ride towards
                            Kuruva island or the hamlets around to enjoy the greenery and countryside.
                        </p>
                    </div>
                </div>
            </a>
            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/1/rope/1.jpg') right;">
                        <!--  <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Nature Trek
                        </h2>

                        <p class="text-left">
                            The trekking routes around Jungle Bay will be an ardent trekker’s delight. Take a walk to
                            the adjacent jungles or to the wild streams and experience Wayanad.
                        </p>
                    </div>
                </div>
            </a>
            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/fot.jpeg') right;">
                        <!--    <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Football
                        </h2>

                        <p class="text-left">
                            The ground is part of the open arena. Footballs are available on request. Make a team, erect
                            the posts and keep scoring.
                        </p>
                    </div>
                </div>
            </a>
            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/1/Shuttle Court/1.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Badminton
                        </h2>

                        <p class="text-left">
                            Badminton court is also around the arena. Enjoy a game and unwind yourself.
                        </p>
                    </div>
                </div>
            </a>

            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/bsk.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Basketball
                        </h2>

                        <p class="text-left">
                            A half basketball court with a board is another activity at Jungle Bay.
                        </p>
                    </div>
                </div>
            </a>


            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/lib.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Snooker
                        </h2>

                        <p class="text-left">
                            The snooker/pool board is placed in the great room of the Club House adjacent to the lobby.
                            Amateurs and professionals alike can enjoy a game while at the resort.
                        </p>
                    </div>
                </div>
            </a>

            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/fs.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Foosball
                        </h2>

                        <p class="text-left">
                            Get a partner and try a game of Foosball. Strike, defend, score!
                        </p>
                    </div>
                </div>
            </a>

            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/ah.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Air Hockey
                        </h2>

                        <p class="text-left">
                            Air Hockey is another activity to spend your time here. If you’ve never tried playing now is
                            the time.
                        </p>
                    </div>
                </div>
            </a>


            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/tb.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Table Tennis
                        </h2>

                        <p class="text-left">
                            Table Tennis is placed in the activity room atop the Pavilion. Best equipments have been
                            procured for a professional experience.
                        </p>
                    </div>
                </div>
            </a>

            <a href="activity.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/bd.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation rps">
                        <h2 class="blc text-left">
                            Board Games
                        </h2>

                        <p class="text-left">
                            There are multiple board games at Jungle Bay including Carrom, Ludo and Chess. Customized
                            boards will be a delight to an indoor game fan.
                        </p>
                    </div>
                </div>
            </a>




        </div>







    </div>




    <div class="container-fluid m-70">
        <h2 class="sub">Discover Wayanad</h2>





        <div class="owl-carousel owl-theme slide_accommodation">

            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/1.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Kuruvadweep
                        </h2>

                        <p class="text-left">
                            Kuruvadweep is a 950-acre (3.8 km2) protected river delta on theKabini River. This island of
                            dense and evergreen forest is uninhabited and hence a home to rare kinds of flora and fauna:
                            uncommon species of birds,orchids and herbs.
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/2.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Muthanga Wildlife Sanctuary
                        </h2>

                        <p class="text-left">
                            A variety of large wild animals such as Indian bison,deer,elephant and tiger (rare
                            sightings) are found there. There are also quite a few unusual birds in the sanctuary.
                        </p>
                    </div>
                </div>
            </a>

            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/3.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Edakkal Caves
                        </h2>

                        <p class="text-left">
                            Edakkal Caves are situated about 12 kms from Sulthan Bathery and tourists have to trek up
                            the Ambukuthi Hill to reach the caves.
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/4.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Banasura Sagar Dam
                        </h2>

                        <p class="text-left">
                            It is the largest earth dam in India and the second largest of its kind in Asia. The dam is
                            made up of massive stacks of stones and boulders.
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/5.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Meenmutty Falls
                        </h2>

                        <p class="text-left">
                            It is a three-tiered waterfall with a height of 300 metres. A part of Meenmutty could be
                            accessed from Banasura.
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/6.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Pookode Lake
                        </h2>

                        <p class="text-left">
                            This is a scenic freshwater lake in the Wayanad district in Kerala,South India. It is a
                            natural fresh water lake nestling amid evergreen forests and mountain slopes at an altitude
                            of 770 meters above sea level.
                        </p>
                    </div>
                </div>
            </a>

            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/7.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Lakkidi View Point
                        </h2>

                        <p class="text-left">
                            Lakkidi is one of the highest locations in Wayanad. It is situated 700 m above mean sea
                            level, atop Thamarashery ghat pass.
                        </p>
                    </div>
                </div>
            </a>

            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/8.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Chembra Peak
                        </h2>

                        <p class="text-left">
                            Hike up the rugged terrains of the Chembra Peak located 2,100 metres above sea level on the
                            southern part of Wayanad. Chembra is the tallest peak in Wayanad
                        </p>
                    </div>
                </div>
            </a>

            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('website/assets/images/wnd/9.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Soochipara Falls
                        </h2>

                        <p class="text-left">
                            Sentinel Rock Waterfalls is located in Wayanad district of Kerala. Locally known as
                            Soochipara (needle rock) waterfalls, the pool at the foot of the falls is ideal for a quick
                            dip.
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/wnd/10.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Kanthampara Falls
                        </h2>

                        <p class="text-left">
                            A beautiful waterfall situated about 22 km away from Kalpetta. Smaller than the Sentinel
                            Rock waterfalls
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/wnd/11.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Ambalavayal Farm
                        </h2>

                        <p class="text-left">
                            This farm grows a wide variety of crops like coffee, pepper, rice including scented
                            varieties, spices like ginger, turmeric, clove, cinnamon
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/wnd/12.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Ambalavayal Museum
                        </h2>

                        <p class="text-left">
                            Four sectors of the museum—the Verasmruthi,the Gothrasmruthi, the Devasmruthi, and the
                            Jeevanasmruthi—house different types of items
                        </p>
                    </div>
                </div>
            </a>

            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/wnd/13.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Karlad Lake
                        </h2>

                        <p class="text-left">
                            Karlad Lake is located in Thariode, which is around 16 km away from Kalpetta. This is the
                            second largest freshwater lake in the state
                        </p>
                    </div>
                </div>
            </a>


            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/wnd/14.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Tholpetty
                        </h2>

                        <p class="text-left">
                            Wayanad Wildlife Sanctuary is spread across 344 square kms with four ranges namely Sulthan
                            Bathery, Muthanga, Kurichiat and Tholpetty..
                        </p>
                    </div>
                </div>
            </a>

            <a href="wayanad.php">
                <div class="item">
                    <div class="imagebox_acoommodation imh"
                        style="background: url('website/assets/images/wnd/15.jpg') right;">
                        <!-- <div class="name_accommodation">

                    </div> -->
                    </div>
                    <div class="details_accommodation text-center rps">

                        <h2 class="blc text-left">
                            Thirunelli Temple
                        </h2>

                        <p class="text-left">
                            It is an ancient temple dedicated to Lord Maha Vishnu beside the Brahmagiri hills in Kerala.
                            The temple is at an altitude of about 900m in north Wayanad
                        </p>
                    </div>
                </div>
            </a>











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
