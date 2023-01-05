<?php
//Left Angle
if(isset($_GET['num']) && $_GET['num'] != 1){
    $prev_num = $_GET['num'] - 1;
?>
    <a href="projects.php?num=<?php echo $prev_num ?>" class="fas fa-angle-left"></a>

<?php
}
?>

<?php
//num Numbers
for($num = 1; $num <= $total_page_num; $num++){
    if($num > 0){
?>
    <a href="projects.php?num=<?php echo $num; ?>" class="<?php if(isset($_GET['num']) && $_GET['num'] == $num){ echo 'active-pag-link'; }?>"><?php echo $num; ?></a>
<?php    
    }
}
?>

<?php
if(isset($_GET['num']) && $_GET['num'] != $total_page_num){
    $next_num = $_GET['num'] + 1;
?>
    <a href="projects.php?num=<?php echo $next_num ?>" class="fas fa-angle-right"></a>
<?php
}
?>