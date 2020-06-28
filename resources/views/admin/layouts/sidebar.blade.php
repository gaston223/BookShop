<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{route("dashboard")}}">
                <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33"
                >
                    <g fill="none" fill-rule="evenodd">
                        <path
                            class="logo-fill-blue"
                            fill="#7DBCFF"
                            d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                        />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <!--Produits-->
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#products"
                       aria-expanded="false" aria-controls="products">
                        <i class="mdi mdi-cart"></i>
                        <span class="nav-text">Produits</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="products"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li  class="active" >
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Tous les Produits</span>
                                </a>
                            </li>

                            <li >
                                <a class="sidenav-item-link" href="{{route('create_product')}}">
                                    <span class="nav-text">Ajouter un Produit</span>
                                </a>
                            </li>


                        </div>
                    </ul>
                </li>

                <!--Catégories-->
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#categories"
                       aria-expanded="false" aria-controls="categories">
                        <i class="mdi mdi-sitemap"></i>
                        <span class="nav-text">Catégories</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="categories"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li class="active" >
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Toutes les catégories</span>
                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{route('create_category')}}">
                                    <span class="nav-text">Ajouter une Catégorie</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <!--Sliders-->
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sliders"
                       aria-expanded="false" aria-controls="sliders">
                        <i class="mdi mdi-view-carousel"></i>
                        <span class="nav-text">Sliders</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="sliders"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li >
                                <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">Tous les sliders</span>
                                </a>
                            </li>  <li >
                                <a class="sidenav-item-link" href="chartjs.html">
                                    <span class="nav-text">Ajouter un slider</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <!--Exemple-->
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                       aria-expanded="false" aria-controls="pages">
                        <i class="mdi mdi-image-filter-none"></i>
                        <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li >
                                <a class="sidenav-item-link" href="../user-profile.html">
                                    <span class="nav-text">User Profile</span>

                                </a>
                            </li>





                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                                   aria-expanded="false" aria-controls="authentication">
                                    <span class="nav-text">Authentication</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="authentication">
                                    <div class="sub-menu">

                                        <li >
                                            <a href="../sign-in.html">Sign In</a>
                                        </li>

                                        <li >
                                            <a href="../sign-up.html">Sign Up</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>




                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                                   aria-expanded="false" aria-controls="others">
                                    <span class="nav-text">Others</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="others">
                                    <div class="sub-menu">

                                        <li >
                                            <a href="invoice.html">invoice</a>
                                        </li>

                                        <li >
                                            <a href="../error.html">Error</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>



                        </div>
                    </ul>
                </li>

            </ul>

        </div>

    </div>
</aside>
