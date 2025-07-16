<div class="escalera">
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

        <button class="btn cube cube-hover" type="button">
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
                    <img src="{{ asset('/DnefDocumentos/public/img/ROJO.png') }}" alt="Icono Rojo" class="img-icono">
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

        <button class="btn cube cube-hover" type="button">
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
                    <img src="{{ asset('/DnefDocumentos/public/img/TURQUEZA.png') }}" alt="Icono Turquesa" class="img-icono">
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

        <button class="btn cube cube-hover" type="button">
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
                    <img src="{{ asset('/DnefDocumentos/public/img/DORADO.png') }}" alt="Icono Dorado" class="img-icono">
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

        <button class="btn cube cube-hover" type="button">
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
                    <img src="{{ asset('/DnefDocumentos/public/img/AZUL.png') }}" alt="Icono Azul" class="img-icono">
                </div>
            </button>
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
        /* Valores base, serán sobrescritos por reglas más específicas */
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

    /* **SOLUCIÓN 1: Ajuste de bordes para cubos laterales IZQUIERDOS (números)** */
    .cubo-lateral:not(.orientado-izquierda) .bg-right {
        width: 0px;
        /* Ajusta el grosor de este "borde" lateral. Prueba 5px o 0px si quieres que desaparezca. */
        right: 10px;
        /* <--- VALOR CLAVE: Posiciona esta cara *fuera* del borde derecho del cubo */
        left: auto;
        transform: skew(0, -45deg);
        /* Mantiene la inclinación para que simule el lado derecho */
    }

    /* **SOLUCIÓN 1: Ajuste de bordes para cubos laterales DERECHOS (iconos)** */
    .cubo-lateral.orientado-izquierda .bg-right {
        width: 0px;
        /* Ajusta el grosor de este "borde" lateral. Un valor positivo, NO negativo. */
        left: 10px;
        /* <--- VALOR CLAVE: Posiciona esta cara *fuera* del borde izquierdo del cubo */
        right: auto;
        transform: skew(0, 45deg);
        /* Cambia la inclinación para que simule el lado izquierdo */
    }

    /* **SOLUCIÓN 2: Evitar que el cubo central solape los cubos laterales** */
    /* Ajustamos el posicionamiento de las caras del cubo central para que no invadan a los laterales */
    .escalon>.btn:not(.cubo-lateral) .bg-right {
        right: 10px;
        /* Mueve su cara lateral hacia afuera de su propio borde derecho */
        left: auto;
        width: 0px;
        /* Ancho predeterminado */
        opacity: 1;
        /* Aseguramos que sea visible */
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
    }
</style>
