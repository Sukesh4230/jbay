<nav class="navbar navbar-vertical navbar-expand-lg">
    <script>
        var navbarStyle = localStorage.getItem("phoenixNavbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('body').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <!-- scrollbar removed-->
        <div class="navbar-vertical-content">
            <ul class="navbar-nav flex-column" id="navbarVerticalNav">

                <li class="nav-item">
                    <!-- label-->
                    <p class="navbar-vertical-label">Junglebay </p>
                    <hr class="navbar-vertical-line" />
                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href={{ route('home') }} asd="index"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="home"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Home Page</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#e-commerce"
                            asd="index" role="button" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="e-commerce">
                            <div class="d-flex align-items-center">
                                <div class="dropdown-indicator-icon"><span class="fas fa-caret-right"></span></div><span
                                    class="nav-link-icon"><span data-feather="columns"></span></span><span
                                    class="nav-link-text">Stay</span>
                            </div>
                        </a>
                        <div class="parent-wrapper label-1">
                            <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="e-commerce">
                                <li class="collapsed-nav-item-title d-none">Stay
                                </li>
                                @foreach (\App\Models\Room::get() as $room)
                                    <li class="nav-item">
                                        <a class="nav-link" href={{ route('stays.show', $room->id) }} asd="index"
                                            data-bs-toggle="" aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text">{{ $room->name }}</span>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                                {{-- <li class="nav-item"><a class="nav-link" href="/admin-poolvilla" asd="index"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Duke’s Pool Villa</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <li class="nav-item"><a class="nav-link" href="/admin-beetle" asd="index"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Beetle – The Tree House</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <li class="nav-item"><a class="nav-link" href="/admin-jacuzzivilla" asd="index"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Regal Jacuzzi Villa</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <li class="nav-item"><a class="nav-link" href="/admin-bougainvilla" asd="index"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Bougain Villa</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <li class="nav-item"><a class="nav-link" href="/admin-pavilionroom" asd="index"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text">Pavilion Room</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link" href="/admin-penthouse" asd="index"
                                        data-bs-toggle="" aria-expanded="false">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text">Penthouse</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li> --}}

                            </ul>
                        </div>
                    </div>

                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href={{ route('spa.index') }} asd="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon">
                                    <span data-feather="loader"></span>
                                </span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Spa</span>
                                </span>
                            </div>
                        </a>
                    </div>





                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href={{ route('amenities.index') }}
                            asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="speaker"></span></span>
                                <span class="nav-link-text-wrapper"><span class="nav-link-text">Amenities</span></span>
                            </div>
                        </a>
                    </div>








                    <!-- parent pages-->
                    <div class="nav-item-wrapper"><a class="nav-link label-1" href={{ route('activities.index') }}
                            asd="index" role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="flag"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Activities</span></span>
                            </div>
                        </a>
                    </div>


                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href={{ route('discovers.index') }} asd="index" role="button"
                            data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span data-feather="map"></span></span>
                                <span class="nav-link-text-wrapper">
                                    <span class="nav-link-text">Discover Wayanad</span>
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="/admin-gallery" asd="index"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="image"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Gallery</span></span>
                            </div>
                        </a>
                    </div>


                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="/admin-blog" asd="index"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="file-text"></span></span><span
                                    class="nav-link-text-wrapper"><span class="nav-link-text">Blog</span></span>
                            </div>
                        </a>
                    </div>

                    <div class="nav-item-wrapper"><a class="nav-link label-1" href="/admin-contact" asd="index"
                            role="button" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        data-feather="mail"></span></span><span class="nav-link-text-wrapper"><span
                                        class="nav-link-text">Contact</span></span>
                            </div>
                        </a>
                    </div>
                    <div class="nav-item-wrapper">
                        <a class="nav-link label-1" href="{{ route('logout') }}" asd="index" role="button"
                            data-bs-toggle="" aria-expanded="false"
                            onclick="event.preventDefault(); document.getElementById('logout-form1').submit();">
                            <form id="logout-form1" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-icon">
                                        <span data-feather="power"></span>
                                    </span>
                                    <span class="nav-link-text-wrapper">
                                        <span class="nav-link-text">Logout</span>
                                    </span>
                                </div>
                            </form>
                        </a>
                    </div>



                </li>
            </ul>
        </div>
    </div>
    <div class="navbar-vertical-footer">
        <button class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 text-start white-space-nowrap">
            <span class="uil uil-left-arrow-to-left fs-0"></span>
            <span class="uil uil-arrow-from-right fs-0"></span>
            <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
        </button>
    </div>
</nav>
