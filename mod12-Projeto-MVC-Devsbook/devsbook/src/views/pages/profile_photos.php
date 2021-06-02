<?=$render('header', ['loggedUser' => $loggedUser]);?>

    <section class="container main">
        <?=$render('sidebar', ['activeMenu'=>'photos']);?>

        <section class="feed">

            <?=$render('perfil-header', ['user'=>$user, 'loggedUser'=>$loggedUser, 'isFollowing'=>$isFollowing]);?>
            
            <div class="row">

                <div class="column">
                    
                    <div class="box">
                        <div class="box-body">

                            <div class="full-user-photos">

                                <?php if(count($user->photos) === 0): ?>
                                    Este usuário não possui fotos.
                                <?php endif; ?>


                                <?php foreach($user->photos as $photo): ?>
                                <div class="user-photo-item">
                                    <a href="#modal-<?=$photo->id;?>" rel="modal:open">
                                        <img src="<?=$base;?>/media/uploads/<?=$photo->body;?>" />
                                    </a>
                                    <div id="modal-<?=$photo->id;?>" style="display:none">
                                        <img src="<?=$base;?>/media/uploads/<?=$photo->body;?>" />
                                    </div>
                                </div>
                                <?php endforeach; ?>

                                <!-- 
    
                                <div class="user-photo-item">
                                    <a href="#modal-2" rel="modal:open">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </a>
                                    <div id="modal-2" style="display:none">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </div>
                                </div>

                                <div class="user-photo-item">
                                    <a href="#modal-3" rel="modal:open">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </a>
                                    <div id="modal-3" style="display:none">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </div>
                                </div>

                                <div class="user-photo-item">
                                    <a href="#modal-4" rel="modal:open">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </a>
                                    <div id="modal-4" style="display:none">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </div>
                                </div>

                                <div class="user-photo-item">
                                    <a href="#modal-5" rel="modal:open">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </a>
                                    <div id="modal-5" style="display:none">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </div>
                                </div>

                                <div class="user-photo-item">
                                    <a href="#modal-6" rel="modal:open">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </a>
                                    <div id="modal-6" style="display:none">
                                        <img src="<?=$base;?>media/uploads/1.jpg" />
                                    </div>
                                </div>
                                 -->

                            </div>
                            

                        </div>
                    </div>

                </div>
            
            </div>

        </section>


    </section>
    <?=$render('footer');?>