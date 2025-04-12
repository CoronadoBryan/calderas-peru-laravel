@extends('layouts.layout')

@section('content')

<div class="presupuesto-wrapper">
    <div class="presupuesto-header">
        <h1 class="presupuesto-title">Formulario de Presupuesto</h1>
    </div>

    <div class="presupuesto-container">
        <!-- Barra de progreso con pasos -->
        <div class="presupuesto-progress-wrapper">
            <ul class="presupuesto-steps-list">
                <li class="presupuesto-step presupuesto-active" data-step="1">
                    <div class="presupuesto-step-icon"><i class="fas fa-building"></i></div>
                    <p class="presupuesto-step-text">Empresa</p>
                </li>
                <li class="presupuesto-step" data-step="2">
                    <div class="presupuesto-step-icon"><i class="fas fa-user"></i></div>
                    <p class="presupuesto-step-text">Solicitante</p>
                </li>
                <li class="presupuesto-step" data-step="3">
                    <div class="presupuesto-step-icon"><i class="fas fa-industry"></i></div>
                    <p class="presupuesto-step-text">Caldera</p>
                </li>
                <li class="presupuesto-step" data-step="4">
                    <div class="presupuesto-step-icon"><i class="fas fa-tools"></i></div>
                    <p class="presupuesto-step-text">Mantenimiento</p>
                </li>
                <li class="presupuesto-step" data-step="5">
                    <div class="presupuesto-step-icon"><i class="fas fa-cogs"></i></div>
                    <p class="presupuesto-step-text">Repuestos</p>
                </li>
                <li class="presupuesto-step" data-step="6">
                    <div class="presupuesto-step-icon"><i class="fas fa-comments"></i></div>
                    <p class="presupuesto-step-text">Comentarios</p>
                </li>
            </ul>
            <div class="presupuesto-progress-bar">
                <div class="presupuesto-progress-indicator"></div>
            </div>
        </div>

        <div class="presupuesto-form-container">
            <form id="presupuestoForm" action="{{ route('enviarPresupuesto') }}" method="POST" class="presupuesto-form">
                @csrf
                <!-- Paso 1: Datos de la Empresa -->
                <div class="presupuesto-form-step presupuesto-active" data-step="1">
                    <div class="presupuesto-step-header">
                        <h3 class="presupuesto-step-title">Datos de la Empresa</h3>
                    </div>
                    <div class="presupuesto-form-grid">
                        <div class="presupuesto-form-group">
                            <label for="razon_social" class="presupuesto-label">Razón Social</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="razon_social" name="razon_social" class="presupuesto-input" placeholder="Ejemplo: Calderas Perú S.A.C." required>
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="ruc" class="presupuesto-label">RUC</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="ruc" name="ruc" class="presupuesto-input" placeholder="Ejemplo: 12345678901" required>
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="giro_empresa" class="presupuesto-label">Giro de Empresa</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="giro_empresa" name="giro_empresa" class="presupuesto-input" placeholder="Ejemplo: Fabricación de Calderas">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="direccion" class="presupuesto-label">Dirección</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="direccion" name="direccion" class="presupuesto-input" placeholder="Ejemplo: Av. Industrial 123, Lima">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="distrito" class="presupuesto-label">Distrito</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="distrito" name="distrito" class="presupuesto-input" placeholder="Ejemplo: San Isidro">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="departamento" class="presupuesto-label">Departamento</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="departamento" name="departamento" class="presupuesto-input" placeholder="Ejemplo: Lima">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="pais" class="presupuesto-label">País</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="pais" name="pais" class="presupuesto-input" placeholder="Ejemplo: Perú">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="telefono" class="presupuesto-label">Teléfono</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="telefono" name="telefono" class="presupuesto-input" placeholder="Ejemplo: 01-1234567">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="fax" class="presupuesto-label">Fax</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="fax" name="fax" class="presupuesto-input" placeholder="Ejemplo: 01-7654321">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="email" class="presupuesto-label">Correo Electrónico</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="email" id="email" name="email" class="presupuesto-input" placeholder="Ejemplo: contacto@empresa.com" required>
                            </div>
                        </div>
                    </div>
                    <div class="presupuesto-form-buttons">
                        <button type="button" class="presupuesto-btn presupuesto-next-btn">Siguiente</button>
                    </div>
                </div>

                <!-- Paso 2: Datos del Solicitante -->
                <div class="presupuesto-form-step" data-step="2">
                    <div class="presupuesto-step-header">
                        <h3 class="presupuesto-step-title">Datos del Solicitante</h3>
                    </div>
                    <div class="presupuesto-form-grid">
                        <div class="presupuesto-form-group">
                            <label for="nombres" class="presupuesto-label">Nombres</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="nombres" name="nombres" class="presupuesto-input" placeholder="Ejemplo: Juan">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="apellidos" class="presupuesto-label">Apellidos</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="apellidos" name="apellidos" class="presupuesto-input" placeholder="Ejemplo: Pérez">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="anexo" class="presupuesto-label">Anexo</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="anexo" name="anexo" class="presupuesto-input" placeholder="Ejemplo: 123">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="celular" class="presupuesto-label">Celular</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="celular" name="celular" class="presupuesto-input" placeholder="Ejemplo: 987654321">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="email_solicitante" class="presupuesto-label">Correo Electrónico</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="email" id="email_solicitante" name="email_solicitante" class="presupuesto-input" placeholder="Ejemplo: juan.perez@gmail.com">
                            </div>
                        </div>
                    </div>
                    <div class="presupuesto-form-buttons">
                        <button type="button" class="presupuesto-btn presupuesto-prev-btn">Anterior</button>
                        <button type="button" class="presupuesto-btn presupuesto-next-btn">Siguiente</button>
                    </div>
                </div>

                <!-- Paso 3: Datos de la Caldera -->
                <div class="presupuesto-form-step" data-step="3">
                    <div class="presupuesto-step-header">
                        <h3 class="presupuesto-step-title">Datos de la Caldera</h3>
                    </div>
                    <div class="presupuesto-form-grid">
                        <div class="presupuesto-form-group">
                            <label for="capacidad_bhp" class="presupuesto-label">Capacidad (B.H.P)</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="capacidad_bhp" name="capacidad_bhp" class="presupuesto-input" placeholder="Ejemplo: 500">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="cantidad" class="presupuesto-label">Cantidad</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="number" id="cantidad" name="cantidad" class="presupuesto-input" placeholder="Ejemplo: 2">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="tipo" class="presupuesto-label">Tipo</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="tipo" name="tipo" class="presupuesto-input" placeholder="Ejemplo: Pirotubular">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="combustible_utilizar" class="presupuesto-label">Combustible a Utilizar</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="combustible_utilizar" name="combustible_utilizar" class="presupuesto-input" placeholder="Ejemplo: Gas Natural">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="presion_trabajo" class="presupuesto-label">Presión de Trabajo</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="presion_trabajo" name="presion_trabajo" class="presupuesto-input" placeholder="Ejemplo: 150 PSI">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="voltaje_disponible" class="presupuesto-label">Voltaje Disponible</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="voltaje_disponible" name="voltaje_disponible" class="presupuesto-input" placeholder="Ejemplo: 220V">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="altura_operacion" class="presupuesto-label">Altura de Operación</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="altura_operacion" name="altura_operacion" class="presupuesto-input" placeholder="Ejemplo: 3000 msnm">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="lugar_instalacion" class="presupuesto-label">Lugar de Instalación</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="lugar_instalacion" name="lugar_instalacion" class="presupuesto-input" placeholder="Ejemplo: Planta Industrial">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="equipos_complementarios" class="presupuesto-label">Equipos Complementarios</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="equipos_complementarios" name="equipos_complementarios" class="presupuesto-input" placeholder="Ejemplo: Economizador, Precalentador">
                            </div>
                        </div>
                    </div>
                    <div class="presupuesto-form-buttons">
                        <button type="button" class="presupuesto-btn presupuesto-prev-btn">Anterior</button>
                        <button type="button" class="presupuesto-btn presupuesto-next-btn">Siguiente</button>
                    </div>
                </div>

                <!-- Paso 4: Datos del Mantenimiento -->
                <div class="presupuesto-form-step" data-step="4">
                    <div class="presupuesto-step-header">
                        <h3 class="presupuesto-step-title">Datos del Mantenimiento</h3>
                    </div>
                    <div class="presupuesto-form-grid">
                        <div class="presupuesto-form-group">
                            <label for="norma" class="presupuesto-label">Norma</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="norma" name="norma" class="presupuesto-input" placeholder="Ejemplo: ASME">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="diametro" class="presupuesto-label">Diámetro</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="diametro" name="diametro" class="presupuesto-input" placeholder="Ejemplo: 24 pulgadas">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="pies_longitud" class="presupuesto-label">Pies de Longitud</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="pies_longitud" name="pies_longitud" class="presupuesto-input" placeholder="Ejemplo: 10 pies">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="servicio_retubado" class="presupuesto-label">Servicio de Retubado</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="servicio_retubado" name="servicio_retubado" class="presupuesto-input" placeholder="Ejemplo: Sí/No">
                            </div>
                        </div>
                    </div>
                    <div class="presupuesto-form-buttons">
                        <button type="button" class="presupuesto-btn presupuesto-prev-btn">Anterior</button>
                        <button type="button" class="presupuesto-btn presupuesto-next-btn">Siguiente</button>
                    </div>
                </div>

                <!-- Paso 5: Datos de los Repuestos -->
                <div class="presupuesto-form-step" data-step="5">
                    <div class="presupuesto-step-header">
                        <h3 class="presupuesto-step-title">Datos de los Repuestos</h3>
                    </div>
                    <div class="presupuesto-form-grid">
                        <div class="presupuesto-form-group">
                            <label for="repuesto_accesorio" class="presupuesto-label">Repuesto o Accesorio</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="repuesto_accesorio" name="repuesto_accesorio" class="presupuesto-input" placeholder="Ejemplo: Quemador, Válvula">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="marca" class="presupuesto-label">Marca</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="marca" name="marca" class="presupuesto-input" placeholder="Ejemplo: Siemens">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="voltaje_disponible_repuesto" class="presupuesto-label">Voltaje Disponible</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="voltaje_disponible_repuesto" name="voltaje_disponible_repuesto" class="presupuesto-input" placeholder="Ejemplo: 220V">
                            </div>
                        </div>
                        <div class="presupuesto-form-group">
                            <label for="diametro_repuesto" class="presupuesto-label">Diámetro</label>
                            <div class="presupuesto-input-wrapper">
                                <input type="text" id="diametro_repuesto" name="diametro_repuesto" class="presupuesto-input" placeholder="Ejemplo: 2 pulgadas">
                            </div>
                        </div>
                        <div class="presupuesto-form-group presupuesto-full-width">
                            <label for="otros" class="presupuesto-label">Otros</label>
                            <div class="presupuesto-input-wrapper">
                                <textarea id="otros" name="otros" class="presupuesto-textarea" placeholder="Ejemplo: Detalles adicionales"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="presupuesto-form-buttons">
                        <button type="button" class="presupuesto-btn presupuesto-prev-btn">Anterior</button>
                        <button type="button" class="presupuesto-btn presupuesto-next-btn">Siguiente</button>
                    </div>
                </div>

                <!-- Paso 6: Comentarios -->
                <div class="presupuesto-form-step" data-step="6">
                    <div class="presupuesto-step-header">
                        <h3 class="presupuesto-step-title">Comentarios</h3>
                    </div>
                    <div class="presupuesto-form-grid">
                        <div class="presupuesto-form-group presupuesto-full-width">
                            <label for="comentarios" class="presupuesto-label">Comentarios</label>
                            <div class="presupuesto-input-wrapper">
                                <textarea id="comentarios" name="comentarios" class="presupuesto-textarea" placeholder="Ejemplo: Información adicional o requerimientos específicos"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="presupuesto-form-buttons">
                        <button type="button" class="presupuesto-btn presupuesto-prev-btn">Anterior</button>
                        <button type="submit" class="presupuesto-btn presupuesto-submit-btn">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    /* Variables de colores y estilos */
    :root {
        --presupuesto-primary: #ebbf46; /* Color principal */
        --presupuesto-primary-hover: #d4a93e; /* Color principal al pasar el mouse */
        --presupuesto-secondary: #f9d976; /* Color secundario */
        --presupuesto-text: #333; /* Color del texto */
        --presupuesto-light-gray: #f8f9fa; /* Fondo claro */
        --presupuesto-medium-gray: #e9ecef; /* Gris medio */
        --presupuesto-dark-gray: #6c757d; /* Gris oscuro */
        --presupuesto-success: #4CAF50; /* Verde para éxito */
        --presupuesto-border-radius: 12px; /* Bordes redondeados */
        --presupuesto-box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); /* Sombra */
        --presupuesto-transition: all 0.3s ease; /* Transición */
    }

    /* Estilos generales */
    .presupuesto-wrapper {
        margin: 2rem auto;
        padding: 0 1rem;
        font-family: 'Poppins', sans-serif;
        color: var(--presupuesto-text);
    }

    .presupuesto-header {
        text-align: center;
        margin-bottom: 2rem;
    }

    .presupuesto-title {
        color: var(--presupuesto-primary);
        font-weight: 700;
        font-size: 2.5rem;
        margin: 0;
    }

    .presupuesto-container {
        background-color: white;
        border-radius: var(--presupuesto-border-radius);
        box-shadow: var(--presupuesto-box-shadow);
        padding: 2rem;
        overflow: hidden;
    }

    /* Barra de progreso y pasos */
    .presupuesto-progress-wrapper {
        margin-bottom: 3rem;
    }

    .presupuesto-steps-list {
        display: flex;
        justify-content: space-between;
        margin: 0 0 1rem 0;
        padding: 0;
        list-style: none;
        position: relative;
    }

    @media (max-width: 768px) {
        .presupuesto-steps-list {
            overflow-x: auto;
            padding-bottom: 1rem;
        }
    }

    .presupuesto-step {
        flex: 1;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .presupuesto-step-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: var(--presupuesto-medium-gray);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 0.5rem;
        color: white;
        font-size: 1.5rem;
        transition: var(--presupuesto-transition);
        position: relative;
        z-index: 2;
    }

    .presupuesto-step.presupuesto-active .presupuesto-step-icon,
    .presupuesto-step.presupuesto-completed .presupuesto-step-icon {
        background-color: var(--presupuesto-primary);
        transform: scale(1.1);
    }

    .presupuesto-step-text {
        margin: 0.5rem 0 0;
        font-size: 0.9rem;
        color: var(--presupuesto-dark-gray);
        transition: var(--presupuesto-transition);
    }

    .presupuesto-step.presupuesto-active .presupuesto-step-text,
    .presupuesto-step.presupuesto-completed .presupuesto-step-text {
        color: var(--presupuesto-primary);
        font-weight: 600;
    }

    .presupuesto-progress-bar {
        height: 6px;
        background-color: var(--presupuesto-medium-gray);
        border-radius: 3px;
        position: relative;
        margin: 1rem 0 2rem;
    }

    .presupuesto-progress-indicator {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0%;
        background-color: var(--presupuesto-primary);
        border-radius: 3px;
        transition: width 0.5s ease;
    }

    /* Pasos del formulario */
    .presupuesto-form-step {
        display: none;
        animation: presupuestoFadeIn 0.5s ease forwards;
    }

    .presupuesto-form-step.presupuesto-active {
        display: block;
    }

    @keyframes presupuestoFadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .presupuesto-step-header {
        margin-bottom: 1.5rem;
    }

    .presupuesto-step-title {
        color: var(--presupuesto-primary);
        margin: 0 0 1.5rem 0;
        font-weight: 600;
        position: relative;
        display: inline-block;
    }

    .presupuesto-step-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        width: 50px;
        height: 4px;
        background-color: var(--presupuesto-secondary);
        border-radius: 2px;
    }

    /* Grid del formulario */
    .presupuesto-form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .presupuesto-form-group {
        margin-bottom: 1rem;
    }

    .presupuesto-full-width {
        grid-column: 1 / -1;
    }

    .presupuesto-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 500;
        color: var(--presupuesto-text);
    }

    .presupuesto-input-wrapper {
        position: relative;
    }

    .presupuesto-input,
    .presupuesto-textarea {
        width: 100%;
        padding: 0.75rem 1rem;
        border: 2px solid var(--presupuesto-medium-gray);
        border-radius: var(--presupuesto-border-radius);
        font-size: 1rem;
        transition: var(--presupuesto-transition);
        background-color: white;
    }

    .presupuesto-input:focus,
    .presupuesto-textarea:focus {
        outline: none;
        border-color: var(--presupuesto-primary);
        box-shadow: 0 0 0 3px rgba(235, 191, 70, 0.3);
    }

    .presupuesto-textarea {
        min-height: 120px;
        resize: vertical;
    }

    /* Botones */
    .presupuesto-form-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 2rem;
    }

    .presupuesto-btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: var(--presupuesto-border-radius);
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: var(--presupuesto-transition);
        position: relative;
        overflow: hidden;
    }

    .presupuesto-next-btn,
    .presupuesto-submit-btn {
        background-color: var(--presupuesto-primary);
        color: white;
    }

    .presupuesto-next-btn:hover,
    .presupuesto-submit-btn:hover {
        background-color: var(--presupuesto-primary-hover);
        transform: translateY(-2px);
    }

    .presupuesto-prev-btn {
        background-color: var(--presupuesto-medium-gray);
        color: var(--presupuesto-text);
    }

    .presupuesto-prev-btn:hover {
        background-color: var(--presupuesto-dark-gray);
        color: white;
    }

    .presupuesto-submit-btn {
        background-color: var(--presupuesto-success);
    }

    /* Ajustes responsivos */
    @media (max-width: 768px) {
        .presupuesto-form-grid {
            grid-template-columns: 1fr;
        }
        
        .presupuesto-form-buttons {
            flex-direction: column;
            gap: 1rem;
        }
        
        .presupuesto-btn {
            width: 100%;
        }
        
        .presupuesto-title {
            font-size: 2rem;
        }
        
        .presupuesto-container {
            padding: 1.5rem;
        }
        
        .presupuesto-step-icon {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
    }

    /* Animaciones */
    @keyframes presupuestoPulse {
        0% {
            box-shadow: 0 0 0 0 rgba(67, 97, 238, 0.4);
        }
        70% {
            box-shadow: 0 0 0 10px rgba(67, 97, 238, 0);
        }
        100% {
            box-shadow: 0 0 0 0 rgba(67, 97, 238, 0);
        }
    }

    .presupuesto-step.presupuesto-active .presupuesto-step-icon {
        animation: presupuestoPulse 2s infinite;
    }

    /* Animación de enfoque en inputs */
    .presupuesto-input:focus,
    .presupuesto-textarea:focus {
        animation: presupuestoBorderPulse 1.5s ease-out;
    }

    @keyframes presupuestoBorderPulse {
        0% {
            border-color: var(--presupuesto-primary);
            box-shadow: 0 0 0 0 rgba(67, 97, 238, 0.4);
        }
        50% {
            border-color: var(--presupuesto-primary);
            box-shadow: 0 0 0 4px rgba(67, 97, 238, 0.2);
        }
        100% {
            border-color: var(--presupuesto-primary);
            box-shadow: 0 0 0 0 rgba(67, 97, 238, 0);
        }
    }

    /* Efecto hover en botones */
    .presupuesto-btn::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 5px;
        height: 5px;
        background: rgba(255, 255, 255, 0.5);
        opacity: 0;
        border-radius: 100%;
        transform: scale(1, 1) translate(-50%);
        transform-origin: 50% 50%;
    }

    .presupuesto-btn:hover::after {
        animation: presupuestoRipple 1s ease-out;
    }

    @keyframes presupuestoRipple {
        0% {
            transform: scale(0, 0);
            opacity: 0.5;
        }
        100% {
            transform: scale(20, 20);
            opacity: 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const formSteps = document.querySelectorAll('.presupuesto-form-step');
        const progressSteps = document.querySelectorAll('.presupuesto-step');
        const progressIndicator = document.querySelector('.presupuesto-progress-indicator');
        const nextButtons = document.querySelectorAll('.presupuesto-next-btn');
        const prevButtons = document.querySelectorAll('.presupuesto-prev-btn');
        const totalSteps = formSteps.length;
        let currentStep = 0;

        // Inicializar indicador de progreso
        updateProgressIndicator();

        // Event listeners para botones de siguiente
        nextButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Aquí podrías agregar validación antes de continuar
                if (validateStep(currentStep)) {
                    goToNextStep();
                }
            });
        });

        // Event listeners para botones de anterior
        prevButtons.forEach(button => {
            button.addEventListener('click', () => {
                goToPrevStep();
            });
        });

        // Event listeners para los pasos de progreso (navegación directa)
        progressSteps.forEach((step, index) => {
            step.addEventListener('click', () => {
                // Solo permitir hacer clic en pasos completados o el siguiente paso disponible
                if (index <= currentStep + 1) {
                    goToStep(index);
                }
            });
        });

        // Función para validar el paso actual
        function validateStep(stepIndex) {
            // Agrega tu lógica de validación aquí
            // Por ahora, simplemente devolvemos true
            return true;
        }

        // Función para ir al siguiente paso
        function goToNextStep() {
            if (currentStep < totalSteps - 1) {
                goToStep(currentStep + 1);
            }
        }

        // Función para ir al paso anterior
        function goToPrevStep() {
            if (currentStep > 0) {
                goToStep(currentStep - 1);
            }
        }

        // Función para ir a un paso específico
        function goToStep(stepIndex) {
            // Ocultar paso actual
            formSteps[currentStep].classList.remove('presupuesto-active');
            
            // Mostrar nuevo paso
            formSteps[stepIndex].classList.add('presupuesto-active');
            
            // Actualizar pasos de progreso
            updateProgressSteps(stepIndex);
            
            // Actualizar paso actual
            currentStep = stepIndex;
            
            // Actualizar indicador de progreso
            updateProgressIndicator();
        }

        // Función para actualizar los pasos de progreso
        function updateProgressSteps(activeStep) {
            progressSteps.forEach((step, index) => {
                if (index < activeStep) {
                    // Pasos completados
                    step.classList.add('presupuesto-completed');
                    step.classList.remove('presupuesto-active');
                } else if (index === activeStep) {
                    // Paso actual
                    step.classList.add('presupuesto-active');
                    step.classList.remove('presupuesto-completed');
                } else {
                    // Pasos futuros
                    step.classList.remove('presupuesto-active', 'presupuesto-completed');
                }
            });
        }

        // Función para actualizar el indicador de progreso
        function updateProgressIndicator() {
            const progressPercentage = (currentStep / (totalSteps - 1)) * 100;
            progressIndicator.style.width = `${progressPercentage}%`;
        }

        // Efecto de etiqueta flotante
        const inputs = document.querySelectorAll('.presupuesto-input, .presupuesto-textarea');
        inputs.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('presupuesto-focused');
            });
            
            input.addEventListener('blur', () => {
                if (input.value === '') {
                    input.parentElement.classList.remove('presupuesto-focused');
                }
            });
            
            // Verificar si el input ya tiene valor al cargar la página
            if (input.value !== '') {
                input.parentElement.classList.add('presupuesto-focused');
            }
        });
    });
</script>

@endsection
