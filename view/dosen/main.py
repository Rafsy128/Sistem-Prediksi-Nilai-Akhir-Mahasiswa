import pandas as pd

# Variabel-variabel yang telah Anda berikan sebelumnya
nilai_akhir_matkul = [75, 80, 65, 90, 70]
jumlah_matkul = [5, 6, 4, 7, 5]
rata_rata_nilai_matkul = [77, 82, 68, 88, 72]
indeks_prestasi = [3.5, 3.8, 3.2, 3.9, 3.4]
ipk_mahasiswa = [3.6, 3.7, 3.5, 3.9, 3.6]
matkul_terlambat = [1, 0, 2, 0, 1]
matkul_tidak_lulus = [0, 1, 0, 1, 0]
matkul_tidak_diambil = [0, 0, 2, 0, 1]
jenis_program_studi = ['Teknik', 'Ilmu Komputer', 'Matematika', 'Teknik', 'Matematika']
status_mahasiswa = ['Aktif', 'Tidak Aktif', 'Aktif', 'Aktif', 'Tidak Aktif']
jenis_beasiswa = ['Tidak Ada', 'Beasiswa A', 'Tidak Ada', 'Beasiswa B', 'Tidak Ada']
penghasilan_orang_tua = [5000, 6000, 5500, 7000, 4800]
pendidikan_orang_tua = ['Sarjana', 'Diploma', 'Sarjana', 'Sarjana', 'Diploma']
kemampuan_matkul = [8, 7, 9, 7, 8]

# Membuat DataFrame dari variabel-variabel di atas
data = {
    'Nilai_Akhir_Matkul': nilai_akhir_matkul,
    'Jumlah_Matkul': jumlah_matkul,
    'Rata_Rata_Nilai_Matkul': rata_rata_nilai_matkul,
    'Indeks_Prestasi': indeks_prestasi,
    'IPK_Mahasiswa': ipk_mahasiswa,
    'Matkul_Terlambat': matkul_terlambat,
    'Matkul_Tidak_Lulus': matkul_tidak_lulus,
    'Matkul_Tidak_Diambil': matkul_tidak_diambil,
    'Jenis_Program_Studi': jenis_program_studi,
    'Status_Mahasiswa': status_mahasiswa,
    'Jenis_Beasiswa': jenis_beasiswa,
    'Penghasilan_Orang_Tua': penghasilan_orang_tua,
    'Pendidikan_Orang_Tua': pendidikan_orang_tua,
    'Kemampuan_Matkul': kemampuan_matkul
}

# Membuat DataFrame dari data yang telah disiapkan
df = pd.DataFrame(data)

# Menampilkan DataFrame
print(df)
