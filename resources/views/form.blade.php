<!DOCTYPE html>
<html>
    <head>
        <title>Form Pendaftaran</title>
    </head>

    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>

        <form action="/welcome" id="form_utama" method="POST">
            <!--Pemberian first dan last name-->
            @csrf
            <label for="first_name">First Name: </label>
            <br><br>
            <input type="text" placeholder="First Name" id="first_name" name="first_name" required>
            <br><br>
            <label for="last_name">Last Name: </label>
            <br><br>
            <input type="text" placeholder="Last Name" id="last_name" name="last_name" required>
            <br><br>

            <!--Gender-->
            <lebel>Gender: </lebel>
            <br><br>
            <input type="radio" name="gender" value="Male">Male <br>
            <input type="radio" name="gender" value="Female">Female <br>
            <input type="radio" name="gender" value="Other">Other <br><br>

            <!--Kewarganegaraan-->
            <lebel>Nationality</lebel>
            <br><br>
            <select name="nationality">
                <optgroup label="Asia">
                    <option value="Indonesian">Indonesian</option>
                    <option value="Singaporean">Singaporean</option>
                    <option value="Malaysian">Malaysian</option>
                </optgroup>
                <optgroup label="Australia">
                    <option value="Australian">Australian</option>
                </optgroup>
            </select>
            <br><br>

            <!--Bahasa yang dikuasai dan Bio-->
            <lebel>Language Spoken</lebel>
            <br><br>
            <input type="checkbox" name="language" value="Bahasa Indonesia">Bahasa Indonesia <br>
            <input type="checkbox" name="language" value="English">English <br>
            <input type="checkbox" name="language" value="Other">Other
            <br><br>

            <label>Bio:</label>
            <br><br>
            <textarea placeholder="Biodata" cols="30" rows="10" id="bio" name="bio"></textarea>
            <br>
            <input type="submit" value="Sign Up" >
        </form>
    </body>

</html>
