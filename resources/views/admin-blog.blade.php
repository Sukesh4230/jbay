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
                                <tr>
                                
                                    <td class="p-2">
                                        <div class="avatar avatar-4xl ">
                                            <img class="rounded-none "
                                                src="https://www.junglebayresorts.com/assets/images/pv/50.jpg" alt="" />
                                        </div>
                                    </td>
                                    <td class="p-2">Blog 1</td>
                                    <td class="p-2">

                                        <button class="btn btn-phoenix-danger me-1 mb-1" type="button">Delete</button>
                                        <button class="btn btn-phoenix-info me-1 mb-1" type="button"  data-bs-toggle="modal"
                            data-bs-target="#verticallyCentered-1">edit</button>
                                    </td>
                                </tr>

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
                <div class="modal-body">

                <div class="mb-3">
  <label class="form-label" for="exampleFormControlInput">Title </label>
  <input class="form-control" id="exampleFormControlInput" type="text" />
</div>
                

                    <div class="mb-3">
                        <label class="form-label">Upload Image</label>
                        <input class="form-control" type="file" />
                       
                    </div>

                    <div class="mb-3">
                    <label class="form-label" for="organizerSingle">Date</label><input class="form-control datetimepicker" id="datepicker" type="text" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />


                    </div>
                    <div class="mb-3">
                    <label class="form-label" for="organizerSingle">Content</label>
                    <textarea class="tinymce" name="content" data-tinymce="{}"></textarea>


                    </div>

                    

                </div>
                <div class="modal-footer"><button class="btn btn-primary" type="button">Submit</button><button
                        class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button></div>
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
                <p class="mb-0 mt-2 mt-sm-0 text-900"> <a href="" target="_blank">www.junglebayresorts.com</a>  All rights Reserved
                        <span class="d-none d-sm-inline-block mx-1">|</span><br
                        class="d-sm-none" />2023
                    &copy;<a class="mx-1" href=""></a></p>
            </div>
            <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v1.7.0</p>
            </div>
        </div>
    </footer>
</div>
@endsection