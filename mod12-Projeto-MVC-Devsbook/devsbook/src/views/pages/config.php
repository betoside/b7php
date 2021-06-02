<?=$render('header', ['loggedUser' => $loggedUser]);?>

    <section class="container main">
        <?=$render('sidebar', ['activeMenu'=>'config']);?>

        <section class="feed  m-10">

            <div class="row">
                <div class="column pr-5">

                    <!-- 
                        BRIEFING: 

                        ter cuidados com algumas coisas:

                        Data de Nascimento: 
                        precisa validar a data certinha

                        Email: 
                        - existe a possibilidade de trocar o email
                        - nao pode deixar trocar o email por outro que já existe
                        
                        Senha / Nova senha:
                        - vai trocar a senha se ambos os campos forem preenchidos
                        - os dois campos tem que estar iguais

                        Cidade: 
                        se preencher tem que exibir na área do perfil

                        Trabalho: 
                        se preencher tem que exibir na área do perfil


                        ========================
                        src\models\User Object
                        (
                            [id] => 12
                            [name] => Stella Maris 123
                            [birthdate] => 1990-02-01
                            [city] => 
                            [work] => 
                            [avatar] => default.jpg
                            [cover] => cover.jpg
                            [followers] => Array
                                (
                                )
                            [following] => Array
                                (
                                    [0] => src\models\User Object
                                        (
                                            [id] => 11
                                            [name] => jac big
                                            [avatar] => default.jpg
                                        )
                                )
                            [photos] => Array
                                (
                                )
                        )
                     -->

                     <?php if (!empty($flash)): ?>
                
                        <div class="flash"><?php echo $flash; ?></div>

                    <?php endif; ?>


                    <form class="config-form" enctype="multipart/form-data" method="POST" action="<?=$base;?>/config">
                        <?php if (!empty($flash)): ?>
                            <div class="flash"><?php echo $flash; ?></div>
                        <?php endif; ?>

                        <div class="campo-form">
                            <label for="name">Novo Avatar:</label>
                            <input class="input" type="file" name="avatar" />
                            <br>
                            <strong>Sampler:</strong> <?=$user->avatar;?>
                            <br>
                            <img class="img-edit" src="<?=$base;?>/media/avatars/<?=$user->avatar;?>" alt="">
                        </div>

                        <div class="campo-form">
                            <label for="name">Nova Capa:</label>
                            <input class="input" type="file" name="cover" />
                            <br>
                            <strong>Sampler:</strong> <?=$user->cover;?>
                            <br>
                            <img class="img-edit" src="<?=$base;?>/media/covers/<?=$user->cover;?>" alt="">
                        </div>

                        <div class="campo-form">
                            <label for="name">Nome Completo</label>
                            <input placeholder="Nome Completo" class="input" type="text" name="name" value="<?=$user->name;?>" />
                        </div>

                        <?php
                            // echo $user->name;
                            // echo "<pre>";
                            // print_r($user);
                            // echo "</pre>";
                        ?>

                        <input class="input" type="hidden" name="idUser" value="<?=$user->id;?>" />

                        <div class="campo-form">
                            <label for="birthdate">Data de Nascimento</label>
                            <input id="birthdate" placeholder="Data de Nascimento" class="input" type="text" name="birthdate" value="<?=date('d/m/Y', strtotime($user->birthdate));?>" />
                        </div>
                        <div class="campo-form">
                            <label for="email">Email</label>
                            <input placeholder="Email" class="input" type="email" name="email" value="<?=$user->email;?>" />
                        </div>
                        <div class="campo-form">
                            <label for="city">Cidade</label>
                            <input placeholder="Cidade" class="input" type="text" name="city" value="<?=$user->city;?>" />
                        </div>
                        <div class="campo-form">
                            <label for="work">Trabalho</label>
                            <input placeholder="Trabalho" class="input" type="text" name="work" value="<?=$user->work;?>" />
                        </div>
                        <hr>
                        <br>
                        <div class="campo-form">
                            <label for="password">Nova Senha</label>
                            <input placeholder="Nova senha" class="input" type="password" name="password" />
                        </div>
                        <div class="campo-form">
                            <label for="newpassword">Confirmar Senha</label>
                            <input placeholder="Confirmar senha" class="input" type="password" name="password_confirm" />
                        </div>
                        
                        <input class="button" type="submit" value="Salvar" />
                    </form>

                </div>
                <div class="column side pl-5">
                    <?php // $render('right-side');?>
                </div>

            </div>

        </section>

    </section>
    <?=$render('footer');?>