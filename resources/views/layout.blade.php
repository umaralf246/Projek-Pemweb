<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { font-family: sans-serif; margin: 0; padding: 0; }
        .navbar {
            background-color: #f5f5f5;
            padding: 10px 20px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #fff;
            min-width: 140px;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            border: 1px solid #ccc;
        }
        .dropdown-content a, .dropdown-content form button {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
            background: none;
            border: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
        }
        .dropdown-content a:hover, .dropdown-content form button:hover {
            background-color: #f1f1f1;
        }
        .show { display: block; }
    </style>
</head>
<body>

    <div class="navbar">
        <div class="dropdown">
            <button onclick="toggleDropdown()">
                {{ session('nama') ?? 'Guest' }}
            </button>
            <div id="dropdownMenu" class="dropdown-content">
                <a href="/profile">Profile</a>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit">Log Out</button>
                </form>
            </div>
        </div>
    </div>

    <div style="padding: 20px;">
        @yield('content')
    </div>

    <script>
        function toggleDropdown() {
            document.getElementById("dropdownMenu").classList.toggle("show");
        }
        window.onclick = function(event) {
            if (!event.target.matches('button')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    dropdowns[i].classList.remove('show');
                }
            }
        }
    </script>
</body>
</html>
