@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="mt-4">

            <div class="card">
                <h5 class="card-header"><span data-feather="home" class="me-2"></span>Spa</h5>
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">
                            <h4 class="mt-4 mb-3 text-800">Slider Images</h4>
                            <button class="btn btn-primary float-end mb-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#verticallyCentered">Add Slider Image</button>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>

                                        <th class="p-2" scope="col">Image</th>
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
                                                <button class="btn btn-phoenix-danger me-1 mb-1 deleteSlider" type="button"
                                                    data-id="{{ $slider->id }}">Delete
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <h4 class="mt-4 mb-3 text-800">Spa</h4>

                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>

                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $service->name }}</td>
                                            <td>
                                                @if ($service->image_url)
                                                    <div class="avatar avatar-4xl ">
                                                        <img class="rounded-none "alt=""
                                                            src="{{ asset('storage/' . $service->image_url) }}" />
                                                    </div>
                                                @endif

                                            </td>
                                            <td>
                                                <button class="btn btn-primary mb-2 edit_service" type="button"
                                                    id="{{ $service->id }}" data-bs-toggle="modal"
                                                    data-bs-target="#verticallyCentered2">
                                                    Edit Image
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                                {{-- <tbody>
                                    <tr>

                                        <td>Abhyanga</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>
                                    <tr>

                                        <td>Shirodhara</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>

                                    <tr>

                                        <td>Shiro Abhyanga</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>

                                    <tr>

                                        <td>Pada Abhyanga</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>
                                    <tr>

                                        <td>Mukha lepam</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>
                                    <tr>

                                        <td>Udwarthanam</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>
                                    <tr>

                                        <td>Podikizhi</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>
                                    <tr>

                                        <td>Pizhichil</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>
                                    <tr>

                                        <td>Ayurvedic Pedicure</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>
                                    <tr>

                                        <td>Prishta Abhyanga</td>
                                        <td>
                                            <div class="avatar avatar-4xl ">
                                                <img class="rounded-none "
                                                    src="https://www.junglebayresorts.com/assets/images/pv/50.jpg"
                                                    alt="" />
                                            </div>
                                        </td>
                                        <td><button class="btn btn-primary mb-2" type="button" data-bs-toggle="modal"
                                                data-bs-target="#verticallyCentered2">
                                                Edit Content</button></td>
                                    </tr>


                                </tbody> --}}
                            </table>

                            <h4 class="mt-4 mb-3 text-800">Footer Images</h4>
                            <button class="btn btn-primary float-end mb-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#verticallyCentered3">Add Footer Image</button>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>

                                        <th class="p-2" scope="col">Image</th>
                                        <th class="p-2" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($footers ?? [] as $slider)
                                        <tr id="footer-row-{{ $slider->id }}">
                                            <td class="p-2">
                                                <div class="avatar avatar-4xl ">
                                                    <img class="rounded-none " alt=""
                                                        src="{{ asset('storage/' . $slider->image_url) }}" />
                                                </div>
                                            </td>
                                            <td class="p-2">
                                                <button class="btn btn-phoenix-danger me-1 mb-1 deleteFooter" type="button"
                                                    data-id="{{ $slider->id }}">Delete
                                                </button>
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
                    <form action={{ route('spa.store') }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="type" value="slider">
                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image_url" />
                                <small class="float-end text-danger mt-2">image dimension:
                                    1600(width) x 1069(height)</small>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
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

        <div class="modal fade" id="verticallyCentered2" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel2"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel">Edit Content</h5><button
                            class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times fs--1"></span></button>
                    </div>
                    <form action={{ route('spa.store') }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="id" id="edit_id">
                            <input type="hidden" name="type" value="service">
                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput">Price </label>
                                <input class="form-control" id="edit_name" type="text" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image_url" />
                                <small class="float-end text-danger mt-2">image dimension:
                                    1600(width) x 1069(height)</small>
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

        <div class="modal fade" id="verticallyCentered3" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel3"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel3">Footer Images</h5><button
                            class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times fs--1"></span></button>
                    </div>
                    <form action={{ route('spa.store') }} method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="type" value="footer">
                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image_url" />
                                <small class="float-end text-danger mt-2">image dimension:
                                    1600(width) x 1069(height)</small>
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
                    <p class="mb-0 mt-2 mt-sm-0 text-900"> <a href="" target="_blank">www.junglebayresorts.com</a>
                        All
                        rights Reserved
                        <span class="d-none d-sm-inline-block mx-1">|</span><br class="d-sm-none" />2023
                        &copy;<a class="mx-1" href=""></a>
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
        $(".deleteSlider").click(function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "{{ route('delete-spa_slider-image', '') }}/" + id,
                success: function() {
                    $('#slider-row-' + id).remove();
                }
            });
        });

        $(".deleteFooter").click(function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
            $.ajax({
                url: "{{ route('delete-spa_footer-image', '') }}/" + id,
                success: function() {
                    $('#footer-row-' + id).remove();
                }
            });
        });

        $(document).on('click', '.edit_service', function() {
            var id = $(this).attr('id');
            var url = "{{ route('spa.edit', ':id') }}";
            url = url.replace(':id', id);
            $.get(url, function(data) {
                $('#edit_id').val(data.id);
                $('#edit_name').val(data.name);
            })
        });
    </script>
@endsection
