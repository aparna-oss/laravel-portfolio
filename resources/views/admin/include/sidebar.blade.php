<style>
    /* =====================================================
   SIDEBAR
===================================================== */

.admin-sidebar {
    width: 260px;
    position: fixed;
    left: 0;
    top: 0;
    bottom: 0;
    z-index: 1050;

    display: flex;
    flex-direction: column;

    background:
        linear-gradient(
            180deg,
            #11091d 0%,
            #090610 100%
        );

    border-right: 1px solid rgba(255,255,255,.07);

    transition: .3s ease;
}


/* BRAND */

.sidebar-header {
    padding: 22px 20px;
    border-bottom: 1px solid rgba(255,255,255,.05);
}

.brand-mark {
    display: flex;
    align-items: center;
    gap: 12px;

    text-decoration: none;
    color: white;
}

.brand-icon {
    width: 42px;
    height: 42px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background:
        linear-gradient(
            135deg,
            #7425ff,
            #b44cff
        );

    box-shadow:
        0 10px 35px rgba(133,45,255,.35);

    font-size: 18px;
}

.brand-title {
    display: block;

    font-size: 14px;
    font-weight: 800;

    letter-spacing: -.03em;
}

.brand-title span {
    color: #a044ff;
}

.brand-subtitle {
    display: block;

    margin-top: 3px;

    color: #70677b;

    font-size: 9px;
}


/* NAVIGATION */

.sidebar-nav {
    padding: 22px 14px;
}

.nav-link {
    height: 45px;

    display: flex;
    align-items: center;

    gap: 12px;

    padding: 0 13px;

    margin-bottom: 6px;

    border-radius: 10px;

    color: #898094;

    font-size: 11px;

    text-decoration: none;

    transition: .2s ease;
}

.nav-link:hover {
    color: #d0c4dd;

    background:
        rgba(139,61,255,.08);
}

.nav-link.active {
    color: #bd75ff;

    background:
        linear-gradient(
            90deg,
            rgba(139,61,255,.22),
            rgba(139,61,255,.05)
        );

    box-shadow:
        inset 3px 0 #913cff;
}

.nav-icon {
    width: 22px;

    display: flex;
    justify-content: center;

    font-size: 15px;
}

.nav-text {
    flex: 1;
}

.nav-badge {
    padding: 3px 7px;

    border-radius: 20px;

    background:
        rgba(139,61,255,.14);

    color: #ae5dff;

    font-size: 8px;
}


/* SIDEBAR BOTTOM */

.sidebar-bottom {
    margin-top: auto;
    padding: 15px;
}

.availability-card {
    padding: 15px;

    border-radius: 14px;

    border: 1px solid rgba(139,61,255,.15);

    background:
        linear-gradient(
            145deg,
            rgba(61,28,91,.42),
            rgba(18,10,28,.9)
        );
}

.availability-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.availability-label {
    color: #686071;

    font-size: 7px;

    letter-spacing: .12em;
}

.status-online {
    width: 7px;
    height: 7px;

    border-radius: 50%;

    background: #35d99b;

    box-shadow:
        0 0 10px #35d99b;
}

.availability-title {
    display: block;

    margin-top: 8px;

    color: #eee8f4;

    font-size: 11px;
}

.availability-status {
    margin-top: 7px;

    color: #777080;

    font-size: 8px;
}

.status-dot {
    display: inline-block;

    width: 6px;
    height: 6px;

    margin-right: 5px;

    border-radius: 50%;

    background: #35d99b;

    box-shadow:
        0 0 8px #35d99b;
}

.portfolio-btn {
    margin-top: 13px;

    padding: 9px;

    display: flex;
    align-items: center;
    justify-content: center;

    gap: 6px;

    border-radius: 8px;

    background:
        linear-gradient(
            90deg,
            #7620ff,
            #a143ff
        );

    color: white;

    font-size: 8px;
    font-weight: 700;

    text-decoration: none;
}

.portfolio-btn:hover {
    color: white;

    transform: translateY(-1px);
}


/* =====================================================
   MAIN
===================================================== */

.admin-main {
    margin-left: 260px;

    min-height: 100vh;

    width: calc(100% - 260px);

    display: flex;
    flex-direction: column;
}


/* =====================================================
   HEADER
===================================================== */

.admin-navbar {
    height: 76px;

    position: sticky;
    top: 0;

    z-index: 900;

    background:
        rgba(8,6,13,.86);

    backdrop-filter: blur(18px);

    border-bottom:
        1px solid rgba(255,255,255,.07);
}

.navbar-inner {
    height: 100%;

    padding: 0 30px;

    display: flex;
    align-items: center;
}

.sidebar-toggle {
    width: 38px;
    height: 38px;

    border: 1px solid rgba(255,255,255,.08);

    background:
        rgba(255,255,255,.03);

    border-radius: 9px;

    color: #aaa1b2;

    display: none;

    align-items: center;
    justify-content: center;

    font-size: 18px;
}

.header-page {
    margin-left: 15px;
}

.header-page-label {
    display: block;

    color: #6f6678;

    font-size: 7px;

    letter-spacing: .15em;
}

.header-page h1 {
    margin: 2px 0 0;

    color: #eeeaf3;

    font-size: 15px;
    font-weight: 700;
}


/* HEADER ACTIONS */

.navbar-actions {
    margin-left: auto;

    display: flex;
    align-items: center;

    gap: 10px;
}


/* SEARCH */

.search-box {
    width: 230px;
    height: 36px;

    display: flex;
    align-items: center;

    gap: 8px;

    padding: 0 10px;

    border: 1px solid rgba(255,255,255,.08);

    border-radius: 9px;

    background:
        rgba(255,255,255,.025);
}

.search-box i {
    color: #716979;
}

.search-box input {
    flex: 1;

    border: 0;
    outline: 0;

    background: transparent;

    color: white;

    font-size: 9px;
}

.search-box input::placeholder {
    color: #625a69;
}

.search-shortcut {
    padding: 2px 6px;

    border-radius: 5px;

    background: rgba(255,255,255,.05);

    color: #625b68;

    font-size: 8px;
}


/* ICON BUTTON */

.icon-button {
    width: 36px;
    height: 36px;

    display: flex;
    align-items: center;
    justify-content: center;

    position: relative;

    border: 1px solid rgba(255,255,255,.08);

    border-radius: 9px;

    background:
        rgba(255,255,255,.025);

    color: #99909f;

    transition: .2s;
}

.icon-button:hover {
    color: white;

    border-color:
        rgba(139,61,255,.4);

    background:
        rgba(139,61,255,.08);
}

.notification-dot {
    position: absolute;

    top: 6px;
    right: 6px;

    width: 6px;
    height: 6px;

    border-radius: 50%;

    background: #a044ff;

    box-shadow:
        0 0 8px #a044ff;
}


/* =====================================================
   PROFILE
===================================================== */

.profile-button {
    display: flex;
    align-items: center;

    gap: 9px;

    padding: 3px 5px 3px 3px;

    border: 0;

    background: transparent;

    color: white;
}

.profile-avatar {
    width: 35px;
    height: 35px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            #efbaa4,
            #7148b5
        );

    border: 2px solid #8f35ff;

    color: white;

    font-size: 9px;
    font-weight: 800;
}

.profile-avatar.large {
    width: 42px;
    height: 42px;
}

.profile-info {
    text-align: left;
}

.profile-info strong {
    display: block;

    color: #eee9f2;

    font-size: 9px;
}

.profile-info span {
    display: block;

    margin-top: 2px;

    color: #6e6677;

    font-size: 7px;
}

.profile-arrow {
    color: #6f6877;

    font-size: 9px;
}


/* =====================================================
   DROPDOWNS
===================================================== */

.notification-menu,
.profile-menu {
    margin-top: 10px !important;

    min-width: 270px;

    padding: 0;

    overflow: hidden;

    border:
        1px solid rgba(255,255,255,.08);

    border-radius: 12px;

    background:
        #15101d;

    box-shadow:
        0 20px 50px rgba(0,0,0,.45);
}

.notification-header {
    padding: 15px;

    display: flex;
    justify-content: space-between;

    border-bottom:
        1px solid rgba(255,255,255,.06);
}

.notification-header strong {
    display: block;

    color: #eee8f2;

    font-size: 10px;
}

.notification-header small {
    display: block;

    margin-top: 4px;

    color: #6e6576;

    font-size: 7px;
}

.notification-count {
    width: 22px;
    height: 22px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 7px;

    background:
        rgba(139,61,255,.15);

    color: #ae5aff;

    font-size: 8px;
}

.notification-item {
    padding: 12px 15px;

    display: flex;
    align-items: center;

    gap: 10px;

    border-bottom:
        1px solid rgba(255,255,255,.04);
}

.notification-item strong {
    display: block;

    color: #ddd5e4;

    font-size: 8px;
}

.notification-item small {
    display: block;

    margin-top: 3px;

    color: #686070;

    font-size: 7px;
}

.notification-icon {
    width: 30px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 8px;

    font-size: 12px;
}

.notification-icon.purple {
    color: #ae55ff;
    background: rgba(139,61,255,.12);
}

.notification-icon.blue {
    color: #55a3ff;
    background: rgba(75,156,255,.12);
}

.notification-icon.green {
    color: #35d99b;
    background: rgba(53,217,155,.12);
}

.notification-footer {
    padding: 12px 15px;
}

.notification-footer a {
    color: #a64eff;

    font-size: 8px;

    text-decoration: none;
}


/* PROFILE DROPDOWN */

.profile-menu {
    min-width: 230px;

    padding: 8px;
}

.profile-menu-header {
    display: flex;
    align-items: center;

    gap: 10px;

    padding: 10px;
}

.profile-menu-header strong {
    display: block;

    color: #eee8f3;

    font-size: 9px;
}

.profile-menu-header small {
    display: block;

    margin-top: 3px;

    color: #706879;

    font-size: 7px;
}

.profile-menu .dropdown-item {
    padding: 9px 10px;

    border-radius: 7px;

    color: #a79eaf;

    font-size: 8px;
}

.profile-menu .dropdown-item i {
    width: 20px;

    color: #8e4aff;
}

.profile-menu .dropdown-item:hover {
    background: rgba(139,61,255,.09);

    color: white;
}

.logout-item {
    color: #ff6878 !important;
}


/* =====================================================
   FOOTER
===================================================== */

.admin-footer {
    min-height: 55px;

    padding: 15px 30px;

    display: flex;
    align-items: center;
    justify-content: space-between;

    border-top:
        1px solid rgba(255,255,255,.06);

    background:
        #09060e;

    color: #625b6c;

    font-size: 8px;
}

.footer-left,
.footer-right {
    display: flex;
    align-items: center;

    gap: 9px;
}

.footer-copyright strong {
    color: #a69eac;
}

.footer-divider {
    color: #403a47;
}

.system-status {
    display: flex;
    align-items: center;
}

.footer-link {
    color: #9d4aff;

    text-decoration: none;
}

.footer-link:hover {
    color: #bd79ff;
}


/* =====================================================
   MOBILE
===================================================== */

.sidebar-backdrop {
    display: none;
}

@media(max-width: 850px) {

    .admin-sidebar {
        transform: translateX(-100%);
    }

    .admin-sidebar.open {
        transform: translateX(0);
    }

    .admin-main {
        margin-left: 0;
        width: 100%;
    }

    .sidebar-toggle {
        display: flex;
    }

    .sidebar-backdrop.show {
        display: block;

        position: fixed;
        inset: 0;

        z-index: 1040;

        background:
            rgba(0,0,0,.65);

        backdrop-filter: blur(3px);
    }

    .search-box {
        display: none;
    }

    .profile-info,
    .profile-arrow {
        display: none;
    }
}


@media(max-width:600px) {

    .navbar-inner {
        padding: 0 15px;
    }

    .header-page {
        margin-left: 10px;
    }

    .header-page-label {
        display: none;
    }

    .header-page h1 {
        font-size: 13px;
    }

    .admin-footer {
        padding: 12px 15px;

        display: block;

        line-height: 1.8;
    }

    .footer-right {
        margin-top: 4px;
    }

}
</style>
<!-- Sidebar Backdrop -->
<div class="sidebar-backdrop" id="sidebarBackdrop"></div>

<!-- ================= SIDEBAR ================= -->
<aside class="admin-sidebar" id="adminSidebar">

    <!-- Brand -->
    <div class="sidebar-header">

        <a href="" class="brand-mark">

            <span class="brand-icon">
                <i class="bi bi-code-slash"></i>
            </span>

            <span class="brand-copy">

                <span class="brand-title">
                    APARNA <span>DEV</span>
                </span>

                <span class="brand-subtitle">
                    Laravel Developer
                </span>

            </span>

        </a>

    </div>


    <!-- Navigation -->
    <nav class="sidebar-nav">

        <!-- Dashboard -->
        <a href=""
           class="nav-link ">

            <span class="nav-icon">
                <i class="bi bi-grid-1x2-fill"></i>
            </span>

            <span class="nav-text">
                Dashboard
            </span>

        </a>


        <!-- Projects -->
        <a href=""
           class="nav-link">

            <span class="nav-icon">
                <i class="bi bi-folder2-open"></i>
            </span>

            <span class="nav-text">
                Profile
            </span>

            <span class="nav-badge">
                06
            </span>

        </a>


        <!-- Skills -->
        <a href=""
           class="nav-link">

            <span class="nav-icon">
                <i class="bi bi-code-square"></i>
            </span>

            <span class="nav-text">
                Skills
            </span>

        </a>


        <!-- Experience -->
        <a href=""
           class="nav-link">

            <span class="nav-icon">
                <i class="bi bi-briefcase"></i>
            </span>

            <span class="nav-text">
                Experience
            </span>

        </a>


        <!-- Messages -->
        <a href=""
           class="nav-link">

            <span class="nav-icon">
                <i class="bi bi-chat-left-text"></i>
            </span>

            <span class="nav-text">
                Messages
            </span>

            <span class="nav-badge">
                04
            </span>

        </a>

    </nav>


    <!-- Sidebar Bottom -->
    <div class="sidebar-bottom">

        <div class="availability-card">

            <div class="availability-header">

                <span class="availability-label">
                    PORTFOLIO STATUS
                </span>

                <span class="status-online"></span>

            </div>


            <strong class="availability-title">
                Available for Hire
            </strong>


            <div class="availability-status">

                <span class="status-dot"></span>

                Open to opportunities

            </div>


            <a href="/" class="portfolio-btn">

                <span>
                    View Portfolio
                </span>

                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>

    </div>

</aside>