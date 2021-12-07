<x-app-layout title="Gerakan Seni">
    <div class="container-fluid mt-4">
        <h1 class="fs-2 text-center" style="color: #3c4043; font-weight: 400;">Gerakan Seni</h1>
        <section class="d-flex justify-content-center mt-5">
            <span class="border-bottom border-2 border-primary pb-2">
                <a class="text-decoration-none text-center" style="color: #3c4043; font-weight: 400;">Semua</a>
            </span>
        </section>
        <section class="entity-section d-flex flex-wrap justify-content-center mt-2">
            @php
                $count = 1;
            @endphp
            @foreach ($entities as $entity)
                <a href="{{ route('entity', $entity->id) }}" class="position-relative text-decoration-none m-1"
                    style="background-image: url('{{ $entity->image }}'); background-size: cover; width: 14.75rem; height: 14.75rem;"
                    data-aos="zoom-in" data-aos-once="true">
                    <span class="w-100 position-absolute bottom-0 start-0 text-white" style="padding: 12px;">
                        <div style="font-size: 14px; font-weight: 500;">{{ $entity->name }}</div>
                    </span>
                </a>
            @endforeach
        </section>
    </div>
</x-app-layout>
