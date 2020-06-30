<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <div>
        <form action="/welcome">
            <p>First Name: </p>
            <input type="text" placeholder="First Name" id="first_name">

            <p>Last Name: </p>
            <input type="text" placeholder="Last Name" id="last_name">

            <p>Gender:</p>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>

            <p>Nasionality:</p>
            <select name="" id="">
                <option value="">Indonesia</option>
                <option value="">Singapore</option>
                <option value="">Malaysia</option>
                <option value="">Australia</option>
            </select>

            <p>Language Spoken:</p>
            <input type="checkbox" id="language1">
            <label for="language1">Indonesia</label><br>
            <input type="checkbox" id="language2">
            <label for="language2">English</label><br>
            <input type="checkbox" id="language3">
            <label for="language3">Other</label>

            <p>Bio:</p>
            <textarea placeholder="Biodata" cols="30" rows="10"></textarea><br><br>

            <input type="submit" value="Sign Up">
        </form>
    </div>
</body>

</html>