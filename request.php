<?php include "form.php" ?>

<div class="container">

  <div class="order-part">



    <div class="order-form">
      <a name="request"></a>

      <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <b>
          <p>Siuntėjo duomenys</p>
        </b>

        <fieldset>Siuntėjas
          <select id="sender" name="sender" value="<?= $sender ?>">
            <option value="1">Fizinis asmuo</option>
            <option value="2">Juridinis asmuo</option>
            <span class="error"><?= $sender_error ?></span>
          </select>
        </fieldset>

        <fieldset>Vardas Pavardė / Įmonės pavadinimas
          <input placeholder="" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
          <span class="error"><?= $name_error ?></span>
        </fieldset>

        <fieldset>Elektroninis paštas
          <input placeholder="" type="text" name="email" value="<?= $email ?>" tabindex="2">
          <span class="error"><?= $email_error ?></span>
        </fieldset>

        <fieldset>Telefono numeris
          <input placeholder="86" type="text" name="phone" value="<?= $phone ?>" tabindex="3">
          <span class="error"><?= $phone_error ?></span>
        </fieldset>

        <fieldset>Tikslus pristatymo adresas
          <input placeholder="Šalis, miestas, adresas" type="text" name="delivery" value="<?= $delivery ?>" tabindex="4">
          <span class="error"><?= $delivery_error ?></span>
        </fieldset>

        <fieldset>Papildoma informacija
          <textarea placeholder="Papildoma informacija" type="text" name="message" value="<?= $message ?>" tabindex="5"></textarea>
        </fieldset>

        <fieldset>
          <button class="btn" type="submit" name="action">Siųsti užklausą
            <i class="material-icons right">send</i>
          </button>
        </fieldset>

      </form>
    </div>

    <div class="order-pic">
      <img src="images/3.jpg" alt="">
    </div>
  </div>

</div>