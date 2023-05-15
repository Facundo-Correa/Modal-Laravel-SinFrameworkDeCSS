<div id="mi-modal" class="modal">
    <div class="modal-contenido">
        <!-- Contenido del modal -->
        <h2>Título del modal</h2>
        <p>Contenido del modal aquí...</p>
        
        <!-- Botón para cerrar el modal -->
        <form action="{{ route('cerrar-modal') }}" method="POST">
            @csrf
            <button type="submit">Cerrar</button>
        </form>
    </div>
</div>

<style>
.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.modal-contenido {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    max-width: 500px;
}

.modal-contenido button {
    margin-top: 10px;
}
</style>