<?php 
include 'header.php';
include 'connect.php';
?>
<section class="page-header padding">
    <div class="overlay"></div>
    <div class="container">
        <div class="page-content text-center">
            <h2>Arogya Gramin Center</h2>
            <p>Arogay Gramin Center is a type of our branches established at block level on each district of the nation <br>From where our volunteer and BPO's perform all the task related to organisation and facilitate the community. </p>
            <div class="page-item bannercenter">
                <a href="index.php"><i class="ti-home"></i>Home </a>
                <p>Arogya Gramin Center</p>
            </div>
        </div>
    </div>
</section>
<section class="blog-section padding">
    <div class="container">
        <div class="blog-wrap row">

            <?php
            include 'connect.php';
            
			$sql = "SELECT * FROM dpo_bpo where post='Arogya Gramin'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) { ?>
            <div class="col-lg-4 col-md-6 sm-padding">
                <div class="blog-item">
                    <div class="blog-thumb">
                        <img src="assets/new/img/hospital.png" alt="post">
                        <span class="category"><a href="#">Arogya Gramin</a></span>
                    </div>
                    <div class="blog-content">
                        <h3>
                            <a href="center_view.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                        </h3>
                        <ul class="event-list">
                            <?php
							if($row['office_address']){ ?>
                            <li><i class="fas fa-map-marker-alt"></i><?php echo $row['office_address'];?></li>
                            <?php } ?>
                        </ul>
                        <a href="center_view.php?id=<?php echo $row['id']; ?>" class='read-more'>Read More</a>
                    </div>
                </div>
            </div>
            <?php 
                }
            } else {
                echo "0 results";
            }
            
        ?>
		</div>
    </div>
</section>
<?php include 'footer.php'?>
  