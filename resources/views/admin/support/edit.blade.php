@extends('layouts.app')

@section('content')
        <nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky "
            id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
                @include('layouts.navbars.auth.topnav', ['title' => 'Edit Ticket'])
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
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
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
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item position-relative pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                           
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <form method="POST" action="{{ route('support-edit.update', $supoort->id) }}" enctype="multipart/form-data">
                @csrf
                    <div class="col-lg-9 col-12 mx-auto">
                        <div class="card card-body mt-4">                
                            <h6 class="mb-0">Edit Ticket</h6>
                            <!-- <p class="text-sm mb-0">Edit Ticket Create</p> -->
                            <hr class="horizontal dark my-3">

                            <label class="mt-4 form-label">Users</label>
                            <select class="form-control" name="userId"
                                id="choices-multiple-remove-button"  value="{{ old('message') ?? $supoort->userId}}">
                                <option value="">--Select--</option>
                                @foreach (App\Models\User::whereNull('role_id')->get() as $user_val)
                                    <option value="{{$user_val->id}}"  {{ $user_val->id == old('userId', $supoort->userId) ? 'selected' : '' }}>{{$user_val->firstname}}</option>
                                @endforeach
                                
                            </select>
                            @error('userId')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror

                            <label for="projectName" class="form-label">Ticket Title</label>
                            <input type="text" name="title" value="{{ old('title') ?? $supoort->title }}" class="form-control" id="projectName">
                            @error('title')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror

                            <label class="mt-4">Ticket Description</label>
                            <textarea name="message" rows="2" class="w-100 form-control">{{ old('message') ?? $supoort->message}}</textarea>
                            @error('message')
                                <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                            @enderror

                            <label class="mt-4 form-label">Attachment</label>
                                <div class="d-flex flex-column">
                                    <input type="file" name="attachment"  class="form-control">
                                    @error('avatar')
                                        <p class='text-danger text-xs pt-1'> {{ $message }} </p>
                                    @enderror
                                </div>

                            <div class="d-flex justify-content-end mt-4">
                                <a href="{{ route('support-admin-create-list') }}" class="btn btn-light m-0">Back</a>
                                <button type="submit" class="btn bg-gradient-primary m-0 ms-2">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            @include('layouts.footers.auth.footer')
        </div>
@endsection

    @push('js')
        <script src="../../../assets/js/plugins/choices.min.js"></script>
        <script src="../../../assets/js/plugins/quill.min.js"></script>
        <script src="../../../assets/js/plugins/flatpickr.min.js"></script>
        <script src="../../../assets/js/plugins/dropzone.min.js"></script>
        <script>
            if (document.getElementById('editor')) {
                var quill = new Quill('#editor', {
                    theme: 'snow' // Specify theme in configuration
                });
            }

            if (document.getElementById('choices-multiple-remove-button')) {
                var element = document.getElementById('choices-multiple-remove-button');
                const example = new Choices(element, {
                    removeItemButton: true
                });
            }

            if (document.querySelector('.datetimepicker')) {
                flatpickr('.datetimepicker', {
                    allowInput: true
                }); // flatpickr
            }

            Dropzone.autoDiscover = false;
            var drop = document.getElementById('dropzone')
            var myDropzone = new Dropzone(drop, {
                url: "/file/post",
                addRemoveLinks: true

            });
        </script>
    @endpush
