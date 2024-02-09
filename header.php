<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YP_DZ</title>
</head>
<body>
<div class="menu-container">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/regexp.php">Regexp</a></li>
    </ul>
</div>
<hr>

</body>
</html>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentPath = window.location.pathname;
        var links = document.querySelectorAll('ul a');

        links.forEach(function(link) {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>

<style>
    li {
        display: inline;
        margin-right: 10px;
    }

    .active {
        font-weight: bold;
        color: #ff0000; /* highlight color */
    }

.menu-container {
   background-color: #3498db; /* колір фону */
   padding: 10px; /* отступ від країв контейнера */
   border-radius: 20px;
}

.menu-container ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

.menu-container li {
    display: inline;
    margin-right: 10px;
}

.menu-container a {
    text-decoration: none;
    color: white; /* Колір тексту посилань */
    font-weight: bold;
}


</style>