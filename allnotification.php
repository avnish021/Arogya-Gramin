<?php 
include 'header.php';
include 'connect.php';
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>All Notifications</h2>
            <div class="page-item">
                <a href="/"><i class="ti-home"></i>Home </a>
                <p>All Notifications</p>
            </div>
        </div>
    </div>
</section>

<!--header end-->





<section class="working-process bd-bottom padding">
    <div class="container">
        <!-- <div class="work-wrap row"> -->

        <?php

$sql = "SELECT * FROM notification";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 1;
    $j = 0;
    while($row = $result->fetch_assoc()) { 
    if ($j % 3 == 0) {
        echo '<div class = "work-wrap row pt-5 pb-5">';
    }

    ?>
        <div class="col-md-4 sm-padding bd-right">
            <div class="work-content">
                <h2><?php echo $i; ?></h2>
                <div class="section-heading">
                    <h3><?php echo $row['heading']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <a href="<?php echo $row['link'];?>" type="button" class="btn btn-sm btn-outline-danger mt-3">Open
                        <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    <br /><br />
                    <ul class="single-post-meta">
                        <li class="float-right"><i class="fas fa-calendar"></i>
                            <a href="#"><?php echo $row['rdt']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <?php
            if ($j % 3 == 2) {
                echo '</div>';
                echo '<hr>';
            }
             $i++;
             $j++;
             }
} else {
    echo "0 results";
}


?>

    </div>
</section><!-- ./ working-process -->

<?php include 'footer.php'?>