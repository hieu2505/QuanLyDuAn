<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    @guest
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{ route('login') }}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Trang chủ</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('login') }}" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('login') }}" aria-expanded="false"><i class="mdi me-2 mdi-account-circle"></i><span class="hide-menu">Cán bộ thư viện</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('login') }}" aria-expanded="false"><i class="mdi me-2 mdi-account-multiple"></i><span class="hide-menu">Độc giả</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('login') }}" aria-expanded="false"><i class="mdi me-2 mdi-library"></i><span class="hide-menu">Sách</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('login') }}" aria-expanded="false"><i class="mdi me-2 mdi-book-open-page-variant"></i><span class="hide-menu">Mượn trả</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('login') }}" aria-expanded="false"><i class="mdi me-2 mdi-book-open-page-variant"></i><span class="hide-menu">Mượn sách</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('login') }}" aria-expanded="false"><i class="mdi me-2 mdi-book-open-page-variant"></i><span class="hide-menu">Trả sách</span></a></li>
                    </ul>
                    @else
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="/" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                                    class="hide-menu">Trang chủ</span></a></li>
                        <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="profile" aria-expanded="false">
                                <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="member" aria-expanded="false"><i class="mdi me-2 mdi-account-circle"></i><span class="hide-menu">Cán bộ thư viện</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="reader" aria-expanded="false"><i class="mdi me-2 mdi-account-multiple"></i><span class="hide-menu">Độc giả</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="book" aria-expanded="false"><i class="mdi me-2 mdi-library"></i><span class="hide-menu">Sách</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="order" aria-expanded="false"><i class="mdi me-2 mdi-book-open-page-variant"></i><span class="hide-menu">Mượn trả</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="borrow" aria-expanded="false"><i class="mdi me-2 mdi-arrow-right-bold"></i><span class="hide-menu">Mượn sách</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="return-book" aria-expanded="false"><i class="mdi me-2 mdi-arrow-left-bold"></i><span class="hide-menu">Trả sách</span></a></li>
                    </ul>
                    
                    @endguest
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <div class="sidebar-footer">
                <div class="row">
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                                class="ti-settings"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                                class="mdi mdi-gmail"></i></a>
                    </div>
                    <div class="col-4 link-wrap">
                        <!-- item-->
                        <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                                class="mdi mdi-power"></i></a>
                    </div>
                </div>
            </div>
        </aside>