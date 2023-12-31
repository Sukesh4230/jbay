   @extends('website.header')
   <style>
    .p-0{
        padding:0px !important;
    }
</style>


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
           @if ($stayImage)
               <div class="col-xs-6 p-0" data-src="{{ asset('storage/' . $stayImage) }}">
                   <div id="accommodation">
                       <div class="view overlay_gallery hm-red-strong">
                           <img class="img-responsive" src="{{ asset('storage/' . $stayImage) }}" alt=""
                               style="display: none;">
                           <div class="image_photo item_img"
                               style="background: url('{{ asset('storage/' . $stayImage) }}') center;">
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
           @endif

           @if ($restaurantImage)
               <div class="col-xs-3 p-0" data-src="{{ asset('storage/' . $restaurantImage) }}">
                   <div id="restaurant">
                       <div class="view overlay_gallery hm-red-strong">
                           <img class="img-responsive" src="{{ asset('storage/' . $restaurantImage) }}" alt=""
                               style="display: none;">
                           <div class="image_photo item_img"
                               style="background: url('{{ asset('storage/' . $restaurantImage) }}') center;"></div>
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
           @endif

           @if ($spaImage)
               <div class="col-xs-3 p-0" data-src="{{ asset('storage/' . $spaImage) }}">
                   <div id="spa">
                       <div class="view overlay_gallery hm-red-strong">
                           <img class="img-responsive" src="{{ asset('storage/' . $spaImage) }}" alt=""
                               style="display: none;">
                           <div class="image_photo item_img"
                               style="background: url('{{ asset('storage/' . $spaImage) }}') center;"></div>
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
           @endif


           @if ($amenitiesImage)
               <div class="col-xs-3 p-0" data-src="{{ asset('storage/' . $amenitiesImage) }}">
                   <div id="meetingroom">
                       <div class="view overlay_gallery hm-red-strong">
                           <img class="img-responsive" src="{{ asset('storage/' . $amenitiesImage) }}" alt=""
                               style="display: none;">
                           <div class="image_photo item_img"
                               style="background: url('{{ asset('storage/' . $amenitiesImage) }}') center;">
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
           @endif

           @if ($resortImage)
               <div class="col-xs-6 p-0" data-src="{{ asset('storage/' . $resortImage) }}">
                   <div id="other">
                       <div class="view overlay_gallery hm-red-strong">
                           <img class="img-responsive" src="{{ asset('storage/' . $resortImage) }}" alt=""
                               style="display: none;">
                           <div class="image_photo item_img"
                               style="background: url('{{ asset('storage/' . $resortImage) }}') center;">
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
           @endif



           @if ($activityImage)
           <div class="col-xs-3 p-0" data-src="{{ asset('storage/' . $activityImage) }}">
            <div id="activity">
                <div class="view overlay_gallery hm-red-strong">
                    <img class="img-responsive" src="{{ asset('storage/' . $activityImage) }}" alt="" style="display: none;">
                    <div class="image_photo item_img" style="background: url('{{ asset('storage/' . $activityImage) }}') center;">
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
           @endif


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
           url = url.replace(':id', 5);
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
