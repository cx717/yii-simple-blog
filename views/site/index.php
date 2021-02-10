<?php

use yii\widgets\LinkPager;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Simple Blog</h1>


    </div>

    <div class="body-content">

    <?php foreach($articles as $article) { ?>

        <div class="row">
            <div class="col-lg-12">

                <h2> <?php echo $article['title']; ?> </h2>

                <p> <?php echo $article['content']; ?> </p>

            </div>
        </div>

    <?php } ?>



        <div class="row">
            <div class="col-lg-12">

                <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>

            </div>
        </div>

    </div>
</div>
