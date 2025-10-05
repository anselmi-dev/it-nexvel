<!-- Scroll to Top Button -->
<button id="scrollToTopBtn"
    class="fixed bottom-8 right-8 z-50 bg-app text-white p-3 rounded-full shadow-lg hover:bg-sky-600 transition-all duration-300 opacity-0 invisible transform translate-y-4 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-app focus:ring-offset-2"
    aria-label="Volver arriba" title="Volver arriba">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
    </svg>
</button>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollToTopBtn = document.getElementById('scrollToTopBtn');

            // Mostrar/ocultar el botón basado en la posición del scroll
            showScrollToTopBtn();

            window.addEventListener('scroll', function() {
                showScrollToTopBtn();
            });

            // Función para hacer scroll suave hacia arriba
            scrollToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

        });

        function showScrollToTopBtn() {
            if (window.pageYOffset > 300) {
                    scrollToTopBtn.classList.remove('opacity-0', 'invisible', 'translate-y-4');
                    scrollToTopBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                scrollToTopBtn.classList.add('opacity-0', 'invisible', 'translate-y-4');
                scrollToTopBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        }
    </script>
@endpush
