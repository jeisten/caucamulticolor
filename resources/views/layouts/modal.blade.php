<!-- resources/views/components/modal.blade.php -->
<style>
    dialog::backdrop {
        background: rgba(0, 0, 0, 0.6); /* Fondo oscuro */
    }
</style>

<dialog id="popyanModal" class="rounded-lg shadow-xl p-6 w-full max-w-lg bg-white z-50 backdrop:bg-black/60">
    <div class="flex flex-col items-center space-y-4">
        <h2 class="text-xl font-bold text-yellow-600 text-center">¡Estamos en el apogeo de la papa con salchichón popyán!</h2>
        <img src="https://4.bp.blogspot.com/-S2CNESTKSRg/Ut0UPshFxFI/AAAAAAAANY4/DjnzZoiVv1E/s1600/huevos_rotos_2.JPG" alt="Papa con salchichón" class="w-full rounded-md object-cover">
        <button onclick="document.getElementById('popyanModal').close()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Cerrar</button>
    </div>
</dialog>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('popyanModal');
        const modalKey = 'popyanModalLastSeen';
        const hoursToWait = 24; // Cambia esto si quieres otro tiempo
        const lastSeen = localStorage.getItem(modalKey);
        let showModal = true;
        if (lastSeen) {
            const lastDate = new Date(parseInt(lastSeen, 10));
            const now = new Date();
            const diffHours = (now - lastDate) / (1000 * 60 * 60);
            if (diffHours < hoursToWait) {
                showModal = false;
            }
        }
        if (modal && showModal) {
            modal.showModal();
            modal.addEventListener('click', (event) => {
                if (event.target === modal) {
                    modal.close();
                }
            });
            // Guardar en localStorage al cerrar
            modal.addEventListener('close', () => {
                localStorage.setItem(modalKey, Date.now().toString());
            });
            // También guardar si se cierra con el botón
            const closeBtn = modal.querySelector('button');
            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    localStorage.setItem(modalKey, Date.now().toString());
                });
            }
        }
    });
</script>
