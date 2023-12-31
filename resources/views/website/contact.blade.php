   @extends('website.header')

   <div id="maximage">

       @foreach ($sliders ?? [] as $slider)
       <di class="mc-image">

       <img class="laptop-img" src={{ asset('storage/' . $slider->image_url) }}>
               <img class="mobile-img" src={{ asset('storage/' . $slider->mobile_image_url) }}>
           <div class="overlay_slide">
           

               <div class="text_slide">
                   <ul>
                       <li>
                           <!-- <h1>Contact Junglebay</h1> -->
                       </li>
                       <li>

                       </li>
                   </ul>
               </div>
           </div>

   </div>
   @endforeach

   </div>

   <section class="section_reservation">
       <div class="container custom-flex-container">

           <div class="col-xs-12 col-md-6 custom-flex-item">
               <div class="imagebox_offers box_reservation">
                   <h1> Get In Touch With Us </h1>
                   <p> Book direct and receive the best rate, guaranteed </p>

                   <form action={{ route('web-save-contact') }} method="POST">
                       @csrf
                       <div class="row">

                           <div class="col-md-6 custom-flex-item p-0">
                               <input type="email" class="form-control reservation_box" placeholder="Your email address"
                                   name="email">
                           </div>

                           {{-- <input type="hidden" name="_next" value="https://junglebayresorts.com/thanks.php"> --}}

                           <div class="col-md-6">
                               <input type="text" class="form-control reservation_box" placeholder="Your full name"
                                   name="name">
                           </div>

                           <div class="col-md-12">
                               <input type="text" class="form-control reservation_box" name="phone"
                                   placeholder="Your Mobile number *">
                           </div>

                           <div class="col-md-12">

                               <textarea class="form-control reservation_box" name="comment"
                                   placeholder="What you are looking for?"></textarea>

                           </div>

                           <button class="btn_booknowscroll"> Send </button>
                       </div>
                   </form>
               </div>
           </div>

           <div class="col-xs-12 col-md-6 p-0">

               <div class="imagebox_offers">
                   <div class="book_offers">

                   </div>

                   <div class="imagebox_facilities detail_contactus">

                       <h3>
                           Jungle Bay Resorts and Spa <small>&reg;</small>
                       </h3>
                       <p>
                           Irulam, Cheeyambam Post, Wayanad, Kerala- 673579
                       </p>
                       <b>Reservations</b>
                       <p>
                           Tel: <a href="tel:+91 977 84 039 69">+91 977 84 039 69</a>
                           <br>
                           <!-- Tel: <a href="tel:97784 03969">+91 97784 03969</a>
                <br>
 --> Email: <a href="mail:reservations@junglebayresorts.com"><span
                                   class="__cf_email__">reservations@junglebayresorts.com</span></a>
                       </p>

                       <b>Sales & Marketing</b>
                       <p>
                           Tel: <a href="tel:+91 892 12 946 40">+91 892 12 946 40</a>
                           <br>
                           <!-- Tel: <a href="tel:97784 03969">+91 97784 03969</a>
                <br>
 --> Email: <a href="mail:sales@junglebayresorts.com"><span class="__cf_email__">sales@junglebayresorts.com</span></a>
                       </p>

                       <b>Resort</b>
                       <p>
                           Tel: <a href="tel:+91 892 12 946 40">+91 977 84 039 60</a>
                           <br>
                           <!-- Tel: <a href="tel:97784 03969">+91 97784 03969</a>
                <br>
 --> Email: <a href="mail:info@junglebayresorts.com"><span class="__cf_email__">info@junglebayresorts.com</span></a>
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <section class="section_contactus" style="margin-top: 20px;margin-bottom: 20px;">
       <div class="col-xs-12">
           <div class="imagebox_facilities">
               <iframe
                   src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d500619.1622849579!2d75.8020342795061!3d11.401212237041417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba5e23f262938d3%3A0x62bb038f712fe1b!2sJungle%20Bay%20Resort!5e0!3m2!1sen!2sin!4v1577463485919!5m2!1sen!2sin"></iframe>
           </div>
       </div>

   </section>

   <div class="container-fluid">
       <div class="row">
           <!-- /.col-md-8 -->

       </div><!-- /.row -->
   </div>

   @extends('website.footer')