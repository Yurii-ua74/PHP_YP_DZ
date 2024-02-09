
<style>
  h1 {
    text-align: center;
  }
.photo-container {
    display: flex;
    /* align-items: flex-start; Вирівнювання елементів по вертикалі по центру, якщо вони різної висоти */  
  }

  .image_left {
    flex: 0 0 auto; 
    margin-right: 10px; 
  }

  .image_right {
    flex: 0 0 auto; 
    margin-left: 10px; 
  }

  .info-block {
    flex: 1; /* Займає доступний вільний простір між фото */
    height: 100%;    
  }

  .image_left img,
  .image_right img {
    max-width: 100%; /* Зберігання рівномірного розміру зображення */
    height: auto; 
    display: block; /* Вирівнювання зображення як блочний елемент */
    margin: 0; /* Центрування зображення в блоці */
  }
</style>