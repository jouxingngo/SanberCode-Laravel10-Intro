
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <label>First Name:
            <br>
            <br>
            <input required name="firstName" type="text">
        </label>
        <br>
        <br>
        <label>Last name:
            <br>
            <br>
            <input required name="lastName" type="text">
        </label>
        <br>
        <br>
        <label>Gender:
            <br>
            <br>
            <input type="radio" value="Male" name="gender" required>Male
            <br>
            <input type="radio" value="Female" name="gender" required>Female
            <br>
            <input type="radio" name="gender">Other
        </label>
        <br>
        <br>
        <label>Nationality:
            <br>
            <br>
            <select name="nationality" required>
                <option  value="Indonesian">Indonesian</option>
                <option value="English">English</option>
                <option value="Franch">Franch</option>
            </select>
        </label>
        <br>
        <br>
        <label>Language Spoken:</label>
            <br>
            <label>
            <input type="checkbox" value="Bahasa Indonesia" name="language[]">Bahasa Indonesia
        </label>
            <br>
            <label >
            <input type="checkbox" value="English" name="language[]">English
        </label>
            <br>
            <label >
            <input type="checkbox" value="Other" name="language[]">Other
        </label>
        <br>
        <br>
        <label>Bio:
            <br>
            <br>
            <textarea cols="30" name="bio" rows="10" placeholder="my bio..."></textarea>
        </label>
        <br>
        <button type="submit">Sign Up</button>

    </form>
</body>

</html>