
@extends('layouts/app')

@section('content')
  <div id="waitlist-page">
    <div class="content-box">
      <div class="row">
        <div class="col-md-6">
          <h1>Get On The List</h1>
        </div>
        <div class="col-md-6">
          <p>* Please not this is not a reservation and you will only be added to the current waitlist. And you may have a short wait when you arrive as we perpare your table. </p>
        </div>
        <form class="col-md-12">
          <div class="row">
            <div class="form-group col-md-6">
              <label for="fname-input">First Name</label>
              <input type="text" class="form-control" name="fname" id="fname-input" placeholder="John">
            </div>
            <div class="form-group col-md-6">
              <label for="lname-input">Last Name</label>
              <input type="text" class="form-control" name="lname" id="lname-input" placeholder="Smith">
            </div>
            <div class="form-group col-md-6">
              <label for="email-input">Email address</label>
              <input type="text" class="form-control" name="email" id="email-input" placeholder="name@example.com">
            </div>
            <div class="form-group col-md-6">
              <label for="phone-input">Phone #</label>
              <input type="text" class="form-control" name="phone" id="phone-input" placeholder="555-555-5555">
            </div>
            <div class="form-group col-md-6">
              <label for="guest-count">How many guests</label>
              <select class="form-control" name="guests" id="guest-count">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="picked-time">Pick Time?</label>
              <select class="form-control" name="time" id="picked-time">
                <option value="5">5:00 p.m.</option>
                <option value="6">6:00 p.m.</option>
                <option value="7">7:00 p.m.</option>
                <option value="8">8:00 p.m.</option>
                <option value="9">9:00 p.m.</option>
              </select>
            </div>
          </div>
          <div class="form-group col-md-12 confirm-btn">
             <button type="submit" name+"submit" class="btn btn-primary">Confirm Selection</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
