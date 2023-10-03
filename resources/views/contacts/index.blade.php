@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="mt-4">
            <div class="card">
                <h5 class="card-header"><span data-feather="home" class="me-2"></span>Contact</h5>
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mt-4 mb-3 text-800">Slider Images</h4>
                            <button class="btn btn-primary float-end mb-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#verticallyCentered">
                                Add Slider Image
                            </button>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>

                                        <th class="p-2" scope="col">Image</th>
                                        <th class="p-2" scope="col">Mobile Image</th>
                                        <th class="p-2" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sliders ?? [] as $slider)
                                        <tr id="slider-row-{{ $slider->id }}">
                                            <td class="p-2">
                                                <div class="avatar avatar-4xl ">
                                                    <img class="rounded-none " alt=""
                                                        src="{{ asset('storage/' . $slider->image_url) }}" />
                                                </div>

                                            </td>
                                            <td class="p-2">
                                                <div class="avatar avatar-4xl ">
                                                    <img class="rounded-none " alt=""
                                                        src="{{ asset('storage/' . $slider->mobile_image_url) }}" />
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <button class="btn btn-phoenix-info me-1 mb-1 edit_slider" type="button"
                                                    data-bs-target="#slider-edit" id="{{ $slider->id }}"
                                                    data-bs-toggle="modal">
                                                    edit
                                                </button>
                                                <button class="btn btn-phoenix-danger me-1 mb-1 deleteSlider" type="button"
                                                    data-id="{{ $slider->id }}">Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>


                            <h4 class="mt-4 mb-3 text-800">Contact</h4>

                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>

                                        <th class="p-2" scope="col">Full Name</th>
                                        <th class="p-2" scope="col">Email Address</th>
                                        <th class="p-2" scope="col">Mobile Number</th>
                                        <th class="p-2" scope="col">What you are looking for?</th>
                                        <th class="p-2" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($new_contacts ?? [] as $contact)
                                        <tr>

                                            <td class="p-2">{{ $contact->name }}</td>
                                            <td class="p-2">{{ $contact->email }}</td>
                                            <td class="p-2">{{ $contact->phone }}</td>
                                            <td class="p-2">{{ $contact->description }}</td>
                                            <td class="p-2">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input update-contact"
                                                        id="flexSwitchCheckDefault" data-id={{ $contact->id }}
                                                        type="checkbox" />
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">Update
                                                        Enquery</label>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    @foreach ($old_contacts as $contact)
                                        <tr>

                                            <td class="p-2">{{ $contact->name }}</td>
                                            <td class="p-2">{{ $contact->email }}</td>
                                            <td class="p-2">{{ $contact->phone }}</td>
                                            <td class="p-2">{{ $contact->description }}</td>
                                            <td class="p-2">
                                                Updated
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>






                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="modal fade" id="verticallyCentered" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel">Slider Images</h5>
                        <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times fs--1"></span>
                        </button>
                    </div>
                    <form action={{ route('contact_slider_upload') }} method="post" enctype="multipart/form-data"
                        name="Slider_form">
                        @csrf
                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image_url" />
                                <small class="float-end text-danger mt-2">
                                    image dimension: 1600(width) x 1069(height)
                                </small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Image(Mobile)</label>
                                <input class="form-control" type="file" name="mobile_image_url" />
                                <small class="float-end text-danger mt-2">
                                    image dimension: 1600(width) x 1069(height)
                                </small>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-outline-primary" type="button"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" id="slider-edit" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel">Slider Images</h5>
                        <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times fs--1"></span>
                        </button>
                    </div>
                    <form action={{ route('contact_slider_upload') }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="slider_id" id="edit_slider_id">
                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image_url" />
                                <small class="float-end text-danger mt-2">
                                    image dimension: 1600(width) x 1069(height)
                                </small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Image(Mobile)</label>
                                <input class="form-control" type="file" name="mobile_image_url" />
                                <small class="float-end text-danger mt-2">
                                    image dimension: 1600(width) x 1069(height)
                                </small>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-outline-primary" type="button"
                                data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
            <div class="toast align-items-center text-white bg-dark border-0 light" id="icon-copied-toast" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body p-3"></div>
                    <button class="btn-close btn-close-white me-2 m-auto" type="button" data-bs-dismiss="toast"
                        aria-label="Close"></button>
                </div>
            </div>
        </div>







        <footer class="footer position-absolute">
            <div class="row g-0 justify-content-between align-items-center h-100">
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 mt-2 mt-sm-0 text-900">
                        <a href="" target="_blank">www.junglebayresorts.com</a> All rights Reserved
                        <span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />
                        2023 &copy;<a class="mx-1" href=""></a>
                    </p>
                </div>
                <div class="col-12 col-sm-auto text-center">
                    <p class="mb-0 text-600">v1.7.0</p>
                </div>
            </div>
        </footer>
    </div>
@endsection
@section('page-js')
    <script>
        $(document).on('click', '.edit_slider', function() {
            var id = $(this).attr('id');
            $('#edit_slider_id').val(id);
        });
        $(document).on('click', '.deleteSlider', function() {
            var id = $(this).data("id");
            swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                            url: "{{ route('delete-contact-slider-image', '') }}/" + id,
                        })
                        .done(function(response) {
                            swal.fire('Deleted!', 'Successfully deleted', 'success');
                            $('#slider-row-' + id).remove();
                        })
                        .fail(function() {
                            swal.fire('Oops...', 'Something went wrong', 'error');
                        });
                }

            })

        });
        $(document).ready(function() {
            $("form[name='Slider_form']").validate({
                rules: {
                    image_url: {
                        required: true,
                        extension: "jpg|jpeg|png",
                    },
                    mobile_image_url: {
                        required: true,
                        extension: "jpg|jpeg|png",
                    },

                },
                messages: {
                    image_url: 'Slider image is required',
                    mobile_image_url: 'Slider image (mobile) is required'
                },
                ignore: "",
            });
        });

        $(document).on("click", ".update-contact", function(e) {
            e.preventDefault();
            var id = $(this).attr('data-id');
            var modelName = $(this).attr('data-model');
            $.ajax({
                type: "POST",
                data: {
                    "_token": '{!! csrf_token() !!}',
                    id: id,
                    model: modelName
                },
                url: "{{ route('update-contact') }}",
                success: function(data) {
                    location.reload();
                }
            });
        });
    </script>
@endsection
