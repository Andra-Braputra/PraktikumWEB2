<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management System</title>
    <style>
        body {
            background-color: #f0f2f5;
            padding: 20px;
            text-align: center;
        }
        header {
            background: #4caf50;
            color: white;
            padding: 20px;
            margin-bottom: 30px;
            border-radius: 10px;
        }
        .menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .menu-item {
            background: white;
            padding: 20px;
            border-radius: 10px;
            width: 200px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .menu-item:hover {
            transform: translateY(-5px);
        }
        .menu-item a {
            text-decoration: none;
            color: #4caf50;
            font-weight: bold;
            display: inline-block;
            margin-top: 10px;
        }
        .menu-item a:hover {
            color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Library Management System</h1>
    </header>

    <div class="menu">
        <div class="menu-item">
            <h3><a href="Buku.php">Buku</a></h3>
        </div>
        
        <div class="menu-item">
            <h3><a href="Peminjaman.php">Peminjaman</a></h3>
        </div>
        
        <div class="menu-item">
            <h3><a href="Member.php">Members</a></h3>
        </div>
    </div>
</body>
</html>
 