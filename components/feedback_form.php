 <!-- Форма -->
 <div class="form-wrapper">
      <form action="../home.php" method="post">
        <!-- ФИО -->

        <label for="fio">ФИО</label>
        <input type="text" id="fio" name="fio" value = <?php 
        if(isset($_GET["F"])){
          echo $_GET["F"];
        } else {
          echo "";
        }
        
        
        
        ?>>

        <!-- Email -->

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value = <?php 
        if(isset($_GET["E"])){
          echo $_GET["E"];
        } else {
          echo "";
        }
        
        
        
        ?>>

        <!-- Radio buttons -->
        <label for="">Откуда вы узнали про нас?</label>
        <div class="input-wrapper">
          <input type="radio" id="r1" value="На работе" name="radioValue" />
          <label for="r1">На работе</label>

          <input type="radio" id="r2" value="От друзей" name="radioValue" />
          <label for="r2">От друзей</label>

          <input type="radio" id="r3" value="В объявлении" name="radioValue" />
          <label for="r3">В объявлении</label>
        </div>

        <!-- Select -->
        <label for="">Выберите тип обращения</label>
        <select name="typeOfselect" id="select">
          <option value="Жалоба">Жалоба</option>
          <option value="Предложение">Предложение</option>
        </select>

        <!-- Text -->
        <label for="text">Введите ваше сообщение</label>
        <textarea id="text" name="message"><?php 
        if(isset($_GET["M"])){
          echo $_GET["M"];
        } else {
          echo "";
        }
        ?></textarea>

        <!-- File input -->
        <input type="file" id="file" name="file_name" />

        <!-- Согласие на обработку данных -->
        <div class="input-wrapper">
          <input
            type="checkbox"
            id="consentToDataProcessing"
            name="consentToDataProcessing"
          />
          <label for="consentToDataProcessing"
            >Согласие на обработку персональных данных</label
          >
        </div>

        <!-- Submit Button -->
        <div class="btn">
          <button type="submit">Отправить</button>
        </div>
      </form>
    </div>