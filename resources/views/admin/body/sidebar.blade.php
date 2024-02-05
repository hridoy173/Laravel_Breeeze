<nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
            Shekh<span>Hridoy</span>
            </a>
            <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
            <li class="nav-item nav-category">Main</li>
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link">
                <i class="link-icon" data-feather="box"></i>
                <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item nav-category">RealEstate</li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Teachers</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emails">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{ route('all.teacher') }}" class="nav-link">All Teacher</a>
                    </li>
                    <li class="nav-item">
                    <a href="{{ route('add.teacher') }}" class="nav-link">Add Teacher</a>
                    </li>
                </ul>
                </div>
            </li>


            <li class="nav-item nav-category">Students</li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#uiComponents" role="button" aria-expanded="false" aria-controls="uiComponents">
                <i class="link-icon" data-feather="feather"></i>
                <span class="link-title">Students Info </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="uiComponents">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{ route('all.student') }}" class="nav-link">All Student</a>
                    </li>
                </ul>
                </div>
            </li>

            <li class="nav-item">

            <a class="nav-link" data-bs-toggle="collapse" href="#forms" role="button" aria-expanded="false" aria-controls="forms">
              <i class="link-icon" data-feather="inbox"></i>
              <span class="link-title">Department & Hostal</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
                <div class="collapse" id="forms">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{ route('all.department') }}" class="nav-link">All Department</a>
                    </li>

                    <li class="nav-item">
                    <a href="{{ route('all.hostal') }}" class="nav-link">All Hostal</a>
                    </li>

                </ul>
                </div>

            </li>



            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#advancedUI" role="button" aria-expanded="false" aria-controls="advancedUI">
                <i class="link-icon" data-feather="archive"></i>
                <span class="link-title">Results</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="advancedUI">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="pages/advanced-ui/cropper.html" class="nav-link">Cropper</a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/advanced-ui/owl-carousel.html" class="nav-link">Owl carousel</a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/advanced-ui/sortablejs.html" class="nav-link">SortableJs</a>
                    </li>
                    <li class="nav-item">
                    <a href="pages/advanced-ui/sweet-alert.html" class="nav-link">Sweet Alert</a>
                    </li>
                </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Pages</li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#authPages" role="button" aria-expanded="false" aria-controls="authPages">
                <i class="link-icon" data-feather="unlock"></i>
                <span class="link-title">Authentication</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="authPages">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                    <a href="{{ route('all.user') }}" class="nav-link">User List</a>
                    </li>
                    <li class="nav-item">
                    <a href="" class="nav-link">Agent List</a>
                    </li>
                </ul>
                </div>
            </li>

            <li class="nav-item nav-category">Docs</li>
            <li class="nav-item">
                <a href="#" target="_blank" class="nav-link">
                <i class="link-icon" data-feather="hash"></i>
                <span class="link-title">Documentation</span>
                </a>
            </li>
            </ul>
        </div>
        </nav>
