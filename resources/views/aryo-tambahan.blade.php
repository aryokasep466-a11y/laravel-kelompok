<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tugas Baru</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; display: flex; flex-direction: column; align-items: center; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 500px; }
        h2 { color: #2c3e50; margin-top: 0; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; color: #555; }
        input, select { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .btn-submit { background-color: #3498db; color: white; border: none; padding: 12px; width: 100%; border-radius: 4px; font-weight: bold; cursor: pointer; font-size: 1rem; }
        .btn-back { display: block; text-align: center; margin-top: 15px; color: #7f8c8d; text-decoration: none; }
    </style>
</head>
<body>

    <div class="card">
        <h2>➕ Tambah Tugas Kuliah Baru</h2>
        <form>
            <div class="form-group">
                <label>Mata Kuliah</label>
                <input type="text" placeholder="Contoh: Pemrograman Web">
            </div>
            <div class="form-group">
                <label>Nama Tugas</label>
                <input type="text" placeholder="Contoh: Membuat Form Input">
            </div>
            <div class="form-group">
                <label>Tanggal Deadline</label>
                <input type="date">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select>
                    <option>Belum Selesai</option>
                    <option>Sedang Dikerjakan</option>
                    <option>Selesai</option>
                </select>
            </div>
            <button type="button" class="btn-submit" onclick="alert('Fitur simpan ke database akan aktif di materi selanjutnya!')">Simpan Tugas</button>
        </form>
        
        <a href="{{ route('tugas.index') }}" class="btn-back">⬅️ Kembali ke Daftar Tugas</a>
    </div>

</body>
</html>