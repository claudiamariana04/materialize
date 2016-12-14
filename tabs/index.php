<?php include 'inc/header.php'; ?>
<body>
    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a class="active" href="#t1">TAB 1</a></li>
                <li class="tab col s3"><a href="#t2">TAB 2</a></li>
                <li class="tab col s3"><a href="#t3">TAB 3</a></li>
                <li class="tab col s3"><a href="#t4">TAB 4</a></li>
            </ul>
        </div>
        <?php
        include 'inc/tabs/tab1.php';
        include 'inc/tabs/tab2.php';
        include 'inc/tabs/tab3.php';
        include 'inc/tabs/tab4.php';
        ?>
    </div>
    <?php include 'inc/footer.php'; ?>
