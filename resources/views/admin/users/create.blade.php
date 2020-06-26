
@extends('layouts/admin')

@section('content')
  <div class="container-fluid  dashboard-content">
      <!-- ============================================================== -->
      <!-- pageheader -->
      <!-- ============================================================== -->
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-header">
                  <h2 class="pageheader-title">New Users</h2>
                  <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                  <div class="page-breadcrumb">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                              <li class="breadcrumb-item"><a href="/admin/users" class="breadcrumb-link">All Users</a></li>
                              <li class="breadcrumb-item active" aria-current="page">New Users</li>
                          </ol>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- end pageheader -->
      <!-- ============================================================== -->
      <div class="row">
              <!-- ============================================================== -->
              <!-- basic form -->
              <!-- ============================================================== -->
              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                  <div class="card">
                      <h5 class="card-header">Create New User</h5>
                      <div class="card-body">
                          <form method="POST" action="/admin/users">
                            @csrf
                              <div class="form-group">
                                  <label for="input-users-fname">First Name</label>
                                  <input id="input-users-fname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus placeholder="First Name">
                                  @error('fname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="input-users-lname">Last Name</label>
                                  <input id="input-users-lname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus placeholder="Last Name">
                                  @error('lname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="input-users-email">Email</label>
                                  <input id="input-users-email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="input-users-password">Password</label>
                                  <input id="input-users-password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                              <div class="form-group">
                                  <label for="confirm-users-password">Confirm Password</label>
                                  <input id="confirm-users-password" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                              </div>
                              <div class="form-group">
                                <label for="input-role">Select Role</label>
                                <select name="role_id" class="form-control"  id="input-role">
                                  @foreach ($roles as $role)
                                    <option value="{{$role->id}}""
                                    @if ($role->title == 'Admin')
                                        selected
                                    @endif
                                    >{{$role->title}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="row">
                                  <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                  </div>
                                  <div class="col-sm-6 pl-0">
                                      <p class="text-right">
                                          <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                      </p>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end basic form -->
            </div>
@endsection
