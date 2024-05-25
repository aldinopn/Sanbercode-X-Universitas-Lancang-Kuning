<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel</title>
</head>
<body>

    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    
    <form action="/home" method="post">
     @csrf 
      <label for="fname">First name:</label><br>
      <input type="text" id="fname" name="fname" value=""><br>
      <label for="lname">Last name:</label><br>
      <input type="text" id="lname" name="lname" value="">
  

    <p>Gender:</p>
      <input type="radio" id="Male" name="Gender">
      <label for="Male">Male</label><br>
      <input type="radio" id="Female" name="Gender">
      <label for="Female">Female</label><br>
      <input type="radio" id="Other" name="Gender">
      <label for="Other">Other</label>
 

    <p>Nationality:</p> 
      <select id="Nationality" name="Nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="English">English</option>
        <option value="Arab">Arab</option>
        <option value="other">Other</option>
      </select>

    <p>Language Spoken:</p>
        <input type="checkbox" id="bahasa indonesia" name="Language" value="">
        <label for="bahasa indonesia"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="bahasa inggris" name="Language" value="">
        <label for="bahasa inggris"> Bahasa Inggris</label><br>
        <input type="checkbox" id="other" name="Language" value="">
        <label for="other"> Other</label><br>
  

    <label for="bio">Bio:</label><br><br>
    <textarea name="bio" id="" cols="30" rows="10" required></textarea><br>
    <button type="submit">Sign Up</button>
 </form>
    <a href="/">kembali</a>
    
 
</body>
</html>