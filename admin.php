<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        height: 90vh;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .container {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input[type="text"],
    input[type="password"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    
    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #0056b3;
    }
</style>
<body>
<div class="container">
    <h1>Login Admin</h1>
    <form action="proses/login_admin.php" method="post">
        <input type="text" name="username" placeholder="Masukan NIS Admin" required>
        <input type="password" name="password" placeholder="Masukan password" required>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
