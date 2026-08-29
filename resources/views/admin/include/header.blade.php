
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Admin Dashboard' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f5f7fb;
            font-family: "Inter", Arial, sans-serif;
            color: #1f2937;
        }

        /* ================= HEADER ================= */

        .admin-header {
            height: 70px;
            width: 100%;
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .header-logo {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: linear-gradient(135deg, #4f46e5, #7c3aed);
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            font-weight: 700;
        }

        .header-title {
            margin: 0;
            font-size: 20px;
            font-weight: 700;
            color: #111827;
        }

        .header-subtitle {
            margin: 2px 0 0;
            font-size: 12px;
            color: #9ca3af;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .header-icon {
            width: 40px;
            height: 40px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6b7280;
            font-size: 18px;
            text-decoration: none;
            transition: 0.2s;
        }

        .header-icon:hover {
            background: #f3f4f6;
            color: #4f46e5;
        }

        .user-account {
            display: flex;
            align-items: center;
            gap: 11px;
            padding-left: 18px;
            border-left: 1px solid #e5e7eb;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #eef2ff;
            color: #4f46e5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 15px;
        }

        .user-info {
            line-height: 1.2;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
            color: #111827;
        }

        .user-role {
            font-size: 11px;
            color: #9ca3af;
            margin-top: 3px;
        }

        .logout-btn {
            border: 0;
            background: transparent;
            color: #6b7280;
            font-size: 19px;
            padding: 5px;
            cursor: pointer;
            transition: 0.2s;
        }

        .logout-btn:hover {
            color: #dc2626;
        }

        /* ================= FOOTER ================= */

        .admin-footer {
            width: 100%;
            min-height: 65px;
            background: #ffffff;
            border-top: 1px solid #e5e7eb;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 28px;
            margin-top: 30px;
        }

        .footer-left,
        .footer-right {
            display: flex;
            align-items: center;
        }

        .footer-left {
            gap: 10px;
        }

        .footer-copyright {
            font-size: 13px;
            color: #9ca3af;
        }

        .footer-copyright strong {
            color: #374151;
            font-weight: 600;
        }

        .footer-divider {
            color: #d1d5db;
            font-size: 12px;
        }

        .footer-version {
            font-size: 12px;
            color: #9ca3af;
        }

        .footer-right {
            gap: 18px;
        }

        .footer-link {
            color: #6b7280;
            text-decoration: none;
            font-size: 13px;
            transition: 0.2s;
        }

        .footer-link:hover {
            color: #4f46e5;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 768px) {

            .admin-header {
                padding: 0 16px;
            }

            .header-title {
                font-size: 17px;
            }

            .header-subtitle {
                display: none;
            }

            .header-icon {
                display: none;
            }

            .user-info {
                display: none;
            }

            .user-account {
                border-left: 0;
                padding-left: 0;
            }

            .admin-footer {
                padding: 15px 16px;
                flex-direction: column;
                gap: 10px;
                text-align: center;
            }

            .footer-right {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

<header class="admin-header">

    <div class="header-left">

        <div class="header-logo">
            <i class="bi bi-grid-fill"></i>
        </div>

        <div>
            <h1 class="header-title">
                Admin Dashboard
            </h1>

            <p class="header-subtitle">
                Manage your application
            </p>
        </div>

    </div>


    <div class="header-right">

        <a href="#" class="header-icon" title="Notifications">
            <i class="bi bi-bell"></i>
        </a>

        <div class="user-account">

            <div class="user-avatar">
                {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
            </div>

            <div class="user-info">

                <div class="user-name">
                    {{ auth()->user()->name ?? 'Admin' }}
                </div>

                <div class="user-role">
                    Administrator
                </div>

            </div>

            @auth
                <form method="POST" action="">
                    @csrf

                    <button
                        type="submit"
                        class="logout-btn"
                        title="Logout">
                        <i class="bi bi-box-arrow-right"></i>
                    </button>
                </form>
            @endauth

        </div>

    </div>

</header>