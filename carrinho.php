<?php include_once("header.php"); ?>
        
    <main>
        
    <!-- Variável temporário para simular a existência de um item no carrinho -->
    <?php $item = rand(0,1); ?>

    <?php if($item == 0) {?>
        <h2>Não há items no seu carrinho! :(</h2>
    <?php } else { ?>
        <section class="carrinho_lista">
            <div class="carrinho_checkout">
                <img src= <?= getImagem(0); ?> alt="" />
                <div class="carrinho_conteudo">
                    <h3><?= getTitulo(0); ?></h3>
                    <small><?= getSobrenome(0).", ".getNome(0); ?></small>
                </div>
                <h4><?= getPreco(0); ?></h4>
                <form>
                    <input type="number" min="1" max="100" placeholder="1">
                    <button><i class="far fa-trash-alt"></i></button>
                </form>
            </div>
    </section>

    <?php } ?>
        

    </main>        
        
<?php include_once("footer.php"); ?>