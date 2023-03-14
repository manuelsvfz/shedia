<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New User</title>
</head>

<body>
    <h1>User</h1>
    <h2>New User</h2>

    <form action="./saveUser" method="GET">
        <label for="name">Name: </label>
        <input type="text" name="name"> <br> <br>

        <label for="email">Email: </label>
        <input type="text" name="email"> <br> <br>

        <label for="password">Password: </label>
        <input type="text" name="password"> <br> <br>

        <label for="isAdmin">isAdmin: </label>
        <select name="isAdmin">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select> <br> <br>


        <input hidden name="bankData_id" value="null"></input>
        <button type="submit">Create</button>
    </form>
</body>

</html>
