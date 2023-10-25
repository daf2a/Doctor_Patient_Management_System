<x-app-layout>
    <x-slot name="title">
        Dashboard
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                Sebuah rumah sakit memerlukan sistem pencatatan rekam medis pasien dengan ketentuan sbb:</br>
                </br>
                (5%) Buat project Laravel baru</br>
                (5%) Pengguna harus login agar dapat mengakses riwayat rekam medis pasien</br>
                (30%) Ada halaman melihat semua rekam medis, riwayat rekam medis per pasien, dan halaman rekam medis per dokter</br>
                </br>
                (35%) Tersedia formulir rekam medis dengan field:</br>
                - dropdown pasien (ambil dari database),</br>
                - dropdown dokter (ambil dari database),</br>
                - field kondisi kesehatan (teks),</br>
                - suhu tubuh (35 C - 45.5 C)</br>
                - mengunggah file/gambar resep (pdf/png/jpg/jpeg)</br>
                Form rekam medis tidak wajib disimpan di database (nilai +10% jika bisa menyimpan di DB)</br>
                Sistem dapat memberikan flash message berhasil jika form berhasil diinputkan sesuai ketentuan (meskipun tidak tersimpan di DB).</br>
                </br>
                (15%) Siapkan data pasien dan dokter di seeder (manual), sedangkan rekam medis di factories (generate dengan faker)</br>
                </br>
                Ketentuan ETS:</br>
                - Individu</br>
                - Open Reference namun tidak boleh bertanya di forum/ orang lain</br>
                - Durasi 2.5 jam (13.00-15.30)</br>
                - Kirim Screenshot hasil (per halaman) (zip) dan link github (public)</br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
