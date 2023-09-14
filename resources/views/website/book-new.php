<?php include 'header1.php';?>

<style type="text/css">
  .btn_bk {
    display: none !important;
  }
  .pad-30 {
    padding-left: 30px;
  }
  .m-0 {
    margin: 0px !important;
  }
  input[type="radio"], input[type="checkbox"] {
    display: block;
}
 .book-bg{
    background: #fff;
    padding: 15px;
}
.blc{
    color: blue;
}
</style>

<section class="section_reservation">
  <div class="container">
    <div class="col-xs-12 book-box">
      <div class="imagebox_offers box_reservation">
        <form
          target="_blank"
          action=""
          method="POST"
        >
          <h1>Book Now</h1>
          <p>Book direct and receive the best rate, guaranteed</p>

          <div class="row">
            <div class="col-md-12">
              <input
                type="text"
                class="form-control reservation_box"
                placeholder="Your full name"
                name="name"
              />
            </div>
            <input
              type="hidden"
              name="_next"
              value=""
            />

            <div class="col-md-12">
              <input
                type="text"
                class="form-control reservation_box"
                name="mobile number"
                placeholder="Your Mobile number *"
              />
            </div>

            <div class="col-md-12">
              <input
                type="date"
                class="form-control reservation_box"
                name="date"
                placeholder="Your Date *"
              />
            </div>

            <div class="col-md-12">
              <select class="form-control reservation_box" id="colorselector">
                <option selected disabled>Select Rooms</option>
                <option value="1">Duke’s Pool Villa</option>
                <option value="2">Beetle – The Tree House</option>
                <option value="3">Regal Jacuzzi Villa</option>
                <option value="4">Bougain Villa</option>
                <option value="5">Pavilion Room</option>
                <option value="6">Pent House</option>
              </select>
            </div>

            <div class="col-md-12">
              <div id="1" class="colors row p-30 book-bg" style="display: none">
                <div class="col-md-12 pad-30">
                  <div class="row p-4">
                    <div class="col-md-3 border-left">
                      <ul class="list-unstyled">
                        <li><h3>₹ 22500</h3></li>
                        <li class="text-secondary">
                          <small>(Stay including breakfast and Dinner)</small>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-6 pad-30">
                      <div class="list-title text-left">
                        <ul class="list-inline list-unstyled">
                          <li class="list-inline-item">
                            <a href="#"><h4>Duke’s Pool Villa</h4></a>
                          </li>
                        </ul>
                      </div>

                      <div class="list-descrip text-left">
                        <div class="pull-left dts">
                          <p class="text_black m-0">
                            <img
                              src="assets/images/icon/facilitiesinroom/single-bed.png"
                              class="extrabed"
                            />
                            <span class="text_orange"
                              >Premium Room (2 persons)</span
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img
                        class="img-responsive"
                        src="assets/images/pv/50.jpg"
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div id="2" class="colors row p-30 book-bg" style="display: none">
                <div class="col-md-12 pad-30">
                  <div class="row p-4">
                    <div class="col-md-3 border-left">
                      <ul class="list-unstyled">
                        <li><h3>₹ 20500</h3></li>
                        <li class="text-secondary">
                          <small>(Stay including breakfast and Dinner)</small>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-6 pad-30">
                      <div class="list-title text-left">
                        <ul class="list-inline list-unstyled">
                          <li class="list-inline-item">
                            <a href="#"><h4>Beetle – The Tree House</h4></a>
                          </li>
                        </ul>
                      </div>

                      <div class="list-descrip text-left">
                        <div class="pull-left dts">
                          <p class="text_black m-0">
                            <img
                              src="assets/images/icon/facilitiesinroom/single-bed.png"
                              class="extrabed"
                            />
                            <span class="text_orange"
                              >Premium Room (2 persons)</span
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img
                        class="img-responsive"
                        src="assets/images/th/1.jpg"
                      />
                    </div>
                  </div>
                </div>
              </div>

              <div id="3" class="colors row p-30 book-bg" style="display: none">
                <div class="col-md-12 pad-30">
                  <div class="row p-4">
                    <div class="col-md-3 border-left">
                      <ul class="list-unstyled">
                        <li><h3>₹ 15500</h3></li>
                        <li class="text-secondary">
                          <small>(Stay including breakfast and Dinner)</small>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-6 pad-30">
                      <div class="list-title text-left">
                        <ul class="list-inline list-unstyled">
                          <li class="list-inline-item">
                            <a href="#"><h4>Regal Jacuzzi Villa</h4></a>
                          </li>
                        </ul>
                      </div>

                      <div class="list-descrip text-left">
                        <div class="pull-left dts">
                          <p class="text_black m-0">
                            <img
                              src="assets/images/icon/facilitiesinroom/single-bed.png"
                              class="extrabed"
                            />
                            <span class="text_orange"
                              >Premium Room (2 persons)</span
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img
                        class="img-responsive"
                        src="assets/images/jv/11.jpg"
                      />
                    </div>
                  </div>
                </div>
              </div>

              <div id="4" class="colors row p-30 book-bg" style="display: none">
                <div class="col-md-12 pad-30">
                  <div class="row p-4">
                    <div class="col-md-3 border-left">
                      <ul class="list-unstyled">
                        <li><h3>₹ 11500</h3></li>
                        <li class="text-secondary">
                          <small>(Stay including breakfast and Dinner)</small>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-6 pad-30">
                      <div class="list-title text-left">
                        <ul class="list-inline list-unstyled">
                          <li class="list-inline-item">
                            <a href="#"><h4>Bougain Villa</h4></a>
                          </li>
                        </ul>
                      </div>

                      <div class="list-descrip text-left">
                        <div class="pull-left dts">
                          <p class="text_black m-0">
                            <img
                              src="assets/images/icon/facilitiesinroom/single-bed.png"
                              class="extrabed"
                            />
                            <span class="text_orange"
                              >Premium Room (2 persons)</span
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img
                        class="img-responsive"
                        src="assets/images/bv/2.jpg"
                      />
                    </div>
                  </div>
                </div>
              </div>


              <div id="5" class="colors row p-30 book-bg" style="display: none">
                <div class="col-md-12 pad-30">
                  <div class="row p-4">
                    <div class="col-md-3 border-left">
                      <ul class="list-unstyled">
                        <li><h3>₹ 9500</h3></li>
                        <li class="text-secondary">
                          <small>(Stay including breakfast and Dinner)</small>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-6 pad-30">
                      <div class="list-title text-left">
                        <ul class="list-inline list-unstyled">
                          <li class="list-inline-item">
                            <a href="#"><h4>Pavilion Room</h4></a>
                          </li>
                        </ul>
                      </div>

                      <div class="list-descrip text-left">
                        <div class="pull-left dts">
                          <p class="text_black m-0">
                            <img
                              src="assets/images/icon/facilitiesinroom/single-bed.png"
                              class="extrabed"
                            />
                            <span class="text_orange"
                              >Premium Room (2 persons)</span
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img
                        class="img-responsive"
                        src="assets/images/pr/1.jpg"
                      />
                    </div>
                  </div>
                </div>
              </div>

               <div id="6" class="colors row p-30 book-bg" style="display: none">
                <div class="col-md-12 pad-30">
                  <div class="row p-4">
                    <div class="col-md-3 border-left">
                      <ul class="list-unstyled">
                        <li><h3>₹ 11500</h3></li>
                        <li class="text-secondary">
                          <small>(Stay including breakfast and Dinner)</small>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-6 pad-30">
                      <div class="list-title text-left">
                        <ul class="list-inline list-unstyled">
                          <li class="list-inline-item">
                            <a href="#"><h4>Penthouse</h4></a>
                          </li>
                        </ul>
                      </div>

                      <div class="list-descrip text-left">
                        <div class="pull-left dts">
                          <p class="text_black m-0">
                            <img
                              src="assets/images/icon/facilitiesinroom/single-bed.png"
                              class="extrabed"
                            />
                            <span class="text_orange"
                              >Premium Room (2 persons)</span
                            >
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img
                        class="img-responsive"
                        src="assets/images/ph/1.jpg"
                      />
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <div class="row">
            <div class="container">
                <div class="checkbox">
  <label><input type="checkbox" value="" required>I've read and accept the <a class="blc" href="policy.php"> Online policy * </a></label>
</div>
             
                
            </div>
              
          </div>

          <button class="btn_booknowscroll">Pay Now</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php';?>
