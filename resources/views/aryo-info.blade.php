<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Tambahan Tugas</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; display: flex; flex-direction: column; align-items: center; }
        .container { width: 100%; max-width: 600px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; }
        .info-box { background-color: #e8f4f8; padding: 15px; border-left: 5px solid #3498db; margin-bottom: 15px; border-radius: 4px; }
        .btn-back { display: inline-block; margin-top: 20px; color: #3498db; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>

    <div class="container">
        <h2>ℹ️ Informasi & Statistik Tugas</h2>
        <p>Halaman ini berisi info rangkuman tugas kuliah Aryo saat ini:</p>
        
        <div class="info-box">
            <strong>Total Tugas Terdaftar:</strong> {{ count($daftarTugas) }} Tugas
        </div>

        <div class="info-box" style="background-color: #fdf6e2; border-left-color: #f1c40f;">
            <strong>Tips Manajemen Waktu:</strong> Selalu kerjakan tugas kuliah yang memiliki sisa waktu paling sedikit (paling mendekati deadline) terlebih dahulu!
        </div>

        <a href="{{ route('tugas.index') }}" class="btn-back">⬅️ Kembali ke Halaman Utama</a>
    </div>

</body>
</html>