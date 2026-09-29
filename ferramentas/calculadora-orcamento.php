<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal AutoTech - Nat</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- ========================= TOPO  ========================== -->
    <header class="topo">
        <div class="logo">
            <h1>
                Auto<span>Tech</span>
            </h1>
            <p>OFICINA MECÂNICA</p>
        </div>

        <div class="informacao">
            <h3>PORTAL DE FERRAMENTAS</h3>
            <p>
                Soluções rápidas para o dia a dia da oficina
            </p>
        </div>
    </header>
    <!-- =========================   MENU   ========================== -->
    <nav class="menu">
        <a href="../index.php">⌂ Início</a>
        <a href="calculadora-orcamento.php">Orçamento</a>
        <a href="troca-pneus.php">Pneus</a>
        <a href="calculadora-combustivel.php">Combustível</a>
        <a href="avaliador-manutencao.php">Serviço</a>
        <a href="simulador-viagem.php">Viagem</a>
    </nav>
    <!-- =========================  FERRAMENTAS  ========================== -->
    <section class="ferramentas">
        <h2>Calculadora de Orçamentos</h2>
        <p>
            Utilize esta ferramenta para realizar um orçamento. 
        </p>

        <!-- CARD 1 -->
        <article class="card">
            <div class="formulario">
                <form method="post">
                    <label class="legenda">Descrição:</label>
                    <input class="campo" type="text" name="descrição" placeholder="Descrição"/>

                    <label class="legenda">Valor das peças</label>
                    <input class="campo" type="text" name="valor" placeholder="Valor das Peças"/>

                    <label class="legenda">Valor da mão de obra</label>
                    <input class="campo" type="text" name="obra" placeholder="Valor da mçao de obra"/>

                    <button class="botao" type="submit">Calcular</button>
                </form>

            </div>
        </article>
    </section>

    <!-- =========================  RODAPÉ  ========================== -->

    <footer class="rodape">
        <div class="rodape-coluna">

            <h3>
                Auto<span style="color:#e52525;">Tech</span>
            </h3>

            <p>
                Portal de ferramentas para oficina mecânica.
            </p>

        </div>

        <div class="rodape-coluna">
            <h3>Ferramentas</h3>
            <p>Orçamento</p>
            <p>Pneus</p>
            <p>Combustível</p>
        </div>

        <div class="rodape-coluna">
            <h3>AutoTech</h3>

            <p>
                Qualidade em cada quilômetro.
            </p>

            <p>
                Santana de Parnaíba - SP
            </p>
        </div>

        <div class="copyright">
            © 2026 AutoTech - Portal de Ferramentas
        </div>
    </footer>
</body>
</html>