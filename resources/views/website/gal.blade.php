   @extends('website.header')



   <div class="section_arrow_slide">
       <a href="#" id="arrow_left">
           <i class="fa fa-long-arrow-up" aria-hidden="true"></i>
       </a>
       <a href="#" id="arrow_right">
           <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
       </a>
   </div>

   <!-- <div class="section_bundhayaphoto">
    <p>
        <span class="text_orange">Junglebay</span>  Photo
    </p>
</div>
    </section> -->

   <section class="section_welcome section_accommodationpage text-center ">
       <div id="scrolldown"></div><br><br><br><br>
       <h4 class="sub">Gallery</h4>

   </section>

   <section class="section_contentchild section_gallery">


       <div class="demo-gallery">
           <div class="col-xs-6" data-src="web/assets/images/pv/1.jpg">
               <div id="accommodation">
                   <div class="view overlay_gallery hm-red-strong">
                       <img class="img-responsive" src="web/assets/images/pv/1.jpg" alt=""
                           style="display: none;">
                       <div class="image_photo item_img" style="background: url('web/assets/images/pv/1.jpg') center;">
                       </div>
                       <div class="mask flex-center">
                           <div class="text_gallery_hover">
                               <i class="fa fa-search-plus" aria-hidden="true"></i>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="group_gallery">
                   <p>
                       Stay
                   </p>
               </div>

           </div>
           <div class="col-xs-3" data-src="web/assets/images/dining/35.jpeg">
               <div id="restaurant">
                   <div class="view overlay_gallery hm-red-strong">
                       <img class="img-responsive" src="web/assets/images/dining/35.jpeg" alt=""
                           style="display: none;">
                       <div class="image_photo item_img"
                           style="background: url('web/assets/images/dining/35.jpeg') center;"></div>
                       <div class="mask flex-center">
                           <div class="text_gallery_hover">
                               <i class="fa fa-search-plus" aria-hidden="true"></i>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="group_gallery">
                   <p>
                       Restaurant
                   </p>
               </div>

           </div>
           <div class="col-xs-3" data-src="web/assets/images/facilities/spa/2.jpg">
               <div id="spa">
                   <div class="view overlay_gallery hm-red-strong">
                       <img class="img-responsive" src="web/assets/images/facilities/spa/2.jpg" alt=""
                           style="display: none;">
                       <div class="image_photo item_img"
                           style="background: url('web/assets/images/facilities/spa/2.jpg') center;"></div>
                       <div class="mask flex-center">
                           <div class="text_gallery_hover">
                               <i class="fa fa-search-plus" aria-hidden="true"></i>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="group_gallery">
                   <p>
                       Spa
                   </p>
               </div>

           </div>
           <div class="col-xs-3" data-src="web/assets/images/an/1.jpg">
               <div id="meetingroom">
                   <div class="view overlay_gallery hm-red-strong">
                       <img class="img-responsive" src="web/assets/images/an/1.jpg" alt=""
                           style="display: none;">
                       <div class="image_photo item_img" style="background: url('web/assets/images/an/1.jpg') center;">
                       </div>
                       <div class="mask flex-center">
                           <div class="text_gallery_hover">
                               <i class="fa fa-search-plus" aria-hidden="true"></i>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="group_gallery">
                   <p>
                       Amenities
                   </p>
               </div>

           </div>
           <div class="col-xs-6" data-src="web/assets/images/r1.jpg">
               <div id="other">
                   <div class="view overlay_gallery hm-red-strong">
                       <img class="img-responsive" src="web/assets/images/r1.jpg" alt="" style="display: none;">
                       <div class="image_photo item_img" style="background: url('web/assets/images/r1.jpg') center;">
                       </div>
                       <div class="mask flex-center">
                           <div class="text_gallery_hover">
                               <i class="fa fa-search-plus" aria-hidden="true"></i>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="group_gallery">
                   <p>
                       Resort
                   </p>
               </div>

           </div>
           <div class="col-xs-3" data-src="web/assets/images/7.jpg">
               <div id="activity">
                   <div class="view overlay_gallery hm-red-strong">
                       <img class="img-responsive" src="web/assets/images/7.jpg" alt="" style="display: none;">
                       <div class="image_photo item_img" style="background: url('web/assets/images/7.jpg') center;">
                       </div>
                       <div class="mask flex-center">
                           <div class="text_gallery_hover">
                               <i class="fa fa-search-plus" aria-hidden="true"></i>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="group_gallery">
                   <p>
                       Activity
                   </p>
               </div>

           </div>

       </div>



   </section>
   <!--    <section>
          <div class="col-md-12 pc">
             <a class="al" href="all-gallery.php">View All</a>
        </div>
    </section> -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
   <script type="text/javascript" src="../web/dist/simple-lightbox.js?v2.2.1"></script>
   <script type="text/javascript" src="../web/assets/js/jquery.cookiebb23.js?ver=1.9.5"></script>
   <script type="text/javascript" src="../web/assets/js/mystickyelements-fronted.minbb23.js?ver=1.9.5"></script>


   @extends('website.footer')


   <script>
       var $gallery = new SimpleLightbox('.gallery a', {});
       $(window).scroll(function() {
           if ($(this).scrollTop() > 200) {
               $('.section_arrow_slide').fadeOut();
           } else {
               $('.section_arrow_slide').fadeIn();
           }
       });
       $('#accommodation').on('click', function() {
           var url = "{{ route('gallery_images', ':id') }}";
           url = url.replace(':id', 3);
           $.get(url, function(data) {
               $(this).lightGallery({
                   dynamic: true,
                   dynamicEl: data.datasets
               })
           })

       });
       $('#restaurant').on('click', function() {
           var url = "{{ route('gallery_images', ':id') }}";
           url = url.replace(':id', 2);
           $.get(url, function(data) {
               $(this).lightGallery({
                   dynamic: true,
                   dynamicEl: data.datasets
               })
           })
       });
       $('#spa').on('click', function() {
           var url = "{{ route('gallery_images', ':id') }}";
           url = url.replace(':id', 1);
           $.get(url, function(data) {
               $(this).lightGallery({
                   dynamic: true,
                   dynamicEl: data.datasets
               })
           })
       });
       $('#meetingroom').on('click', function() {
           var url = "{{ route('gallery_images', ':id') }}";
           url = url.replace(':id', 6);
           $.get(url, function(data) {
               $(this).lightGallery({
                   dynamic: true,
                   dynamicEl: data.datasets
               })
           })
       });
       $('#activity').on('click', function() {
           var url = "{{ route('gallery_images', ':id') }}";
           url = url.replace(':id', 4);
           $.get(url, function(data) {
               $(this).lightGallery({
                   dynamic: true,
                   dynamicEl: data.datasets
               })
           })
       });
       $('#other').on('click', function() {
           var url = "{{ route('gallery_images', ':id') }}";
           url = url.replace(':id', 6);
           $.get(url, function(data) {
               $(this).lightGallery({
                   dynamic: true,
                   dynamicEl: data.datasets
               })
           })
       });
       var modal = document.getElementById("myModal");
       var img = document.getElementById("myImg1");
       var modalImg = document.getElementById("img01");
       var captionText = document.getElementById("caption");
       img.onclick = function() {
           modal.style.display = "block";
           modalImg.src = this.src;
           captionText.innerHTML = this.alt;
       }
       var span = document.getElementsByClassName("close")[0];
       span.onclick = function() {
           modal.style.display = "none";
       }
       var modal = document.getElementById("myModal");
       var img = document.getElementById("myImg2");
       var modalImg = document.getElementById("img01");
       var captionText = document.getElementById("caption");
       img.onclick = function() {
           modal.style.display = "block";
           modalImg.src = this.src;
           captionText.innerHTML = this.alt;
       }
       var span = document.getElementsByClassName("close")[0];
       span.onclick = function() {
           modal.style.display = "none";
       }
       var modal = document.getElementById("myModal");
       var img = document.getElementById("myImg3");
       var modalImg = document.getElementById("img01");
       var captionText = document.getElementById("caption");
       img.onclick = function() {
           modal.style.display = "block";
           modalImg.src = this.src;
           captionText.innerHTML = this.alt;
       }
       var span = document.getElementsByClassName("close")[0];
       span.onclick = function() {
           modal.style.display = "none";
       }
       var modal = document.getElementById("myModal");
       var img = document.getElementById("myImg4");
       var modalImg = document.getElementById("img01");
       var captionText = document.getElementById("caption");
       img.onclick = function() {
           modal.style.display = "block";
           modalImg.src = this.src;
           captionText.innerHTML = this.alt;
       }
       var span = document.getElementsByClassName("close")[0];
       span.onclick = function() {
           modal.style.display = "none";
       }
       $('#colorselector').change(function() {
           $('.colors').hide();
           $('#' + $(this).val()).show();
       });
   </script>
