<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div>
        <h2>Buat Account Baru!
        </h2>
            <h4>Sign Up Form
            </h4>
    </div>
    <div>
        <!-- Membuat Form -->
        <form action="/selamat" method="post">

            <!-- First Name -->
            @csrf
            <label for="First Name"><p>First Name:</p></label>
            <input type="text" id="First Name">

            <br>
            <!-- Last Name -->
            <label for="Last Name"><p>Last Name:</p> </label>
            <input type="text" id="Last Name">

            <br>
            <br>

            <label>Gender:</label>

            <br>
            <!-- Gender -->
            <input type="radio" name="gender" value="L"> Male
            <br>
            <input type="radio" name="gender" value="P"> Female
            <br>
            <input type="radio" name="gender" value="O"> Other
            <br>
            <br>
            <!-- Nationality -->
            <label>Nationality</label><br> <br>
            <select name="kebangsaan">
                <option value="Indonesian">Indonesian</option>
                <option value="Malaysian">Malaysian</option>
                <option value="British">British</option>
                <option value="American">American</option>
                <option value="Indian">Indian</option>
            </select>
            <br>
            <br>

            <!-- Languange Spoken -->
            <label>Languange Spoken:</label> <br> <br>
            <input type="checkbox" name="Bahasa" value="Bahasa Indonesia">Bahasa Indonesia <br>
            <input type="checkbox" name="Bahasa" value="English">English <br>
            <input type="checkbox" name="Bahasa" value="Other">Other <br>

            <!-- Bio -->
            <label for="Bio"><p>Bio:</p> </label>
            <textarea cols="30" rows="10" id="Bio"></textarea>
            <br>

            <!-- Submit -->
            <input type="submit" value="Sign Up">
        </form>

    </div>


</body>
</html>
