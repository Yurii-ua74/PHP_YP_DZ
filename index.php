
<div class="header-container">
    <?php include 'header.php';?>
</div>
    
<div class="photo-container">
    <div class="content-wrapper">
       <img src="gialla.jpg" alt="" class="responsive-image"> 
    </div> 
    <div class="text-container">
       <h1 class="center-text">Welcome to YP_DZ</h1>
    </div> 
</div>

<style>
 .header-container {
    position: fixed;
    top: 8px;
    left: 8px;
    right: 8px;
    z-index: 2; /* Забезпечує, що header-container буде відображено над photo-container */
}   

.photo-container {
    position: fixed;
    top: 60px; /* Висота вашого хідера */
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 1; 
}

.text-container {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2; /* Забезпечує, що text-container буде відображено над content-wrapper */
    color: #3498db; /* Додайте кольори або інші стилі за потребою */
}

.responsive-image {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

.content-wrapper {
    text-align: center;
    z-index: 1; /* Забезпечує, що content-wrapper буде відображено перед text-container */

}

.center-text {
    text-align: center;
    font-size: 74px;
}
</style>
