
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
          <div class="inner-content" style="padding: 40px 0px;">
            <div class="row">
              <div class="col-lg-12 align-self-center">
                <form id="contact" method="POST" action="{{ route('user.hire.store') }}">
                  @csrf
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="hidden" value={{ $employee->id}}  name="employee_id" id="employee_id" placeholder="Employee Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="hidden" name="employeer_id" id="employeer_id" placeholder="Employeer Name" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="number" name="contact_no" id="contact_no" placeholder="Contact Number" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="text" name="address" id="address"  placeholder="Address" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="time" name="booking_time" id="booking_time"  placeholder="Booking Time" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="date" name="booking_date" id="booking_date"  placeholder="Booking Date" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="hidden" name="status" id="status"  placeholder="status" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-12 mb-3">
                      <select
                          class="form-control form-control-sm rounded bright" name="payment_method">
                          <option value="Stripe" >Stripe</option>
                          <option value="Cash" >Cash</option>
                         
                      </select>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane"></i> Hire</button>
                      </fieldset>
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
