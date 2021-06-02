<?=$render('header', ['loggedUser' => $loggedUser]);?>

    <section class="container main">
        <?=$render('sidebar', ['activeMenu'=>'search']);?>

        <section class="feed  m-10">

            <div class="row">
                <div class="column pr-5">

                    <h1>
                        Você pesquisou por: <strong><?=$searchTerm;?></strong>
                    </h1>
                    <div class="full-friend-list">
                        <?php foreach($users as $user): ?>
                        <div class="friend-icon">
                            <a href="<?=$base;?>/perfil/<?=$user->id;?>">
                                <div class="friend-icon-avatar">
                                    <img src="<?=$base;?>/media/avatars/<?=$user->avatar;?>" />
                                </div>
                                <div class="friend-icon-name">
                                <?=$user->name;?>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
                <div class="column side pl-5">
                    <?=$render('right-side');?>
                </div>
            </div>


        </section>


    </section>
    <?=$render('footer');?>