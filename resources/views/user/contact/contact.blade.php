
@extends('layouts.user')
@section('content')
<div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="top-text header-text">
            <h6>Keep in touch with us</h6>
            <h2>Feel free to send us a message about your needs</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="inner-content">
            <div class="row">
              <div class="col-lg-6">
                <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57903.16604574751!2d91.82596223258125!3d24.899759462895172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e0!3m2!1sen!2sbd!4v1645599563787!5m2!1sen!2sbd" width="100%" height="650px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <form id="contact" action="" method="get">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                      </fieldset>
                    </div>
                    <!-- <div class="col-lg-12">
                      <ul>
                        <li><input type="checkbox" name="option1" value="cars"><span>Air Condition</span></li>
                        <li><input type="checkbox" name="option2" value="aparmtents"><span>Air Condition</span></li>
                        <li><input type="checkbox" name="option3" value="shopping"><span>Air Condition</span></li>
                        <li><input type="checkbox" name="option4" value="food"><span>Air Condition</span></li>
                        <li><input type="checkbox" name="option5" value="traveling"><span>Air Condition</span></li>
                      </ul>
                    </div> -->
                    <div class="col-lg-12">
                     <form action="mailto:hiringservice5433@gmail.com" method="post">
                     <fieldset>
                        <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane"></i> Send Message</button>
                      </fieldset>
                     </form>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
