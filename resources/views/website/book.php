   
   
   <?php include 'header1.php';?>

<style type="text/css">
    .btn_bk{
        display: none !important;
    }
</style>




        <section class="section_reservation">
    <div class="container">
   
        <div class="col-xs-12 book-box" >
            <div class="imagebox_offers box_reservation">
                <form target="_blank" action="https://formsubmit.co/reservations@junglebayresorts.com" method="POST">
                <h1>
                    Book Now
                </h1>
                <p>
                    Book direct and receive the best rate, guaranteed
                </p>
           

               
                    <div class="row">

                        <div class="col-md-12">
                              <input type="text" class="form-control reservation_box" placeholder="Your full name" name="name">
                        </div>
                        <input type="hidden" name="_next" value="https://junglebayresorts.com/thanks.php">
                     

                        <div class="col-md-12">
                              <input type="text" class="form-control reservation_box" name="mobile number" placeholder="Your Mobile number *">
                        </div>

                         <div class="col-md-12">
                              <input type="date" class="form-control reservation_box" name="date" placeholder="Your Date *">
                        </div>

                         <div class="col-md-12">

                            <textarea class="form-control reservation_box" name="comment" placeholder="What you are looking for?"></textarea>
                         
                        </div>

                         <button class="btn_booknowscroll">
                Send
            </button>



                      
                    


                        
                    </div>

                  
                 

                


                </form>
            </div>
        </div>

     
    </div>
</section>









 






      <?php include 'footer.php';?>

