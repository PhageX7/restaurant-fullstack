
@extends('layouts/app')

@section('content')
  <div id="offers-page">
    <div class="content-box">
      <form class="offset-md-2">
        <div class="row">
          <div class="col-md-6">
            <h1>Offers Registration</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
                <label for="fname-input">First Name</label>
                <input type="text" class="form-control" name="fname" id="fname-input" placeholder="John">
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label for="lname-input">Last Name</label>
              <input type="text" class="form-control" name="lname" id="lname-input" placeholder="Smith">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <div class="form-group">
                <label for="email-input">Email address</label>
                <input type="text" class="form-control" name="email" id="email-input" placeholder="name@example.com">
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
              <label for="phone-input">Phone #</label>
              <input type="text" class="form-control" name="phone" id="phone-input" placeholder="555-555-5555">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
             <button type="submit" name+"submit" class="btn btn-primary">Confirm Selection</button>
          </div>
          <div class="form-group col-md-5">
            <p> <span><input type="checkbox" name="checkbox" value=""></span> * I confirm that I am at least 18 years of age or older. This registration permits Good Burger to promote and advertsie their offers in the context of emails and other forms of contact with hereby permissions given.</p>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
