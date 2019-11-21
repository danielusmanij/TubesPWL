
<form method="post">
    <fieldset>
        <label>id Film: </label>
        <input type="text" name="txtid" id=PreferedCinema placeholder autofocus required class="form-input"><br>
        <label>Id Judul: </label>
        <input type="text" name="txtJudul" id="Judul" placeholder autofocus required class="form-input"><br>
        <label>Durasi: </label>
        <input type="text" name="txtDurasi" id="Durasi" placeholder autofocus required class="form-input"><br>
        <label>Deskripsi : </label>
        <input type="text" name="txtDeskripsi" id="Deskripsi" placeholder autofocus required class="form-input"><br>
        <label>Poster : </label>
        <input type="text" name="txtPoster" id="Poster" placeholder autofocus required class="form-input"><br>
        <label>Trailer : </label>
        <input type="date" name="txtTrailer" id="Trailer" placeholder autofocus required class="form-input"><br>
        <label>Jam Penayangan: </label>
        <input type="text" name="txtJam" id="jam" placeholder autofocus required class="form-input"><br>

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