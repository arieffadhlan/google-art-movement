<x-dashboard-layout title="Gerakan Seni">
    <section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center form-bg-image">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="bg-white shadow border-0 rounded p-4 p-lg-5 w-100 fmxw-500">
                        <h1 class="h3 mb-4">Tambah Data Artist</h1>
                        <form action="{{ route('artist.store') }}" method="POST">
                            <!-- Form -->
                            @csrf
                            <div class="mb-4">
                                <label for="name">Nama</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="nama partner" name="name" id="name" required>
                                </div>  
                            </div>

                            <div class="form-group mb-4">
                                <label for="textarea">Detail</label>
                                <textarea class="form-control" placeholder="detail..." id="detail" name="detail" rows="4"></textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="riwayat">Riwayat</label>
                                <input type="text" placeholder="riwayat" class="form-control" name="riwayat" id="riwayat" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-gray-800">Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </section>
</x-dashboard-layout>