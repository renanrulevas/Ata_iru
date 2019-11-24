<?php include_once("header.php"); ?>
        
    <main>

        <section id="form_contato">
            <h1>Contato</h1>
            <form>
                <div class="contato-wrap">
                    <label for="nome">Nome
                        <input type="text" name="nome" id="nome" required>
                    </label>
                    <label for="email">Email
                        <input type="email" name="email" id="email" required>
                    </label>
                    <label for="contato">Mensagem 
                        <textarea name="contato" id="contato" cols="30" rows="10" required></textarea>
                    </label>
                </div>
                <div class="contato-botao">
                    <input type="submit" name="enviar" value="Enviar" />
                </div>
            </form>
        </section>

    </main>        
        
<?php include_once("footer.php"); ?>