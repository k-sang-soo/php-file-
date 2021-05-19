<?php 
    require('../../head.php');
?>
<h1>A-A</h1>
<ul>
    <li><a href="?board=board-A">board-A</a></li>
    <li><a href="?board=board-B">board-B</a></li>
    <li><a href="?board=board-C">board-C</a></li>
</ul>

<?php 
    if(isset($_GET['board'])) {
        require_once("./board/{$_GET['board']}.php");
    }
?>


<?php 
    require('../../footer.php');
?>