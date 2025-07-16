<div class="h-4 bg-transparent"></div>

<div x-data="{
    imagenActiva: 'info',
    contenido: {
        info: {
            titulo: 'RECURSOS DE INFORMACIÓN ELECTORAL',
            descripcion: 'PARA LA COMPRENSIÓN DE LA IMPORTANCIA DE LA PARTICIPACIÓN POLÍTICA',
            icono: '{{ asset('/DnefDocumentos/public/img/AZUL.png') }}' // Icono para Información
        },
        comunicacion: {
            titulo: 'COMUNICACIÓN PARA FORJAR',
            descripcion: 'PARA FORJAR EL COMPROMISO DEMOCRÁTICO',
            icono: '{{ asset('/DnefDocumentos/public/img/DORADO.png') }}' // Icono para Comunicación
        },
        formacion: {
            titulo: 'FORMACIÓN',
            descripcion: 'PARA CULTIVAR EL ANÁLISIS CRÍTICO',
            icono: '{{ asset('/DnefDocumentos/public/img/TURQUEZA.png') }}' // Icono para Formación
        },
        participacion: {
            titulo: 'PARTICIPACIÓN POLÍTICA',
            descripcion: 'PARA LA IMPLICACIÓN Y LA ACCIÓN CIUDADANA',
            icono: '{{ asset('/DnefDocumentos/public/img/ROJO.png') }}' // Icono para Participación
        }
    },
    colorTitulo() {
        switch (this.imagenActiva) {
            case 'info':
                return 'text-[#07678D]';
            case 'comunicacion':
                return 'text-[#E0B673]';
            case 'formacion':
                return 'text-[#00AF9D]';
            case 'participacion':
                return 'text-[#CD1316]';
            default:
                return 'text-gray-800';
        }
    }
}" class="flex flex-col gap-4 w-full pt-6 px-4 bg-white
    lg:pt-12 lg:pl-[6%] lg:pr-4 lg:grid lg:grid-cols-5 lg:grid-rows-5">

    <div class="order-1 flex flex-col justify-center px-4 text-center
        md:pt-4
        lg:pt-0
        lg:col-span-3 lg:col-start-1 lg:row-start-1 lg:pl-[12%] lg:pr-6 lg:text-left">
        <h2 :class="colorTitulo()" class="text-2xl lg:text-4xl font-extrabold mb-2 transition-colors duration-300">
            <span x-text="contenido[imagenActiva].titulo"></span>
        </h2>
        <p class="text-sm lg:text-lg text-gray-700" x-text="contenido[imagenActiva].descripcion"></p>
    </div>

     <div class="order-2 flex items-center justify-center {{-- p-4 ELIMINADO DE AQUÍ --}}
        lg:col-span-3 lg:row-span-4 lg:col-start-1 lg:row-start-2 lg:p-0">
        <img :src="imagenActiva === 'info' ? '{{ asset('/DnefDocumentos/public/img/ELECTORAL1.png') }}' :
            imagenActiva === 'comunicacion' ? '{{ asset('/DnefDocumentos/public/img/COMUNICACION-IMG.png') }}' :
            imagenActiva === 'formacion' ? '{{ asset('/DnefDocumentos/public/img/FORMACION-IMG.png') }}' :
            '{{ asset('/DnefDocumentos/public/img/PARTICIPACION-IMG.png') }}'"
            alt="Imagen dinámica" class="max-w-[95%] sm:max-w-[90%] lg:max-w-[78%] h-auto object-contain transition duration-300 ease-in-out">
    </div>

    <div
        class="order-3 flex justify-center items-center bg-gray-100 rounded-lg
        pt-14 pb-0 {{-- <--- pt-6 y pb-0 para móviles/tablets (base) --}}
        sm:pt-14 {{-- <--- Aumenta pt a 8 para tablets (desde sm) --}}
        lg:py-6 {{-- <--- Restaura py-6 para desktop (desde lg) --}}
        lg:col-span-2 lg:row-span-4 lg:col-start-4 lg:row-start-2">
        <div class="escalera scale-[0.7] sm:scale-[0.9] lg:scale-[1.2] transform origin-top">
            <div class="escalon nivel4">
                <div class="lado">
                    <button class="btn cube cube-hover cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">04</div>
                    </button>
                </div>
                <button @click="imagenActiva = 'participacion'" class="btn cube cube-hover">
                    <div class="bg-top">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg-right">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="text">PARTICIPACIÓN</div>
                </button>
                <div class="lado">
                    <button class="btn cube cube-hover orientado-izquierda cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">
                            <img :src="contenido.participacion.icono" alt="Icono Participación" class="img-icono">
                        </div>
                    </button>
                </div>
            </div>

            <div class="escalon nivel3">
                <div class="lado">
                    <button class="btn cube cube-hover cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">03</div>
                    </button>
                </div>
                <button @click="imagenActiva = 'formacion'" class="btn cube cube-hover">
                    <div class="bg-top">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg-right">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="text">FORMACIÓN</div>
                </button>
                <div class="lado">
                    <button class="btn cube cube-hover orientado-izquierda cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">
                            <img :src="contenido.formacion.icono" alt="Icono Formación" class="img-icono">
                        </div>
                    </button>
                </div>
            </div>

            <div class="escalon nivel2">
                <div class="lado">
                    <button class="btn cube cube-hover cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">02</div>
                    </button>
                </div>
                <button @click="imagenActiva = 'comunicacion'" class="btn cube cube-hover">
                    <div class="bg-top">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg-right">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="text">COMUNICACIÓN</div>
                </button>
                <div class="lado">
                    <button class="btn cube cube-hover orientado-izquierda cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">
                            <img :src="contenido.comunicacion.icono" alt="Icono Comunicación" class="img-icono">
                        </div>
                    </button>
                </div>
            </div>

            <div class="escalon nivel1">
                <div class="lado">
                    <button class="btn cube cube-hover cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">01</div>
                    </button>
                </div>
                <button @click="imagenActiva = 'info'" class="btn cube cube-hover">
                    <div class="bg-top">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg-right">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="bg">
                        <div class="bg-inner"></div>
                    </div>
                    <div class="text">INFORMACIÓN</div>
                </button>
                <div class="lado">
                    <button class="btn cube cube-hover orientado-izquierda cubo-lateral" type="button">
                        <div class="bg-top">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg-right">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="bg">
                            <div class="bg-inner"></div>
                        </div>
                        <div class="text">
                            <img :src="contenido.info.icono" alt="Icono Información" class="img-icono">
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* From Uiverse.io by Yaya12085 */
    .escalera {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0;
    }

    .escalon {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 0;
        margin-bottom: 19px;
        /* para efecto de solapamiento como en la imagen */
    }

    .lado {
        width: 50px;
        display: flex;
        justify-content: center;
    }

    /* Ajuste para el cubo lateral IZQUIERDO (el del número) */
    .cubo-lateral:not(.orientado-izquierda) {
        width: 50px;
        /* Ancho del cubo de números. Ajusta este valor */
        padding: 0.6em 0.5em;
        /* Padding ajustado para el contenido */
    }

    /* Estilo para los cubos con imagen (derecha) */
    .cubo-lateral.orientado-izquierda {
        width: 55px;
        /* Ancho ajustado para los cubos de la derecha */
        padding: 0.6em 0.2em;
        /* Reducido el padding horizontal para visibilidad del icono */
    }

    .escalon>.btn {
        flex: 1;
        display: flex;
        justify-content: center;
        text-align: center;
        margin: 0 auto;
    }

    /* Ancho decreciente por nivel */
    .nivel1 {
        width: 420px;
    }

    .nivel2 {
        width: 380px;
    }

    .nivel3 {
        width: 340px;
    }

    .nivel4 {
        width: 300px;
    }

    /* Número lateral */
    .numero {
        width: 50px;
        font-size: 1.5em;
        font-weight: bold;
        text-align: center;
        font-family: sans-serif;
    }

    /* Colores por nivel */
    .nivel1 .numero,
    .nivel1 .text {
        color: #006084;
    }

    .nivel2 .numero,
    .nivel2 .text {
        color: #d0a251;
    }

    .nivel3 .numero,
    .nivel3 .text {
        color: #00aaa8;
    }

    .nivel4 .numero,
    .nivel4 .text {
        color: #c31213;
    }

    /* Botón general */
    .btn {
        display: block;
        padding: 0.6em 2em;
        background: transparent;
        outline: none;
        border: 0;
        font-family: sans-serif;
        font-size: 17px;
        font-weight: bold;
        cursor: pointer;
        z-index: 1;
    }

    /* Estilo de cubo */
    .cube {
        position: relative;
        transition: all 0.5s;
    }

    /* Parte superior del cubo (tapa) - REGLA GENERAL */
    .cube .bg-top {
        position: absolute;
        height: 20px;
        background: #171717;
        bottom: 99%;
        left: 10px;
        right: -10px;
        transform: skew(-45deg, 0);
        margin: 0;
        transition: all 0.4s;
    }

    /* AJUSTES ESPECÍFICOS PARA LA TAPA SUPERIOR (bg-top) */
    /* Para cubos laterales de NÚMEROS (izquierda) */
    .cubo-lateral:not(.orientado-izquierda) .bg-top {
        left: 10px;
        right: -10px;
        transform: skew(-45deg, 0);
    }

    /* Para cubos laterales de ICONOS (derecha) */
    .cubo-lateral.orientado-izquierda .bg-top {
        left: -10px;
        right: 10px;
        transform: skew(45deg, 0);
    }

    /* Fondo base del cubo (la parte visible principal) */
    .cube .bg {
        position: absolute;
        left: 0;
        bottom: 0;
        top: 0;
        right: 0;
        background: #171717;
        transition: all 0.4s;
    }

    /* Parte interna blanca */
    .cube .bg-inner {
        background: #ffffff;
        position: absolute;
        left: 2px;
        right: 2px;
        top: 2px;
        bottom: 2px;
        transition: all 0.4s;
    }

    /* Texto principal del botón */
    .cube .text {
        position: relative;
        transition: all 0.4s;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    /* Hover: fondo del color del texto y texto blanco */
    .nivel1 .cube:hover .bg-inner {
        background: #006084;
    }

    .nivel1 .cube:hover .text {
        color: #fff;
    }

    .nivel2 .cube:hover .bg-inner {
        background: #d0a251;
    }

    .nivel2 .cube:hover .text {
        color: #fff;
    }

    .nivel3 .cube:hover .bg-inner {
        background: #00aaa8;
    }

    .nivel3 .cube:hover .text {
        color: #fff;
    }

    .nivel4 .cube:hover .bg-inner {
        background: #c31213;
    }

    .nivel4 .cube:hover .text {
        color: #fff;
    }

    .cubo-lateral:hover .bg-inner {
        background: #ffffff !important;
    }

    .cubo-lateral:hover .text {
        color: inherit !important;
    }

    .cubo-lateral:hover .bg,
    .cubo-lateral:hover .bg-right,
    .cubo-lateral:hover .bg-top {
        background: #171717 !important;
    }

    .cubo-lateral:active {
        animation: none !important;
        transform: none !important;
        z-index: auto !important;
    }

    .img-icono {
        max-width: 26px;
        max-height: 26px;
        object-fit: contain;
    }

    /* Efecto 3D en hover */
    .cube:hover .bg-right,
    .cube:hover .bg,
    .cube:hover .bg-top {
        background: #171717;
    }


    /*
     * REGLAS CRÍTICAS PARA LOS BORDES LATERALES (bg-right)
     * ASEGÚRATE DE QUE ESTAS REGLAS ESTÉN AL FINAL DE LA SECCIÓN <style>
     * PARA GARANTIZAR SU ESPECIFICIDAD Y ORDEN DE CASCADA.
     */

    /* Regla general para el lado derecho del cubo (esta cara crea el efecto 3D) */
    .cube .bg-right {
        position: absolute;
        height: 100%;
        width: 20px;
        /* Ancho predeterminado del "borde" 3D para cubos centrales */
        background: #171717;
        top: 10px;
        right: 100%;
        /* Posicionamiento para cubos "normales" (centrales) */
        transform: skew(0, -45deg);
        transition: all 0.4s;
        margin: 0;
    }

    /* **Ajuste para cubos laterales IZQUIERDOS (números): Cara lateral que debe desaparecer** */
    .cubo-lateral:not(.orientado-izquierda) .bg-right {
        width: 0px;
        /* Hace que la cara lateral no sea visible */
        right: 0px;
        /* Ajusta su posición para que no sobresalga ni cause artefactos */
        left: auto;
        transform: skew(0, -45deg);
        opacity: 0;
        /* Asegura que sea completamente invisible */
        pointer-events: none;
        /* Evita interacciones con el ratón */
    }

    /* **Ajuste para cubos laterales DERECHOS (iconos): Cara lateral que debe desaparecer** */
    .cubo-lateral.orientado-izquierda .bg-right {
        width: 0px;
        /* Hace que la cara lateral no sea visible */
        left: 0px;
        /* Ajusta su posición para que no sobresalga ni cause artefactos */
        right: auto;
        transform: skew(0, 45deg);
        opacity: 0;
        /* Asegura que sea completamente invisible */
        pointer-events: none;
        /* Evita interacciones con el ratón */
    }

    /* **Ajuste para el cubo CENTRAL (el grande): Asegurar que sus caras 3D estén visibles y bien posicionadas** */
    .escalon>.btn:not(.cubo-lateral) .bg-right {
        width: 0px;
        /* Restaura el ancho de la cara lateral del cubo central */
        right: -10px;
        /* Posiciona esta cara fuera del borde derecho del cubo central */
        left: auto;
        opacity: 1;
        /* Asegura que sea visible */
        pointer-events: auto;
        /* Permite interacciones con el ratón */
    }

    .escalon>.btn:not(.cubo-lateral) .bg-top {
        right: -10px;
        /* Mueve su tapa superior hacia afuera de su propio borde derecho */
        left: 10px;
        /* Mantiene el inicio de la tapa */
        height: 20px;
        /* Altura predeterminada */
        opacity: 1;
        /* Aseguramos que sea visible */
        pointer-events: auto;
        /* Permite interacciones con el ratón */
    }

</style>