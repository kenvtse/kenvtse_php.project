<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Agar footer tetap di bawah */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex-grow: 1;
        }
        footer {
            padding: 15px 0;
        }

        /* Sidebar Styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #222;
            padding-top: 20px;
            transition: 0.3s;
        }
        .sidebar a {
            padding: 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        .sidebar a:hover {
            background: gold;
            color: black;
        }
        .sidebar .sidebar-header {
            text-align: center;
            font-size: 22px;
            color: gold;
            margin-bottom: 20px;
        }
        .sidebar .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 25px;
            cursor: pointer;
            color: white;
        }

        /* Toggle Button */
        .toggle-btn {
            font-size: 30px;
            cursor: pointer;
            position: absolute;
            top: 15px;
            left: 270px;
            color: #222;
            transition: 0.3s;
        }

        /* Jika sidebar disembunyikan */
        .sidebar.hidden {
            width: 0;
            padding: 0;
            overflow: hidden;
        }
        .toggle-btn.hidden {
            left: 10px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .sidebar {
                width: 0;
                overflow: hidden;
            }
            .toggle-btn {
                left: 10px;
            }
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <span class="close-btn" onclick="toggleSidebar()">×</span>
            <h3>Admin Panel</h3>
        </div>
        <a href="#"><i class="fas fa-home"></i> Dashboard</a>
        <a href="#"><i class="fas fa-user"></i> Users</a>
        <a href="#"><i class="fas fa-cogs"></i> Settings</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

    <!-- Toggle Button -->
    <span class="toggle-btn" id="toggle-btn" onclick="toggleSidebar()">☰</span>

    <!-- Main Content -->
    <div class="container mt-4 flex-grow-1 content" style="margin-left: 250px; transition: 0.3s;" id="main-content">
        <div class="p-5 text-dark d-flex align-items-center justify-content-center"
             style="border-top: 4px solid gold; 
                    border-right: 20px solid gold; 
                    border-top-right-radius: 40px;
                    border-radius: 0 0 50px 10px;">
            <!-- Text Content -->
            <div class="text-center">
                <h2 style="font-size:60px;"><b>Welcome, Administrator <?php echo $_SESSION['full_name'];?>!</b></h2>
                <p>This is the admin dashboard.</p>
                <br>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center mt-auto py-2">
        <div class="container">
            <p>&copy; <b> OUR SOCIAL MEDIA </b></p>
            <div>
                <a href="https://www.instagram.com" target="_blank" class="text-white mx-2">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="https://www.facebook.com" target="_blank" class="text-white mx-2">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="text-white mx-2">
                    <i class="fab fa-twitter fa-2x"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- JavaScript Toggle Sidebar -->
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            var mainContent = document.getElementById("main-content");
            var toggleBtn = document.getElementById("toggle-btn");

            sidebar.classList.toggle("hidden");
            mainContent.style.marginLeft = sidebar.classList.contains("hidden") ? "0" : "250px";
            toggleBtn.classList.toggle("hidden");
        }
    </script>

</body>
</html>
