@include('admin.include.header')

@include('admin.include.sidebar')


<style>
    .dashboard-wrapper {
        margin-left: 260px;
        padding: 30px;
        background: #f6f8fc;
        min-height: calc(100vh - 70px);
    }

    .dashboard-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .dashboard-title {
        margin: 0;
        font-size: 28px;
        font-weight: 700;
        color: #111827;
    }

    .dashboard-subtitle {
        margin: 6px 0 0;
        color: #8a94a6;
        font-size: 14px;
    }

    .date-box {
        background: #fff;
        border: 1px solid #e5e7eb;
        padding: 11px 16px;
        border-radius: 10px;
        color: #6b7280;
        font-size: 13px;
    }

    /* ================= STAT CARDS ================= */

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 20px;
        margin-bottom: 25px;
    }

    .stat-card {
        background: #fff;
        border: 1px solid #e8ebf0;
        border-radius: 14px;
        padding: 22px;
        position: relative;
        overflow: hidden;
        transition: 0.25s ease;
    }

    .stat-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .stat-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 21px;
    }

    .icon-purple {
        background: #f0ebff;
        color: #6d4aff;
    }

    .icon-blue {
        background: #eaf4ff;
        color: #2185e5;
    }

    .icon-green {
        background: #eafaf2;
        color: #16a66a;
    }

    .icon-orange {
        background: #fff4e8;
        color: #f28c28;
    }

    .stat-label {
        margin-top: 18px;
        color: #8b95a7;
        font-size: 13px;
    }

    .stat-number {
        margin-top: 5px;
        font-size: 27px;
        font-weight: 700;
        color: #111827;
    }

    .stat-growth {
        margin-top: 10px;
        font-size: 12px;
        color: #16a66a;
    }

    .stat-growth i {
        margin-right: 4px;
    }

    /* ================= MAIN GRID ================= */

    .dashboard-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 22px;
        margin-bottom: 25px;
    }

    .dashboard-card {
        background: #fff;
        border: 1px solid #e8ebf0;
        border-radius: 14px;
        padding: 22px;
    }

    .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .card-title {
        margin: 0;
        font-size: 17px;
        font-weight: 700;
        color: #1f2937;
    }

    .card-link {
        font-size: 12px;
        color: #6d4aff;
        text-decoration: none;
    }

    /* ================= CHART ================= */

    .chart-area {
        height: 280px;
        display: flex;
        align-items: flex-end;
        gap: 18px;
        padding: 20px 5px 0;
        border-bottom: 1px solid #edf0f4;
    }

    .bar-column {
        flex: 1;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        gap: 8px;
    }

    .bar {
        width: 55%;
        min-height: 20px;
        background: linear-gradient(180deg, #7357ff, #a28cff);
        border-radius: 7px 7px 0 0;
    }

    .bar-label {
        font-size: 11px;
        color: #9aa3b2;
    }

    /* ================= PROFILE ================= */

    .profile-card {
        text-align: center;
    }

    .profile-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: 5px auto 15px;
        background: linear-gradient(135deg, #6d4aff, #9b7cff);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 28px;
        font-weight: 700;
    }

    .profile-name {
        font-size: 19px;
        font-weight: 700;
        color: #111827;
    }

    .profile-role {
        font-size: 13px;
        color: #929aaa;
        margin-top: 5px;
    }

    .profile-info {
        margin-top: 22px;
        border-top: 1px solid #edf0f4;
        padding-top: 18px;
        text-align: left;
    }

    .profile-row {
        display: flex;
        justify-content: space-between;
        padding: 9px 0;
        font-size: 13px;
    }

    .profile-row span:first-child {
        color: #9aa3b2;
    }

    .profile-row span:last-child {
        color: #374151;
        font-weight: 500;
    }

    /* ================= PROJECTS ================= */

    .projects-card {
        margin-bottom: 25px;
    }

    .project-table {
        width: 100%;
        border-collapse: collapse;
    }

    .project-table th {
        text-align: left;
        font-size: 12px;
        color: #9aa3b2;
        font-weight: 600;
        padding: 13px 10px;
        border-bottom: 1px solid #edf0f4;
    }

    .project-table td {
        padding: 15px 10px;
        font-size: 13px;
        color: #374151;
        border-bottom: 1px solid #f0f2f5;
    }

    .project-name {
        font-weight: 600;
        color: #1f2937;
    }

    .project-tech {
        font-size: 11px;
        color: #8c96a7;
        margin-top: 3px;
    }

    .status {
        display: inline-flex;
        align-items: center;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 11px;
        font-weight: 600;
    }

    .status-live {
        background: #eafaf2;
        color: #159563;
    }

    .status-development {
        background: #fff4e8;
        color: #e98520;
    }

    .status-completed {
        background: #eef2ff;
        color: #5b4acb;
    }

    /* ================= QUICK LINKS ================= */

    .quick-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
    }

    .quick-card {
        background: #fff;
        border: 1px solid #e8ebf0;
        border-radius: 13px;
        padding: 20px;
        text-decoration: none;
        transition: 0.2s;
    }

    .quick-card:hover {
        transform: translateY(-3px);
        border-color: #d8d0ff;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    }

    .quick-icon {
        width: 42px;
        height: 42px;
        border-radius: 10px;
        background: #f1efff;
        color: #6d4aff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        margin-bottom: 13px;
    }

    .quick-title {
        font-size: 14px;
        font-weight: 600;
        color: #1f2937;
    }

    .quick-description {
        font-size: 11px;
        color: #9aa3b2;
        margin-top: 5px;
    }

    /* ================= RESPONSIVE ================= */

    @media (max-width: 1100px) {

        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .quick-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 850px) {

        .dashboard-wrapper {
            margin-left: 0;
            padding: 20px;
        }

        .dashboard-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 600px) {

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .quick-grid {
            grid-template-columns: 1fr;
        }

        .dashboard-header {
            align-items: flex-start;
            gap: 15px;
            flex-direction: column;
        }

        .project-table {
            min-width: 650px;
        }

        .projects-card {
            overflow-x: auto;
        }
    }
</style>


<div class="dashboard-wrapper">

    <!-- ================= DASHBOARD HEADER ================= -->

    <div class="dashboard-header">

        <div>
            <h2 class="dashboard-title">
                Dashboard
            </h2>

            <p class="dashboard-subtitle">
                Welcome back! Here's an overview of your portfolio.
            </p>
        </div>

        <div class="date-box">
            <i class="bi bi-calendar3 me-2"></i>
            {{ date('d M Y') }}
        </div>

    </div>


    <!-- ================= STATISTICS ================= -->

    <div class="stats-grid">

        <div class="stat-card">

            <div class="stat-top">

                <div class="stat-icon icon-purple">
                    <i class="bi bi-briefcase"></i>
                </div>

            </div>

            <div class="stat-label">
                Total Projects
            </div>

            <div class="stat-number">
                06
            </div>

            <div class="stat-growth">
                <i class="bi bi-arrow-up"></i>
                Portfolio Projects
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-top">

                <div class="stat-icon icon-blue">
                    <i class="bi bi-code-slash"></i>
                </div>

            </div>

            <div class="stat-label">
                Technologies
            </div>

            <div class="stat-number">
                08
            </div>

            <div class="stat-growth">
                <i class="bi bi-check-circle"></i>
                Active Skills
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-top">

                <div class="stat-icon icon-green">
                    <i class="bi bi-award"></i>
                </div>

            </div>

            <div class="stat-label">
                Experience
            </div>

            <div class="stat-number">
                2+
            </div>

            <div class="stat-growth">
                <i class="bi bi-arrow-up"></i>
                Years Experience
            </div>

        </div>


        <div class="stat-card">

            <div class="stat-top">

                <div class="stat-icon icon-orange">
                    <i class="bi bi-people"></i>
                </div>

            </div>

            <div class="stat-label">
                Clients
            </div>

            <div class="stat-number">
                12+
            </div>

            <div class="stat-growth">
                <i class="bi bi-graph-up-arrow"></i>
                Completed Work
            </div>

        </div>

    </div>


    <!-- ================= CHART + PROFILE ================= -->

    <div class="dashboard-grid">

        <!-- PROJECT CHART -->

        <div class="dashboard-card">

            <div class="card-header">

                <h3 class="card-title">
                    Project Overview
                </h3>

                <a href="#" class="card-link">
                    View Projects
                </a>

            </div>


            <div class="chart-area">

                <div class="bar-column">
                    <div class="bar" style="height: 45%;"></div>
                    <span class="bar-label">Jan</span>
                </div>

                <div class="bar-column">
                    <div class="bar" style="height: 60%;"></div>
                    <span class="bar-label">Feb</span>
                </div>

                <div class="bar-column">
                    <div class="bar" style="height: 40%;"></div>
                    <span class="bar-label">Mar</span>
                </div>

                <div class="bar-column">
                    <div class="bar" style="height: 75%;"></div>
                    <span class="bar-label">Apr</span>
                </div>

                <div class="bar-column">
                    <div class="bar" style="height: 65%;"></div>
                    <span class="bar-label">May</span>
                </div>

                <div class="bar-column">
                    <div class="bar" style="height: 90%;"></div>
                    <span class="bar-label">Jun</span>
                </div>

                <div class="bar-column">
                    <div class="bar" style="height: 78%;"></div>
                    <span class="bar-label">Jul</span>
                </div>

                <div class="bar-column">
                    <div class="bar" style="height: 95%;"></div>
                    <span class="bar-label">Aug</span>
                </div>

            </div>

        </div>


        <!-- PROFILE -->

        <div class="dashboard-card profile-card">

            <div class="profile-avatar">
                AS
            </div>

            <div class="profile-name">
                Aparna S.
            </div>

            <div class="profile-role">
                PHP Laravel Full Stack Developer
            </div>


            <div class="profile-info">

                <div class="profile-row">
                    <span>Email</span>
                    <span>admin@example.com</span>
                </div>

                <div class="profile-row">
                    <span>Experience</span>
                    <span>2+ Years</span>
                </div>

                <div class="profile-row">
                    <span>Framework</span>
                    <span>Laravel</span>
                </div>

                <div class="profile-row">
                    <span>Database</span>
                    <span>MySQL</span>
                </div>

                <div class="profile-row">
                    <span>Status</span>
                    <span style="color:#16a66a;">
                        Available
                    </span>
                </div>

            </div>

        </div>

    </div>


    <!-- ================= PROJECTS ================= -->

    <div class="dashboard-card projects-card">

        <div class="card-header">

            <h3 class="card-title">
                Recent Projects
            </h3>

            <a href="#" class="card-link">
                View All
            </a>

        </div>


        <table class="project-table">

            <thead>

                <tr>
                    <th>Project</th>
                    <th>Technology</th>
                    <th>Status</th>
                    <th>Year</th>
                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>
                        <div class="project-name">
                            Matrimony Website
                        </div>

                        <div class="project-tech">
                            Web Application
                        </div>
                    </td>

                    <td>
                        Laravel + MySQL
                    </td>

                    <td>
                        <span class="status status-live">
                            Live
                        </span>
                    </td>

                    <td>
                        2026
                    </td>

                </tr>


                <tr>

                    <td>
                        <div class="project-name">
                            Lekshmi Infra Projects
                        </div>

                        <div class="project-tech">
                            Business Website
                        </div>
                    </td>

                    <td>
                        PHP + Bootstrap
                    </td>

                    <td>
                        <span class="status status-completed">
                            Completed
                        </span>
                    </td>

                    <td>
                        2026
                    </td>

                </tr>


                <tr>

                    <td>
                        <div class="project-name">
                            Greenex Courier Hub
                        </div>

                        <div class="project-tech">
                            Courier Management
                        </div>
                    </td>

                    <td>
                        Laravel + MySQL
                    </td>

                    <td>
                        <span class="status status-live">
                            Live
                        </span>
                    </td>

                    <td>
                        2025
                    </td>

                </tr>


                <tr>

                    <td>
                        <div class="project-name">
                            Sagara Hospital
                        </div>

                        <div class="project-tech">
                            Hospital Management
                        </div>
                    </td>

                    <td>
                        PHP + MySQL
                    </td>

                    <td>
                        <span class="status status-development">
                            Development
                        </span>
                    </td>

                    <td>
                        2025
                    </td>

                </tr>

            </tbody>

        </table>

    </div>


    <!-- ================= QUICK ACCESS ================= -->

    <div class="dashboard-card">

        <div class="card-header">

            <h3 class="card-title">
                Quick Access
            </h3>

        </div>


        <div class="quick-grid">

            <a href="#" class="quick-card">

                <div class="quick-icon">
                    <i class="bi bi-person"></i>
                </div>

                <div class="quick-title">
                    My Profile
                </div>

                <div class="quick-description">
                    Manage your profile
                </div>

            </a>


            <a href="#" class="quick-card">

                <div class="quick-icon">
                    <i class="bi bi-folder"></i>
                </div>

                <div class="quick-title">
                    Projects
                </div>

                <div class="quick-description">
                    Manage portfolio projects
                </div>

            </a>


            <a href="#" class="quick-card">

                <div class="quick-icon">
                    <i class="bi bi-code-square"></i>
                </div>

                <div class="quick-title">
                    Skills
                </div>

                <div class="quick-description">
                    Update technical skills
                </div>

            </a>


            <a href="#" class="quick-card">

                <div class="quick-icon">
                    <i class="bi bi-gear"></i>
                </div>

                <div class="quick-title">
                    Settings
                </div>

                <div class="quick-description">
                    Manage dashboard settings
                </div>

            </a>

        </div>

    </div>

</div>


@include('admin.include.footer')