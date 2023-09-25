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
                        <img class="img-responsive" src="web/assets/images/pv/1.jpg"
                             alt="" style="display: none;">
                        <div class="image_photo item_img"
                             style="background: url('web/assets/images/pv/1.jpg') center;"></div>
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
                        <img class="img-responsive" src="web/assets/images/dining/35.jpeg"
                             alt="" style="display: none;">
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
                        <img class="img-responsive" src="web/assets/images/facilities/spa/2.jpg"
                             alt="" style="display: none;">
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
                        <img class="img-responsive" src="web/assets/images/an/1.jpg"
                             alt="" style="display: none;">
                        <div class="image_photo item_img"
                             style="background: url('web/assets/images/an/1.jpg') center;"></div>
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
                        <img class="img-responsive" src="web/assets/images/r1.jpg"
                             alt="" style="display: none;">
                        <div class="image_photo item_img"
                             style="background: url('web/assets/images/r1.jpg') center;"></div>
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
                        <img class="img-responsive" src="web/assets/images/7.jpg"
                             alt="" style="display: none;">
                        <div class="image_photo item_img"
                             style="background: url('web/assets/images/7.jpg') center;"></div>
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
           $(this).lightGallery({
               dynamic: true,
               dynamicEl: [{
                       "src": 'asetss/images/pv/22.jpg',
                       'thumb': 'web/assets/images/pv/22.jpg',
                       'subHtml': '<h4>Duke’s Pool Villa</h4>'
                   },
                   {
                       "src": 'web/assets/images/pv/1.jpg',
                       'thumb': 'web/assets/images/pv/1.jpg',
                       'subHtml': '<h4>Duke’s Pool Villa</h4>'
                   },
                   {
                       "src": 'web/assets/images/pv/50.jpg',
                       'thumb': 'web/assets/images/pv/50.jpg',
                       'subHtml': '<h4>Duke’s Pool Villa</h4>'
                   },
                   {
                       "src": 'web/assets/images/pv/51.jpg',
                       'thumb': 'web/assets/images/pv/51.jpg',
                       'subHtml': '<h4>Duke’s Pool Villa</h4>'
                   },
                   {
                       'src': 'web/assets/images/th/1.jpg',
                       'thumb': 'web/assets/images/th/1.jpg',
                       'subHtml': "<h4>Beetle – The Tree House</h4>"
                   },
                   {
                       'src': 'web/assets/images/th/2.jpg',
                       'thumb': 'web/assets/images/th/2.jpg',
                       'subHtml': "<h4>Beetle – The Tree House</h4>"
                   },
                   {
                       'src': 'web/assets/images/th/3.jpg',
                       'thumb': 'web/assets/images/th/3.jpg',
                       'subHtml': "<h4>Beetle – The Tree House</h4>"
                   },
                   {
                       'src': 'web/assets/images/th/4.jpg',
                       'thumb': 'web/assets/images/th/4.jpg',
                       'subHtml': "<h4>Beetle – The Tree House</h4>"
                   },
                   {
                       'src': 'web/assets/images/jv/12.jpg',
                       'thumb': 'web/assets/images/jv/12.jpg',
                       'subHtml': "<h4>Regal Jacuzzi Villas</h4>"
                   },
                   {
                       'src': 'web/assets/images/jv/11.jpg',
                       'thumb': 'web/assets/images/jv/11.jpg',
                       'subHtml': "<h4>Regal Jacuzzi Villas</h4>"
                   },
                   {
                       'src': 'web/assets/images/jv/13.jpg',
                       'thumb': 'web/assets/images/jv/13.jpg',
                       'subHtml': "<h4>Regal Jacuzzi Villas</h4>"
                   },
                   {
                       'src': 'web/assets/images/bv/3.jpg',
                       'thumb': 'web/assets/images/bv/3.jpg',
                       'subHtml': "<h4>Bougain Villa</h4>"
                   },
                   {
                       'src': 'web/assets/images/bv/4.jpg',
                       'thumb': 'web/assets/images/bv/4.jpg',
                       'subHtml': "<h4>Bougain Villa</h4>"
                   },
                   {
                       'src': 'web/assets/images/pr/1.jpg',
                       'thumb': 'web/assets/images/pr/1.jpg',
                       'subHtml': "<h4> Pavilion Room</h4>"
                   },
                   {
                       'src': 'web/assets/images/pr/2.jpg',
                       'thumb': 'web/assets/images/pr/2.jpg',
                       'subHtml': "<h4> Pavilion Room</h4>"
                   },
                   {
                       'src': 'web/assets/images/pr/3.jpg',
                       'thumb': 'web/assets/images/pr/3.jpg',
                       'subHtml': "<h4> Pavilion Room</h4>"
                   },
                   {
                       'src': 'web/assets/images/ph/3.jpg',
                       'thumb': 'web/assets/images/ph/3.jpg',
                       'subHtml': "<h4> Penthouse</h4>"
                   },
                   {
                       'src': 'web/assets/images/ph/2.jpg',
                       'thumb': 'web/assets/images/ph/2.jpg',
                       'subHtml': "<h4> Penthouse</h4>"
                   },
                   {
                       'src': 'web/assets/images/ph/1.jpg',
                       'thumb': 'web/assets/images/ph/1.jpg',
                       'subHtml': "<h4> Penthouse</h4>"
                   },
                   {
                       'src': 'web/assets/images/s1.jpg',
                       'thumb': 'web/assets/images/s1.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s2.jpg',
                       'thumb': 'web/assets/images/s2.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s3.jpg',
                       'thumb': 'web/assets/images/s3.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s4.jpg',
                       'thumb': 'web/assets/images/s4.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s5.jpg',
                       'thumb': 'web/assets/images/s5.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s6.jpg',
                       'thumb': 'web/assets/images/s6.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s7.jpg',
                       'thumb': 'web/assets/images/s7.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s8.jpg',
                       'thumb': 'web/assets/images/s8.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/s9.jpg',
                       'thumb': 'web/assets/images/s9.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
               ]
           })
       });
       $('#restaurant').on('click', function() {
           $(this).lightGallery({
               dynamic: true,
               dynamicEl: [{
                   'src': '../web/web/assets/images/dining/35.jpeg',
                   'thumb': '../web/web/assets/images/dining/35.jpeg',
                   'subHtml': "<h4>Avocado – Multicuisine Restaurant</h4>"
               }]
           })
       });
       $('#spa').on('click', function() {
           $(this).lightGallery({
               dynamic: true,
               dynamicEl: [{
                   'src': 'web/assets/images/facilities/spa/2.jpg',
                   'thumb': 'web/assets/images/facilities/spa/2.jpg',
                   'subHtml': "<h4>Spa</h4>"
               }]
           })
       });
       $('#meetingroom').on('click', function() {
           $(this).lightGallery({
               dynamic: true,
               dynamicEl: [{
                       'src': 'web/assets/images/an/1.jpg',
                       'thumb': 'web/assets/images/an/1.jpg',
                       'subHtml': "<h4>junglebay Amenities</h4>"
                   },
                   {
                       'src': 'web/assets/images/an/2.jpg',
                       'thumb': 'web/assets/images/an/2.jpg',
                       'subHtml': "<h4>junglebay Amenities</h4>"
                   },
                   {
                       'src': 'web/assets/images/acoommodation/gardentriple/09.jpeg',
                       'thumb': 'web/assets/images/acoommodation/gardentriple/09.jpeg',
                       'subHtml': "<h4>junglebay Amenities</h4>"
                   },
                   {
                       'src': 'web/assets/images/cof.jpg',
                       'thumb': 'web/assets/images/cof.jpg',
                       'subHtml': "<h4>junglebay Amenities</h4>"
                   },
                   {
                       'src': 'web/assets/images/lib2.jpg',
                       'thumb': 'web/assets/images/lib2.jpg',
                       'subHtml': "<h4>junglebay Amenities</h4>"
                   }
               ]
           })
       });
       $('#activity').on('click', function() {
           $(this).lightGallery({
               dynamic: true,
               dynamicEl: [{
                       'src': 'web/assets/images/an/4.jpg',
                       'thumb': 'web/assets/images/an/4.jpg',
                       'subHtml': "<h4>junglebay Activity</h4>"
                   },
                   {
                       'src': 'web/assets/images/an/3.jpg',
                       'thumb': 'web/assets/images/an/3.jpg',
                       'subHtml': "<h4>junglebay Activity</h4>"
                   },
                   {
                       'src': 'web/assets/images/lib.jpg',
                       'thumb': 'web/assets/images/lib.jpg',
                       'subHtml': "<h4>junglebay Activity</h4>"
                   }
               ]
           })
       });
       $('#other').on('click', function() {
           $(this).lightGallery({
               dynamic: true,
               dynamicEl: [{
                       'src': 'web/assets/images/r1.jpg',
                       'thumb': 'web/assets/images/r1.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r2.jpg',
                       'thumb': 'web/assets/images/r2.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r3.jpg',
                       'thumb': 'web/assets/images/r3.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r4.jpg',
                       'thumb': 'web/assets/images/r4.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r5.jpg',
                       'thumb': 'web/assets/images/r5.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r6.jpg',
                       'thumb': 'web/assets/images/r6.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r7.jpg',
                       'thumb': 'web/assets/images/r7.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r8.jpg',
                       'thumb': 'web/assets/images/r8.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r9.jpg',
                       'thumb': 'web/assets/images/r9.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r10.jpg',
                       'thumb': 'web/assets/images/r10.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r11.jpg',
                       'thumb': 'web/assets/images/r11.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
                   {
                       'src': 'web/assets/images/r12.jpg',
                       'thumb': 'web/assets/images/r12.jpg',
                       'subHtml': "<h4>junglebay Resort</h4>"
                   },
               ]
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