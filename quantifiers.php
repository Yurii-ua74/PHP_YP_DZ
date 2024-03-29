<!-- шаблон 1 -->
<?php include 'header.php'; ?>
<!-- шаблон 2 -->
<?php include 'header2.php'; ?>

<div class="photo-container">
<div class="image_left">
    <img src="gialla_left.png" alt=""> 
</div>
<div class="info-block">
<h1>Regexp</h1>
   <hr>
   <p>Регулярні вирази - це інструмент для роботи зі строками та обробки текстів.
   <br>Основні елементи регулярних виразів включають: </p>
<ul>
  <li><a href="/special_characters.php">спецсимволи</a></li><br>
  <li><a href="/groupies.php">групи</a></li><br>
  <li><a href="/quantifiers.php">квантифікатори</a></li><br>
  <li><a href="/anchors.php">якорі</a></li>
</ul>
<div>
<h1>Квантифікатори</h1>
   <p>
   Квантифікатори в регулярних виразах визначають кількість входжень попереднього елемента або групи в тексті. 
   Вони дозволяють виразити повторюваність частини виразу.
   </p>
 <ul>
      <li> * : Позначає, що попередній елемент може повторюватися 0 або більше разів.<br> 
        Наприклад, a* визначає будь-яку кількість символів "a" (включаючи жоден "a").</li><br>
      <li> + : Вказує, що попередній елемент повинен повторюватися 1 або більше разів.<br> 
        Наприклад, a+ визначає один або більше символів "a".</li><br>
      <li> ? : Робить попередній елемент необов'язковим, тобто він може відсутній або зустрічатися один раз.<br> 
        Наприклад, colou?r визначає слова "color" або "colour"</li><br>
      <li> {n}: Вказує, що попередній елемент повинен повторюватися точно n разів.<br> 
        Наприклад, a{3} визначає "aaa".</li><br>
      <li> {n,}: Вказує, що попередній елемент повинен повторюватися принаймні n разів.<br> 
        Наприклад, a{2,} визначає "aa", "aaa", "aaaa", і так далі</li><br>
      <li> {n,m}: Вказує, що попередній елемент повинен повторюватися від n до m разів (включно).<br> 
        Наприклад, a{2,4} визначає "aa", "aaa", або "aaaa".</li><br>
  </ul>
</div>
</div>
<div class="image_right">
    <img src="gialla_right.png" alt="">
</div>
</div>