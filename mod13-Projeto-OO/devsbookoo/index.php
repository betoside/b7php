<?php
require_once 'config.php';
require_once 'models/Auth.php';
require_once 'dao/PostDaoMysql.php';
// require 'dao/UserRelationDaoMysql.php';


$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();
$activeMenu = 'home';

$postDao = new PostDaoMysql($pdo);
$info = $postDao->getHomeFeed($userInfo->id);
$feed = $info['feed'];
$pages = $info['pages'];
$currentPage = $info['currentPage'];
// echo "<pre>";
// print_r($feed);
// echo "</pre>";

require 'partials/header.php';
require 'partials/menu.php';
?>
        <section class="feed mt-10">

            <?php // echo $userInfo->name . "<br>";?>
            <?php 
            // echo "<pre>";
            // print_r($userInfo); 
            // echo "</pre>";
            ?>
            <div class="row">
                <div class="column pr-5">

                    <!-- Páginas: -->
                    <div class="feed-pagination">
                        <?php for($q=0;$q<$pages; $q++): ?>
                            <a class="<?=($q+1==$currentPage)?'active':'';?>" href="<?=$base?>/?p=<?=$q+1;?>"><?=$q+1;?></a>
                        <?php endfor; ?>
                    </div>

                    <?php require 'partials/feed-editor.php'; ?>
                    <?php foreach($feed as $item): ?>
                        <?php require 'partials/feed-item.php'; ?>
                    <?php endforeach; ?>

                    <!-- Páginas: -->
                    <div class="feed-pagination">
                        <?php for($q=0;$q<$pages; $q++): ?>
                            <a class="<?=($q+1==$currentPage)?'active':'';?>" href="<?=$base?>/?p=<?=$q+1;?>"><?=$q+1;?></a>
                        <?php endfor; ?>
                    </div>

                </div>
                <div class="column side pl-5">

                    <div class="box banners">
                        <div class="box-header">
                            <div class="box-header-text">Patrocinios</div>
                            <div class="box-header-buttons">
                                
                            </div>
                        </div>
                        <div class="box-body">
                            <a href=""><img src="<?=$base;?>/media/uploads/php-nivel-1.jpg?1" /></a>
                            <a href=""><img src="<?=$base;?>/media/uploads/laravel-nivel-1.jpg?1" /></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body m-10">
                            Criado com ❤️ por B7Web
                        </div>
                    </div>

                </div>
            </div>

            <?php // echo $_SESSION['token'];?>

        </section>
<?php
require 'partials/footer.php';
?>
