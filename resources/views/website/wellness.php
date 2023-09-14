   <?php include 'header1.php';?>

      <style type="text/css">
       
       .owl-prev {
    position: absolute;
    left: 50px;
    top: 0px;
}

.owl-next {
    position: absolute;
    right: 50px;
    top: 0px;
}
</style>

 <div id="maximage">
            <div class="mc-image">
                <div class="overlay_slide">
                    <img class="laptop-img" src="assets/images/facilities/spa/1.jpg">
                    <img class="mobile-img" src="assets/images/sp1.jpg">

                    <div class="text_slide text_slide2">
                        <ul>
                            <li>
                               <!--  <h1 class="mt-55">Wellness</h1> -->
                            </li>
                            <li>
                                <!-- <p>Selection of accommodation and warmly service from Bundhaya. </p> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mc-image">
                <div class="overlay_slide">
                    <img class="laptop-img" src="assets/images/facilities/spa/2.jpg">
                    <img class="mobile-img" src="assets/images/sp2.jpg">

                    <div class="text_slide text_slide2">
                        <ul>
                            <li>
                                <!-- <h1 class="mt-55">Wellness</h1> -->
                            </li>
                            <li>
                               <!--  <p>Selection of accommodation and warmly service from Bundhaya. </p> -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
       
          
            
    
    

        </div>

<!--         <section class="section_ibe">
    <div id="book"></div>
    <form name="form_booking" action="https://ibe.hoteliers.guru/ibe/search-room-rate" method="get"
          onSubmit="return fncSubmit();">
        <input type="hidden" name="hotel_id" value="89">

        <div class="reservation_box widget_02">
            <div class="">
                <div class="bestrate">
                    <img src="assets/images/icon/check.png"> <span>BEST RATE GUARANTEED</span>
                </div>
                <ul class="reservation">
                    <li style="width: 100%!important;">
                        <div class="content_ibe text_bookyourstay">
                            <p>
                                RESERVAtion YOUR STAY
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="content_ibe box_checkinout">
                            <img src="assets/images/icon/calendar.png">
                            <div class="clearfix"></div>
                            <label class="text_reser">Check-in</label>
                            <div id="indate-calendar" class="input_in_out">
                                <input type="hidden" id="indate" name="check_in">
                                <span id="indate-label"></span>
                                <div class="clearfix"></div>
                                <span id="inmonth-label"></span>
                                <span id="inyear-label"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="content_ibe box_checkinout">
                            <img src="assets/images/icon/calendar.png">
                            <div class="clearfix"></div>
                            <label class="text_reser">Check-out</label>
                            <div id="outdate-calendar" class="input_in_out">
                                <input type="hidden" id="outdate" name="check_out" readonly="readonly"/>
                                <span id="outdate-label"></span>
                                <div class="clearfix"></div>
                                <span id="outmonth-label"></span>
                                <span id="outyear-label"></span>
                            </div>
                        </div>
                    </li>
                    <li class="night_none">
                        <input type="text" id="night" value="1" class="input_night">
                    </li>
                    <li style="width: 100%!important;">
                        <div class="content_ibe box_numberroom">

                            <div class="reservation-check">
                                <select class="input-room" id="chknoofroom" name="chknoofroom"
                                        onchange="javascript: displayNumberOfrooms(this.value, 'main-page');displayRoomList(this.value);"
                                        onclick="javascript: displayRoomList(this.value);">
                                    <option value="0">Number Of Room</option>
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Room</option>
                                    <option value="3">3 Room</option>
                                    <option value="4">4 Room</option>
                                    <option value="5">5 Room</option>
                                </select>
                                <img src="assets/plugins/ibe-widget2/images/down-arrow.png" class="arrow_room">
                                <div class="tooltip_room">
                                    <h4>
                                        Please Select Room
                                    </h4>
                                </div>

                            </div>

                            <div id="popup_room_list" class="popup_content">
                                <div id="numberrroomRow" class="numberroom" style="display: none;">
                                    <label>Number Of Room</label>
                                    <label id="numberOfRoom1">1/1</label>

                                    <div id="numOfroom"></div>
                                    <div class="form-group form_group_half">
                                        <div id="adultRoom1"
                                             class="input-group select-no-rd select-wrapper">
                                            <div class="input-group-addon">Adults</div>
                                            <i class="fa fa fa-angle-down arrow" aria-hidden="true"></i>
                                            <select class="no-radius select-form" id="chknoadult"
                                                    name="total_adult[0]">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form_group_half">
                                        <div id="childRoom1"
                                             class="input-group select-no-rd select-wrapper">
                                            <div class="input-group-addon">Children</div>
                                            <i class="fa fa-angle-down arrow" aria-hidden="true"></i>
                                            <select class="no-radius select-form" id="chknochild"
                                                    name="total_child[0]"
                                                    onchange="javascript: displayAgeOfChildren2(this.value,1);">
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="ageRow1" style="display: none;">
                                        <label>Age of Children (Yrs)</label>
                                        <div id="ageOfChildren1"></div>
                                    </div>
                                    <div id="total_adult_child"></div>
                                    <div>
                                        <input type="button" value="Click to Apply" class="btn_apply">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="width: 100%!important;">
                        <div class="content_ibe box_numberroom">
                            <input type="text" id="txtPromoCd2" class="input_promocode" placeholder="Promocode" name="promoCode">
                        </div>
                    </li>
                    <li id="btn-booknow" style="width: 100%!important;">
                        <div class="content_ibe">
                            <input type="submit" value="Book Now" class="btnbook_reser">
                        </div>
                    </li>
                </ul>
                <div class="clearfix"></div>
                <input type="hidden" id="current_no_children1" value="0">
                <input type="hidden" id="current_no_rooms" value="1">
            </div>
        </div>
    </form>
</section> -->


<section id="section_scrolldown" class="demo">
    <a href="#scrolldown"><span></span></a>
</section>

<div class="section_arrow_slide">
    <a href="#" id="arrow_left">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
    </a>
    <a href="#" id="arrow_right">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
    </a>
</div>

<div class="section_bundhayaphoto">
    <p>
        <span class="text_orange"></span> 
    </p>
</div>
    </section>

    <section class="section_welcome section_accommodationpage ">

        <div class="container mt-55">

              <h1 class="mt-55">
            Bhoomi - The Ayurvedic Spa
        </h1>
       <!--  <p class="text_text_orange">
            Relax your body & Restore your spirit & Relax your mind
        </p> -->
        <p>
         The Ayurvedic spa at Jungle Bay is one of the best in the region. It has two therapy rooms and
aesthetically designed interiors. There are full time therapists and a doctor on call here.
        </p>

        <p>
            Ayurveda is one of the oldest healing system in the world with historical roots in the Indian
subcontinent . Kerala is the ideal destination to explore Ayurveda and its benefits.
        </p>

        <p>
            As per Ayurveda the three basic bodily doshas , are vata (space or air, equated with the nervous
system), pitta (fire, equated with enzymes), and kapha (earth and water, equated with
mucus). Ayurveda has eight ways to diagnose illness, called Nadi (pulse), Mootra
(urine), Mala (stool), Jihva (tongue), Shabda (speech), Sparsha (touch), Druk (vision), and Aakruti
(appearance).
        </p>


        

            
        </div>

        <div class="und">
                                   
        </div>

      


       
        
    </section>

    <section>
        <div class="container mt-55">

            <div class="row mt-55">

                  <div class="col-md-6 ">
                <div class="owl-carousel owl-theme slide_contentchild ">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/1.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/1.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/1.jpg') right;">
                            

                        </div>
                    </div>

                </div>
         
            </div>


            <div class="col-md-6 pad-20">
                  <h1 class="mt-55">Abhyanga <small>(Full body Oil Massage)</small></h1>
       <p>Uzhichil, also known as Abhyanga, is an extremely beneficial oil massage, where large quantities of
oil infused with herbs are used to carry out a deep massage. The benefits of the herbs are spread
throughout the body during the massage, and are absorbed by the skin, while the powerful strokes
stimulate the body’s blood and lymphatic circulation. The therapy lasts around 45 minutes.</p>
            </div>

        </div>



           <div class="row mt-1">
             <div class="col-md-6 pad-20">
                <h1 class="mt-55">Shirodhara <small>(Full body and Head massage)</small></h1>
<p>It’s an Ayurvedic healing technique that involves pouring oil onto your forehead after you lie on your
back. It’s often combined with a scalp, or head massage. There would be a fully body massage also
along with this. The liquid will be heated to match with your body temperature. The therapy lasts for
around 1 hour.</p>
                
            </div>
              <div class="col-md-6">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/2.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/2.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/2.jpg') right;">
                            

                        </div>
                    </div>

                </div>
         
            </div>
           


                
            </div>

            <div class="row">
                 <div class="col-md-6 ">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/3.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/3.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/3.jpg') right;">
                            

                        </div>
                    </div>

                </div>
         
            </div>

            <div class="col-md-6  pad-20">
                  <h1 class="mt-55">Shiro Abhyanga <small>(Head Massage)</small></h1>
       <p>This is performed by pouring a gentle, steady and relaxing stream of herbal massage oil on to your
scalp, forehead and neck.This involves a complete massage and relaxation of the upper body. It
helps in treating hair loss, scalp dryness and dandruff. The therapy lasts for around 30 minutes.</p>
            </div>
                
            </div>

             <div class="row">

                <div class="col-md-6 pad-20">
                <h1 class="mt-55">Pada Abhyanga <small>(Foot Massage)</small></h1>
<p>The feet are known to be the seat of the meridians with many nerve endings and Marma. In this
therapy the feet are massaged in a synchronous way, from the ankle, the toes up to the soles, with a
focus on certain pressure points and Marmas. The therapy lasts for around 30 minutes.</p>
                
            </div>


                                 <div class="col-md-6">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/1.png') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/1.png') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/1.png') right;">
                            

                        </div>
                    </div>

                </div>
         
            </div>

                
            
            
            
                
            </div>


            <div class="row">

                               <div class="col-md-6 ">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/4.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/4.jpg') right;">
                            

                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/4.jpg') right;">
                            

                        </div>
                    </div>

                </div>
         
            </div>

             <div class="col-md-6 pad-20 ">
                  <h1 class="mt-55">Mukha lepam <small>(Face Massage and face pack)</small></h1>
       <p>In this treatment, first the face is gently massaged is with a medicated oil which is followed by
steaming with herbally treated steam. Then, a medicated paste is applied on the entire face and

retained till the paste is completely dry. This is used to treat pimples, remove acne scars and to
make the complexion soft, smooth and glowing. The therapy lasts for around 30 minutes.</p>
            </div>
                
            </div>

             <div class="row">

                 <div class="col-md-6 pad-20">
                <h1 class="mt-55">Udwarthanam <small>(Full Body Scrub)</small></h1>
<p>Udvartana is an invigorating full body massage done in a rhythmic motion using herbal powder or
paste. The powder is slightly warmed, and spread over the body through a dry massage. The
invigorating stroke actions, coupled with the dry coarse powder activates the metabolic rate. This
therapy is largely recommended for diabetic neuropathy, obesity, paralysis, skin care and
indigestion. The therapy lasts for around 1 hour.</p>
                
            </div>

                               <div class="col-md-6">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/5.jpg') right;"> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/5.jpg') right;">                
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/5.jpg') right;">

                        </div>
                    </div>

                </div>
         
            </div>

                
           
            
           
                
            </div>

            <div class="row">

                <div class="col-md-6 ">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/6.jpg') right;"> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/6.jpg') right;">                
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/6.jpg') right;">

                        </div>
                    </div>

                </div>
         
            </div>

                  <div class="col-md-6  pad-20">
                  <h1 class="mt-55">Podikizhi <small>(Full body oil and Powder massage)</small></h1>
       <p>This involves full body massage using kizhis (cotton pouch) with a mixture of herbs, dipped in
medicated oils. It is also applied without oil if dry heat is necessary. It is effective in treating the
joints, spine, lower back, and muscles.The therapy lasts for around 1 hour.</p>
            </div>
                
            </div>

             <div class="row">
                 <div class="col-md-6 pad-20">
                <h1 class="mt-55">Pizhichil <small>(Full body oil rejuvenation)</small></h1>
<p>Pizhichil involves soft massage of the whole body in streams of lukewarm medicated oils. A special
linen cloth is dipped into a medicated oil mixture, and squeezed over the body. It improve blood
circulation and eliminate toxins from your body. The therapy lasts for around 1 hour.</p>
                
            </div>

                           <div class="col-md-6">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/7.jpg') right;"> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/7.jpg') right;">                
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/7.jpg') right;">

                        </div>
                    </div>

                </div>
         
            </div>

                
      
          
           
                
            </div>

            <div class="row">

                  <div class="col-md-6">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/8.jpg') right;"> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/8.jpg') right;">                
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/8.jpg') right;">

                        </div>
                    </div>

                </div>
         
            </div>


            <div class="col-md-6 pad-20">
                  <h1 class="mt-55">Ayurvedic Pedicure</h1>
       <p>This includes soaking your feet in a warm tub for a couple of minutes followed by a foot-scrub and a
holistic massage of the feet that would finally leave your skin feeling supple and fresh. Enhanced
blood circulation, relaxation of the mind and relief from pain are some of the benefits one gets
through a pedicure. The therapy lasts for around 30 minutes.</p>
            </div>
                
            </div>


            <div class="row">

                 <div class="col-md-6 pad-20">
                <h1 class="mt-55">Prishta Abhyanga <small>(Back massage)</small></h1>
<p>Prishta Abhyanga is a lower back and legs massage with Ayurvedic herbal oil. By working on the
muscles, tendons, ligaments and joints the massage can improve flexibility and the range of motion
of the joints. It is recommended for back and joint pains. The therapy lasts for around 30 minutes.</p>
                
            </div>


                  <div class="col-md-6">
                <div class="owl-carousel owl-theme slide_contentchild">
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/2.png') right;"> 
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/2.png') right;">                
                        </div>
                    </div>
                    <div class="item">
                        <div class="imagebox_acoommodation imh"
                             style="background: url('assets/images/2/2.png') right;">

                        </div>
                    </div>

                </div>
         
            </div>

                
            
            
           
                
            </div>



      

          
          

          
        
























































            
        </div>
        
    </section>

   <!--  <section class="section_contentchild">
        <div class="titlename">
            <div class="details_titlename">
                <p>Room<br>Amenities</p>
            </div>
        </div>

        <div class="section_amenities section_prices">
            <div class="container">
                <h1 class="mt-55">
                    Bundhaya Wellness Spa and Massage
                </h1>
                <div id="accordion">
                    <div class="panel-default">
                        <div class="panel-heading tab-promotion">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Pricelist" class="collapsed"
                               aria-expanded="false">
                                <p class="panel-title">
                                    Bundhaya Wellness Spa and Massage Price List <span class="glyphicon hide_detail glyphicon_size glyphicon-plus"></span>
                                </p>
                            </a>

                        </div>
                        <div id="Pricelist" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <table id="table_price">
                                    <tbody><tr class="alt">
                                        <td class="details_price">spa</td>
                                        <td>Time</td>
                                        <td>Price</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">Jacuzzi Bath</td>
                                        <td>45 Minute</td>
                                        <td>450 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">Sauna Room</td>
                                        <td>45 Minute</td>
                                        <td>450 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">Thai Herbal Heat (Steam room)</td>
                                        <td>45 Minute</td>
                                        <td>450 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">Thai Herbal Heat (Steam room) and Jacuzzi Bath</td>
                                        <td>1.30 Hours</td>
                                        <td>800 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">Aromatherapy Oil Massage and Sauna Room</td>
                                        <td>1.30 Hours</td>
                                        <td>800 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">Body Scrub and Thai Herbal Heat (Steam room)</td>
                                        <td>1.30 Hours</td>
                                        <td>950 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">Body Scrub and Jacuzzi Bath</td>
                                        <td>1.30 Hours</td>
                                        <td>950 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">Body Scrub and Sauna Room</td>
                                        <td>1.30 Hours</td>
                                        <td>950 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">Oil Massage and Thai Herbal Compress</td>
                                        <td>1.30 Hours</td>
                                        <td>1,100 THB</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel-default">
                        <div class="panel-heading tab-promotion">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Leelawadeepackage" class="collapsed"
                               aria-expanded="false">
                                <p class="panel-title">
                                    Leelawadee Package <span class="glyphicon hide_detail glyphicon_size glyphicon-plus"></span>
                                </p>
                            </a>

                        </div>
                        <div id="Leelawadeepackage" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <table id="table_price">
                                    <tbody><tr class="alt">
                                        <td class="details_price">Package</td>
                                        <td>Time</td>
                                        <td>Price</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Leelawadee Package</span><br>
                                                (body Scrub/Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Jacuzzi bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Chaba Package</span><br>
                                                (body Scrub/Thai Herbal Steam and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sai-Numm Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>3.00 Hours</td>
                                        <td>1,700 THB</td>

                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sabai-Arom Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Facial
                                                Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Facial Massage.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sanng-Jann Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Nail
                                                Manicure)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Nail Manicure.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel-default">
                        <div class="panel-heading tab-promotion">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Chabapackage" class="collapsed"
                               aria-expanded="false">
                                <p class="panel-title">
                                    Chaba Package <span class="glyphicon hide_detail glyphicon_size glyphicon-plus"></span>
                                </p>
                            </a>

                        </div>
                        <div id="Chabapackage" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <table id="table_price">
                                    <tbody><tr class="alt">
                                        <td class="details_price">Package</td>
                                        <td>Time</td>
                                        <td>Price</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Leelawadee Package</span><br>
                                                (body Scrub/Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Jacuzzi bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Chaba Package</span><br>
                                                (body Scrub/Thai Herbal Steam and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sai-Numm Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>3.00 Hours</td>
                                        <td>1,700 THB</td>

                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sabai-Arom Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Facial
                                                Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Facial Massage.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sanng-Jann Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Nail
                                                Manicure)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Nail Manicure.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel-default">
                        <div class="panel-heading tab-promotion">
                            <a data-toggle="collapse" data-parent="#accordion" href="#SaiNummpackage" class="collapsed"
                               aria-expanded="false">
                                <p class="panel-title">
                                    Sai-Numm Package <span class="glyphicon hide_detail glyphicon_size glyphicon-plus"></span>
                                </p>
                            </a>

                        </div>
                        <div id="SaiNummpackage" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <table id="table_price">
                                    <tbody><tr class="alt">
                                        <td class="details_price">Package</td>
                                        <td>Time</td>
                                        <td>Price</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Leelawadee Package</span><br>
                                                (body Scrub/Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Jacuzzi bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Chaba Package</span><br>
                                                (body Scrub/Thai Herbal Steam and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sai-Numm Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>3.00 Hours</td>
                                        <td>1,700 THB</td>

                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sabai-Arom Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Facial
                                                Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Facial Massage.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sanng-Jann Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Nail
                                                Manicure)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Nail Manicure.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel-default">
                        <div class="panel-heading tab-promotion">
                            <a data-toggle="collapse" data-parent="#accordion" href="#SabaiArompackage" class="collapsed"
                               aria-expanded="false">
                                <p class="panel-title">
                                    Sabai-Arom Package <span class="glyphicon hide_detail glyphicon_size glyphicon-plus"></span>
                                </p>
                            </a>

                        </div>
                        <div id="SabaiArompackage" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <table id="table_price">
                                    <tbody><tr class="alt">
                                        <td class="details_price">Package</td>
                                        <td>Time</td>
                                        <td>Price</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Leelawadee Package</span><br>
                                                (body Scrub/Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Jacuzzi bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Chaba Package</span><br>
                                                (body Scrub/Thai Herbal Steam and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sai-Numm Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>3.00 Hours</td>
                                        <td>1,700 THB</td>

                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sabai-Arom Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Facial
                                                Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Facial Massage.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sanng-Jann Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Nail
                                                Manicure)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Nail Manicure.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="panel-default">
                        <div class="panel-heading tab-promotion">
                            <a data-toggle="collapse" data-parent="#accordion" href="#SanngJannpackage" class="collapsed"
                               aria-expanded="false">
                                <p class="panel-title">
                                    Sanng-Jann Package <span class="glyphicon hide_detail glyphicon_size glyphicon-plus"></span>
                                </p>
                            </a>

                        </div>
                        <div id="SanngJannpackage" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <table id="table_price">
                                    <tbody><tr class="alt">
                                        <td class="details_price">Package</td>
                                        <td>Time</td>
                                        <td>Price</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Leelawadee Package</span><br>
                                                (body Scrub/Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Jacuzzi bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Chaba Package</span><br>
                                                (body Scrub/Thai Herbal Steam and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>2.30 Hours</td>
                                        <td>1,500 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sai-Numm Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath and Aromatherapy Oil Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Oil Massage.
                                            </p>
                                        </td>
                                        <td>3.00 Hours</td>
                                        <td>1,700 THB</td>

                                    </tr>
                                    <tr class="alt">
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sabai-Arom Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Facial
                                                Massage)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Facial Massage.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price">
                                            <p class="text_left">
                                                <span class="text_orange">Sanng-Jann Package</span><br>
                                                (body Scrub/Thai Herbal Steam /Jacuzzi Bath Aromatherapy Oil Massage and Nail
                                                Manicure)<br>
                                                Indulge yourself in a full body scrub to remove dead skin cells. Relax yourself with
                                                Thai Herbal Steam , Jacuzzi Bath and the ending with Aromatherapy Body Oil Massage
                                                and Nail Manicure.
                                            </p>
                                        </td>
                                        <td>3.30 Hours</td>
                                        <td>2,000 THB</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="panel-default">
                        <div class="panel-heading tab-promotion">
                            <a data-toggle="collapse" data-parent="#accordion" href="#Thaimassage" class="collapsed"
                               aria-expanded="false">
                                <p class="panel-title">
                                    Thai massage <span class="glyphicon hide_detail glyphicon_size glyphicon-plus"></span>
                                </p>
                            </a>

                        </div>
                        <div id="Thaimassage" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                            <div class="panel-body">
                                <table id="table_price">
                                    <thead>
                                    <tr class="alt">
                                        <td class="details_price">Type</td>
                                        <td>60 Minutes (Baht)</td>
                                        <td>90 Minutes (Baht)</td>
                                        <td>120 Minutes (Baht)</td>
                                    </tr>
                                    </thead>
                                    <tbody><tr>
                                        <td class="details_price"><p class="text_left">1. Thai Massage</p></td>
                                        <td>300</td>
                                        <td>450</td>
                                        <td>550</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">2. Oil Massage</p></td>
                                        <td>300</td>
                                        <td>450</td>
                                        <td>550</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">3. Foot Massage</p></td>
                                        <td>300</td>
                                        <td>450</td>
                                        <td>550</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">4. Aroma Therapists</p></td>
                                        <td>450</td>
                                        <td>600</td>
                                        <td>800</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">5. Coconut Oil Massage</p></td>
                                        <td>450</td>
                                        <td>600</td>
                                        <td>800</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">6. Head Massage</p></td>
                                        <td>300</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"<p class="text_left">7. Head, Bachand shoulder</p></td>
                                        <td>350</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">8. Foot scrub Massage</p></td>
                                        <td>350</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">9. Face Massage</p></td>
                                        <td>500</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td class="details_price"><p class="text_left">10. Body scrub Massage</p></td>
                                        <td>600</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <br>
                                <p>
                                    Thai Traditional massage & oil massage A Thai traditional massage will
                                    surely get the blood running through you veins.Oil Massage definitely gives you a full
                                    relaxation.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="row_contentchild">
            <div class="owl-carousel owl-theme slide_photo">
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('assets/images/facilities/spa/spa-02.jpg') right;"></div>
                </div>
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('assets/images/facilities/spa/1.jpg') right;"></div>
                </div>
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('assets/images/facilities/spa/spa-04.jpg') right;"></div>
                </div>
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('assets/images/facilities/spa/spa-05.jpg') right;"></div>
                </div>
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('assets/images/facilities/spa/2.jpg') right;"></div>
                </div>
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('assets/images/facilities/spa/1.jpg') right;"></div>
                </div>
                <div class="item">
                    <div class="imagebox_acoommodation imh" style="background: url('assets/images/facilities/spa/spa-04.jpg') right;"></div>
                </div>

            </div>
        </div>

    </section>

      <?php include 'footer.php';?>

