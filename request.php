<?php include "form.php" ?>

<div class="container">

  <div class="order-part">



    <div class="order-form">
      <a name="request"></a>

      <form id="contact" action="" method="POST">
        <b>
          <p>Siuntėjo duomenys</p>
        </b>

        <fieldset>
          <label for="person">
            <input class="with-gap" id="person" name="sender" type="radio" value="<?= $sender ?>" tabindex="1">
            <span style="font-size: 1vw;">Fizinis asmuo</span>
          </label>
          <label for="business">
            <input class="with-gap" id="business" name="sender" type="radio" value="<?= $sender ?>" tabindex="2">
            <span style="font-size: 1vw;">Juridinis asmuo</span>
          </label>
          <span class="error"><?= $sender_error ?></span>
          </select>
        </fieldset>

        <fieldset>Vardas Pavardė / Įmonės pavadinimas
          <input type="text" name="name" value="<?= $name ?>" tabindex="3">
          <span class="error"><?= $name_error ?></span>
        </fieldset>

        <fieldset>Elektroninis paštas
          <input type="text" name="email" value="<?= $email ?>" tabindex="4">
          <span class="error"><?= $email_error ?></span>
        </fieldset>

        <fieldset>Telefono numeris
          <input placeholder="+370" type="text" name="phone" value="<?= $phone ?>" tabindex="5">
          <span class="error"><?= $phone_error ?></span>
        </fieldset>

        <fieldset>Tikslus pristatymo adresas
          <input placeholder="Šalis, miestas, adresas" type="text" name="delivery" value="<?= $delivery ?>" tabindex="6">
          <span class="error"><?= $delivery_error ?></span>
        </fieldset>

        <fieldset>Papildoma informacija
          <textarea placeholder="Papildoma informacija" type="text" name="message" value="<?= $message ?>" tabindex="7"></textarea>
        </fieldset>

        <fieldset>
          <button class="btn" type="submit" name="action">Siųsti užklausą
            <i class="material-icons right">send</i>
          </button>
        </fieldset>
        
        <div class="success"><?= $success; ?></div>
      </form>
    </div>

    <div class="order-pic">
      <img src="images/3.jpg" alt="">
    </div>
  </div>

</div>