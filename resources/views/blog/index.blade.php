@extends('layouts.main')
@section('content')
    <div class="content">
        <div class="mt-4">

            <div class="card">
                <h5 class="card-header"><span data-feather="home" class="me-2"></span>Blog</h5>
                <div class="row g-0">
                    <div class="col-md-12">
                        <div class="card-body">


                            <h4 class="mt-4 mb-3 text-800">Blog</h4>
                            <button class="btn btn-primary float-end mb-2" type="button" data-bs-toggle="modal"
                                data-bs-target="#verticallyCentered-1">Add Content Image</button>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>

                                        <th class="p-2" scope="col">Image</th>
                                        <th class="p-2" scope="col">Title</th>
                                        <th class="p-2" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr id="detail-row-{{ $blog->id }}">

                                            <td class="p-2">
                                                @if ($blog->image_url)
                                                    <div class="avatar avatar-4xl ">
                                                        <img class="rounded-none "
                                                            src="{{ asset('storage/' . $blog->image_url) }}"
                                                            alt="" />
                                                    </div>
                                                @endif

                                            </td>
                                            <td class="p-2">{{ $blog->name }}</td>
                                            <td class="p-2">
                                                <button class="btn btn-phoenix-danger me-1 mb-1 deleteDetails"
                                                    data-id="{{ $blog->id }}" type="button"> Delete
                                                </button>
                                                <button class="btn btn-phoenix-info me-1 mb-1 edit_details" type="button"
                                                    data-bs-target="#verticallyCentered-2" id="{{ $blog->id }}"
                                                    data-bs-toggle="modal">
                                                    edit
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




        <div class="modal fade" id="verticallyCentered-1" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel-1"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel-1">Blog</h5><button class="btn p-1"
                            type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times fs--1"></span></button>
                    </div>
                    <form action={{ route('blogs.store') }} method="post" name="main_form_create"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput">Title </label>
                                <input class="form-control" id="exampleFormControlInput" type="text" name="name" />
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image_url" />

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="organizerSingle">Date</label>
                                <input class="form-control datetimepicker" id="datepicker" type="text" name="date"
                                    placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"Y-m-d"}' />


                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="organizerSingle">Content</label>
                                <textarea class="form-control" rows="3" name="description" data-tinymce="{}"></textarea>


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

        <div class="modal fade" id="verticallyCentered-2" tabindex="-1" aria-labelledby="verticallyCenteredModalLabel-1"
            style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticallyCenteredModalLabel-1">Blog</h5><button class="btn p-1"
                            type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times fs--1"></span></button>
                    </div>
                    <form action={{ route('blogs.store') }} method="post" name="main_form_create"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <input type="text" name="id" id="edit_id">

                            <div class="mb-3">
                                <label class="form-label" for="exampleFormControlInput">Title </label>
                                <input class="form-control" id="edit_name" type="text" name="name" />
                            </div>


                            <div class="mb-3">
                                <label class="form-label">Upload Image</label>
                                <input class="form-control" type="file" name="image_url" />

                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="organizerSingle">Date</label>
                                <input class="form-control datetimepicker" id="datepicker" type="text" name="date"
                                    id="edit_date" placeholder="dd/mm/yyyy"
                                    data-options='{"disableMobile":true,"dateFormat":"Y-m-d"}' />


                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="organizerSingle">Content</label>
                                <textarea class="form-control" rows="3" name="description" data-tinymce="{}" id="edit_description"></textarea>


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
                        All rights Reserved
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
        $(document).on('click', '.edit_details', function() {
            var id = $(this).attr('id');
            var url = "{{ route('blogs.edit', ':id') }}";
            url = url.replace(':id', id);
            $.get(url, function(data) {
                $('#edit_id').val(data.id);
                $('#edit_name').val(data.name);
                $('#edit_date').val(data.date);
                $('#edit_description').val(data.description);
            })
        });
        $(document).on('click', '.deleteDetails', function() {
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");
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
                            method: 'POST',
                            url: '{{ route('blogs.destroy', '') }}/' + id,
                            data: {
                                "_token": '{!! csrf_token() !!}',
                                _method: "DELETE",
                                id: id
                            },
                        })
                        .done(function(response) {
                            swal.fire('Deleted!', 'Successfully deleted', 'success');
                            $('#detail-row-' + id).remove();
                        })
                        .fail(function() {
                            swal.fire('Oops...', 'Something went wrong', 'error');
                        });
                }

            })

        });
    </script>
@endsection
