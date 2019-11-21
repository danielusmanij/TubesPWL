<form method="post">
    <fieldset>
        <label>Prefered Cinema: </label>
        <input type="text" name="txtPre" id=PreferedCinema placeholder autofocus required class="form-input"><br>
        <label>Id Full name : </label>
        <input type="text" name="txtFullname" id="FullName" placeholder autofocus required class="form-input"><br>
        <label>Genrder: </label>
        <input type="text" name="Genre" id="Gender" placeholder autofocus required class="form-input"><br>
        <label>BirtDhate : </label>
        <input type="text" name="txtBirtdhate" id="Birtdhate" placeholder autofocus required class="form-input"><br>
        <label>Phone Number : </label>
        <input type="text" name="txtphoneNumber" id="PhoneNumber" placeholder autofocus required class="form-input"><br>
        <label>City : </label>
        <input type="date" name="txtCity id="City" placeholder autofocus required class="form-input"><br>
        <label>Email Address: </label>
        <input type="text" name="txtEmailAdrees" id="EmailAdrees" placeholder autofocus required class="form-input"><br>
        <label>Password </label>
        <input type="password" name="txtPassword" id="Password" placeholder autofocus required class="form-input"><br>
        <label>Card Number: </label>
        <input type="text" name="txtCardNumber" id="CardNumber" placeholder autofocus required class="form-input"><br>
        <label>capCha </label>
        <label>Photo : </label>
        <input type="file" name="txtPhoto" id="Photo" autofocus required class="form-input"><br>
        <select name="txtInsurance">
</form>

<table id="myTable" class="display">
    <thead>
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Name</th>-->
<!--        <th>Action</th>-->
<!--    </tr>-->
    </thead>
    <tbody>
    <?php
    /* @var $genre Genre */
//    foreach ($genres as $genre) {
//        echo '<tr>';
//        echo '<td>' . $genre->getId() . '</td>';
//        echo '<td>' . $genre->getName() . '</td>';
//        echo '<td><button onclick="deleteGenre(\''. $genre->getId() .'\')">Delete</button><button onclick="updateGenre(\''. $genre->getId() .'\')">Edit</button></td>';
//        echo '</tr>';
//    }
    ?>
    </tbody>
</table>