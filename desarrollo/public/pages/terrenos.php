<!-- Hero de terrenos -->
<section class="terrenos-hero">

    <div class="terrenos-hero-overlay"></div>

    <div class="container">

        <div class="terrenos-hero-contenido">

            <p class="terrenos-hero-etiqueta">
                ENCUENTRA TU PRÓXIMA INVERSIÓN
            </p>

            <h1>
                Terrenos que inspiran
                <span>grandes proyectos</span>
            </h1>

            <p class="terrenos-hero-descripcion">
                Explora nuestras propiedades disponibles y encuentra
                el espacio ideal para construir, invertir y hacer
                realidad tus próximos proyectos.
            </p>

        </div>

    </div>

</section>

<!-- Filtros de terrenos -->
<section class="terrenos-filtros">

    <div class="container">

        <div class="filtros-contenido">

            <div class="filtro-grupo">

                <label for="departamento">
                    Departamento
                </label>

                <select id="departamento">
                    <option value="">Todos</option>
                    <option value="cuilapa">Cuilapa</option>
                    <option value="oratorio">Oratorio</option>
                </select>

            </div>


            <div class="filtro-grupo">

                <label for="precio">
                    Precio
                </label>

                <select id="precio">
                    <option value="">Cualquier precio</option>
                    <option value="100000">Hasta Q100,000</option>
                    <option value="250000">Hasta Q250,000</option>
                    <option value="350000">Hasta Q350,000</option>
                </select>

            </div>


            <div class="filtro-grupo">

                <label for="area">
                    Área
                </label>

                <select id="area">
                    <option value="">Cualquier área</option>
                    <option value="900">Hasta 900 m²</option>
                    <option value="1200">Hasta 1,200 m²</option>
                    <option value="1201">Más de 1,200 m²</option>
                </select>

            </div>


            <button class="filtros-btn" id = "limpiarFiltros" type="button">
                Limpiar Filtro
            </button>

        </div>

    </div>

</section>

<!-- Catalogo de terrenos -->
<section class="catalogo-terrenos">

    <div class="container">

        <div class="catalogo-encabezado">

            <div>
                <p class="catalogo-etiqueta">
                    PROPIEDADES DISPONIBLES
                </p>

                <h2>
                    Encuentra el terreno ideal
                </h2>
            </div>

            <p class="catalogo-resultados">
                6 terrenos disponibles
            </p>

        </div>


        <div class="catalogo-grid">

            <!-- Terreno Cuilapa 1 -->
            <article class="catalogo-card" data-departamento="cuilapa" data-precio = "350000" data-area = "1200">

                <div class="catalogo-imagen">

                    <img src="assets/img/terrenos/Tcuilapa.jpg"
                         alt="Terreno disponible en Cuilapa">

                    <span class="catalogo-estado">
                        Disponible
                    </span>

                </div>

                <div class="catalogo-info">

                    <p class="catalogo-ubicacion">
                        Cuilapa, Santa Rosa
                    </p>

                    <h3>Terreno en Cuilapa</h3>

                    <div class="catalogo-datos">

                        <span>1,200 m²</span>
                        <span>Q 350,000</span>

                    </div>

                    <a href="#">
                        Ver detalles →
                    </a>

                </div>

            </article>

            <!-- Terreno Oratorio 1 -->
            <article class="catalogo-card" data-departamento="oratorio" data-precio = "250000" data-area = "900">

                <div class="catalogo-imagen">

                    <img src="assets/img/terrenos/Toratorio.jpg"
                         alt="Terreno disponible en Oratorio">

                    <span class="catalogo-estado">
                        Disponible
                    </span>

                </div>

                <div class="catalogo-info">

                    <p class="catalogo-ubicacion">
                        Oratorio, Santa Rosa
                    </p>

                    <h3>Terreno en Oratorio</h3>

                    <div class="catalogo-datos">

                        <span>900 m²</span>
                        <span>Q 250,000</span>

                    </div>

                    <a href="#">
                        Ver detalles →
                    </a>

                </div>

            </article>

            <!-- Terreno CUilapa 2 -->
            <article class="catalogo-card" data-departamento="cuilapa" data-precio = "120000" data-area = "950">

                <div class="catalogo-imagen">

                    <img src="assets/img/terrenos/Tcuilapa2.jpg"
                         alt="Terreno disponible en Cuilapa">

                    <span class="catalogo-estado">
                        Disponible
                    </span>

                </div>

                <div class="catalogo-info">

                    <p class="catalogo-ubicacion">
                        Cuilapa, Santa Rosa
                    </p>

                    <h3>Terreno en Cuilapa</h3>

                    <div class="catalogo-datos">

                        <span>950 m²</span>
                        <span>Q 120,000</span>

                    </div>

                    <a href="#">
                        Ver detalles →
                    </a>

                </div>

            </article>

            <!-- Terreno Oratorio 2 -->
            <article class="catalogo-card" data-departamento="oratorio" data-precio = "250000" data-area = "1000">

                <div class="catalogo-imagen">

                    <img src="assets/img/terrenos/Toratorio2.jpg"
                    alt="Terreno disponible en Oratorio">

                    <span class="catalogo-estado">
                        Disponible
                    </span>

                </div>

                <div class="catalogo-info">

                    <p class="catalogo-ubicacion">
                        Oratorio, Santa Rosa
                    </p>

                    <h3>Terreno en Oratorio</h3>

                    <div class="catalogo-datos">
                        <span>1,000 m²</span>
                        <span>Q 250,000</span>
                    </div>

                    <a href="#">Ver detalles →</a>

                </div>

            </article>

            <!-- Terreno Cuilapa 3 -->
            <article class="catalogo-card" data-departamento="cuilapa" data-precio = "100000" data-area = "875">

                <div class="catalogo-imagen">

                    <img src="assets/img/terrenos/Tcuilapa3.jpg"
                    alt="Terreno disponible en Cuilapa">

                    <span class="catalogo-estado">
                        Disponible
                    </span>

                </div>

                <div class="catalogo-info">

                    <p class="catalogo-ubicacion">
                        Cuilapa, Santa Rosa
                    </p>

                    <h3>Terreno en Cuilapa</h3>

                    <div class="catalogo-datos">
                        <span>875 m²</span>
                        <span>Q 100,000</span>
                    </div>

                    <a href="#">Ver detalles →</a>

                </div>

            </article>

            <!-- Terreno Oratorio 3 -->
            <article class="catalogo-card" data-departamento="oratorio" data-precio = "325000" data-area = "1200">

                <div class="catalogo-imagen">

                    <img src="assets/img/terrenos/Toratorio3.jpg"
                    alt="Terreno disponible en Oratorio">

                    <span class="catalogo-estado">
                        Disponible
                    </span>

                </div>

                <div class="catalogo-info">

                    <p class="catalogo-ubicacion">
                        Oratorio, Santa Rosa
                    </p>

                    <h3>Terreno en Oratorio</h3>

                    <div class="catalogo-datos">
                        <span>1,200 m²</span>
                        <span>Q 325,000</span>
                    </div>

                    <a href="#">Ver detalles →</a>

                </div>

            </article>

        </div>

    </div>

</section>

