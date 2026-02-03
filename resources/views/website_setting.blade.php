@extends('layouts.app')

@section('content')
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl ">
        <div class="container-fluid py-1 px-3">
            @include('layouts.navbars.auth.topnav', ['title' => 'User Profile'])
            <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
                <a href="javascript:;" class="nav-link p-0">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                        <i class="sidenav-toggler-line bg-white"></i>
                    </div>
                </a>
            </div>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Type here...">
                    </div>
                </div>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        @include('auth.logout')
                    </li>
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid my-5 py-2">
        <div class="d-flex justify-content-center mb-5">
            <div class="col-lg-9 mt-lg-0 mt-4">

                <div id="alert" class="pt-4">
                    @include('components.alert')
                </div>

                <!-- Card Basic Info -->
                <div class="card mt-4" id="basic-info">
                    <div class="card-header">
                        <h5>Website Info</h5>
                    </div>
                    <div class="card-body pt-0">
                        <form method="POST" action="{{ route('website-setting-update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="avatar" id="file-input" accept="image/*" class="d-none">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">Website Title</label>
                                    <div class="input-group">
                                        <input id="firstname" name="title" class="form-control" type="text"
                                        value="{{ website_title() }}" placeholder="Alec">
                                    </div>
                                    @error('title')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Website Support Email</label>
                                    <div class="input-group">
                                        <input id="lastname" name="support_email" class="form-control" type="text"
                                        value="{{ support_email() }}" placeholder="Thompson">
                                    </div>
                                    @error('support_email')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>                                
                            </div>
                            <label class="mt-4">Description</label>
                            <textarea name="description" rows="4" class="w-100 form-control">{{ webiste_description() }}</textarea>
                            @error('description')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label mt-4">Contact Number</label>
                                    <div class="input-group">
                                        <input id="phone" name="phone" class="form-control" type="number"
                                        value="{{ website_contact_no() }}"placeholder="+40 735 631 620">
                                    </div>
                                    @error('phone')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label class="form-label mt-4">Website Logo</label>
                                    <div class="input-group">
                                        <input id="" name="attachment" class="form-control" type="file">
                                    </div>
                                    @error('attachment')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>
                            </div>

                            <label class="mt-4">Address</label>
                            <textarea name="address" rows="4" class="w-100 form-control">{{ webiste_address() }}</textarea>
                            @error('address')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror
                            
                            <br>
                            <br>
                            <a href="/upload/website-logo/{{website_logo()}}" target="_blank">
                                <img src="/upload/website-logo/{{website_logo()}}" alt="" style="width: 100px;  height: 100px;"> 
                            </a>

                            <button type="submit" class="btn bg-gradient-dark btn-sm float-end mt-6 mb-0">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script src="/assets/js/plugins/choices.min.js"></script>
   
@endpush
