<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel | Swastik Spices</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f7f7;
        }

        /* ===== SIDEBAR ===== */
        .sidebar {
            width: 220px;
            height: 100vh;
            background: #8B0000;
            /* Maroon */
            color: #FFD700;
            /* Yellow */
            position: fixed;
            top: 0;
            left: 0;
        }

        .sidebar h3 {
            margin: 0;
            padding: 20px;
            text-align: center;
            background: #750000;
            font-size: 20px;
            letter-spacing: 1px;
        }

        .sidebar a {
            display: block;
            padding: 14px 20px;
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar a:hover {
            background: #FFD700;
            color: #8B0000;
            font-weight: bold;
        }

        .logout-btn {
            width: calc(100% - 40px);
            margin: 20px;
            padding: 10px;
            background: #FFD700;
            color: #8B0000;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
        }

        .logout-btn:hover {
            background: #e6c200;
        }

        /* ===== CONTENT AREA ===== */
        .content {
            margin-left: 220px;
            padding: 20px;
        }

        /* ===== TOPBAR ===== */
        .topbar {
            background: #ffffff;
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 6px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .topbar .title {
            font-size: 18px;
            font-weight: bold;
            color: #8B0000;
        }

        .topbar .user {
            font-size: 14px;
            color: #333;
        }

        /* ================================ */
        /* ===== ADMIN PANEL RESPONSIVE ==== */
        /* ================================ */

        /* Tablets */
        @media (max-width: 992px) {
            .sidebar {
                width: 200px;
            }

            .content {
                margin-left: 200px;
            }

            .topbar .title {
                font-size: 16px;
            }
        }

        /* Mobile devices */
        @media (max-width: 768px) {

            body {
                overflow-x: hidden;
            }

            /* Sidebar hidden by default */
            .sidebar {
                transform: translateX(-100%);
                transition: transform 0.3s ease;
                z-index: 2000;
            }

            /* Show sidebar when active */
            .sidebar.active {
                transform: translateX(0);
            }

            /* Content full width */
            .content {
                margin-left: 0;
                padding: 15px;
            }

            /* Topbar adjustments */
            .topbar {
                padding: 10px 14px;
                flex-wrap: wrap;
                gap: 8px;
            }

            .topbar .title {
                font-size: 16px;
            }

            .topbar .user {
                font-size: 13px;
            }

            /* Mobile menu button */
            .menu-toggle {
                display: inline-block;
                cursor: pointer;
                font-size: 20px;
                color: #8B0000;
            }
        }

        /* Small phones */
        @media (max-width: 480px) {
            .topbar .title {
                font-size: 15px;
            }

            .logout-btn {
                padding: 9px;
                font-size: 13px;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h3>Admin Panel</h3>

        <a href="/admin/dashboard">Dashboard</a>
        <a href="/admin/users">Users</a>
        <a href="#">Settings</a>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <div class="topbar">
            <div class="title">Swastik Spices Admin</div>
            <div class="user">
                {{ auth()->user()->email }}
            </div>
        </div>

        {{-- Page specific content --}}
        @yield('content')

    </div>

</body>

</html>