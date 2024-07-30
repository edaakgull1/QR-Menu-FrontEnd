  <?php include "template/header.php"?>
    <div class="content">
        <form id="submit-form">
            <div class="form-group">
                <label for="name">Ad Soyad*</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">E-Posta Adresi*</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Mesajınız*</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="button"  onclick="contactUs()">Bize Ulaşın</button>
            <p id="success"></p>
        </form>

    </div>

<script> 
function contactUs() {
    let isim = document.getElementById("name").value;
    document.getElementById("success").innerHTML += "Mesajın Alındı " + isim;
    //document.getElementById("success").innerHTML = "Mesajınız alındı";
}
</script>
<?php include "template/footer.php"?>