<x-app-layout title="Gerakan Seni">
    <div class="container-fluid mt-4">
        <h1 class="fs-2 text-center" style="color: #3c4043; font-weight: 400;">Gerakan Seni</h1>
        <section class="d-flex justify-content-center mt-5">
            <span class="border-bottom border-2 border-primary pb-2">
                <a class="text-decoration-none text-center" style="color: #3c4043; font-weight: 500;">Semua</a>
            </span>
        </section>
        <section class="entity d-flex flex-wrap justify-content-center mt-2">
            @for ($i = 0; $i < 10; $i++)
                <a href="#" class="position-relative m-1 text-decoration-none"
                    style="background-image: url('{{ asset('images/banana.jpg') }}'); background-size: cover; width: 14.75rem; height: 14.75rem;">
                    <span class="w-100 position-absolute bottom-0 start-0 text-white" style="padding: 12px;">
                        <div style="font-size: 14px; font-weight: 500;">Seni Kontemporer</div>
                        <div style="font-size: 12px; font-weight: 400;">9.130 item</div>
                    </span>
                </a>
            @endfor
        </section>
    </div>
</x-app-layout>
