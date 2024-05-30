<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    
    <header>
    <nav id="nav">
      <div class="container">
        <a href="" class="logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/brand-persona-logo-4x.png' ?>" width="110" height="68" loading="lazy" alt="Logo Brand Persona">
        </a>
        <div class="mobile-menu-icon">
          <button onclick="menuShow()"><img class="icon" src="<?php echo get_template_directory_uri() . '/assets/img/menu_white_36dp.svg' ?>" alt="30px"></button>
        </div>

        <!-- lista de links para separar por coluna -->
            <div class="group-nav-links">
                    <a href="#home" title="Home">HOME</a></li>
                    <a href="#porque-brand-persona" title="Por que Brand Persona">POR QUE BRAND PERSONA</a>
                    <a href="#o-mercado" title="O mercado">O MERCADO</a>
                    <a href="#vantagens" title="Vantagens">VANTAGENS</a>
                    <a href="#como-funciona" title="Como funciona">COMO FUNCIONA</a>
                    <a href="#o-combo" title="O combo">O COMBO</a>
                    <a href="#contato" title="Contato">CONTATO</a>

            </div>

    <!-- break point para separar  -->
            <div class="break"></div>

            <div class="menu-mobile">
                <a href="#home" title="Home">HOME</a><br>
                <a href="#porque-brand-persona" title="Por que Brand Persona">POR QUE BRAND PERSONA</a><br>
                <a href="#o-mercado" title="O mercado">O MERCADO</a><br>
                <a href="#vantagens" title="Vantagens">VANTAGENS</a><br>
                <a href="#como-funciona" title="Como funciona">COMO FUNCIONA</a><br>
                <a href="#o-combo" title="O combo">O COMBO</a><br>
                <a href="#contato" title="Contato">CONTATO</a><br> 
            </div>
    </div>
</nav>
</header>

<section id="home">
        <div class="container">
            <div class="box">
                <span class="span">
                    leve sua empresa para a nova realidade digital
                </span>

                <h1>
                    A sua persona virtual <br> com alta performance
                </h1>

                <p class="font-catamaran">
                    Para marcas inovadoras: Brand Persona PYXYS + Ilustraria 3D  é o primeiro combo do Brasil <br>
                    de construção de avatares 3D, com tecnologia de ponta em computação gráfica, combinada <br> à mais
                    completa Estratégia de  Content, Growth e Performance Data-driven
                </p>

                <button class="button">
                    Quero saber mais
                </button>
                
                <div class="disclaimer">
                    <span>Um produto:</span>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/pyxys-logo-4x.png'?>" height="40" width="130" loading="lazy" alt="Logo PYXYS">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo-ilustraria3d-branco.png'?>" height="40" width="130" loading="lazy" alt="Logo Ilustraria 3D">
                  </div>
            </div>
        </div>
    </section>
    

