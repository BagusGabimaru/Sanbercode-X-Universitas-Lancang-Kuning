<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="POST">
        @csrf
        <label >First Name</label>:<br>
        <input type="text" name ="fname" > <br> <br>
        <label>Last Name</label>:<br>
        <input type="text" name="lname"><br> <br>
        <label>Gender </label>:<br>
        <input type="radio">Male<br>
        <input type="radio">Female<br>
        <input type="radio">Other<br><br>
        <label>Nationality</label>:<br><br>
    <select name="country">
        <option value="Indonesia">Indonesia</option>
        <option value="Indonesia">Singapore</option>
        <option value="Malaysia">Malaysia</option>
        <option value="America">Australlia</option>
    </select> <br> <br>
    <label:>Language Spoken :</label:><br><br>
    <input type="checkbox"name="Skill">Bahasa Indonesia<br>
    <input type="checkbox"name="Skill">English<br>
    <input type="checkbox"name="Skill">Other<br>
    <label for="bio">Bio:</label><br>
    <textarea name="bio" rows="10" cols="30" cols="30"></textarea><br>
        <input type="submit" value="Sign up" >
</form>


</body>
</html>