<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tugas Aryo</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f4f7f6; padding: 40px; display: flex; flex-direction: column; align-items: center; }
        h1 { color: #2c3e50; }
        .btn { display: inline-block; padding: 10px 20px; background-color: #3498db; color: white; text-decoration: none; border-radius: 5px; font-weight: bold; margin-bottom: 20px; }
        .btn-info { background-color: #2ecc71; margin-left: 10px; }
        table { width: 100%; max-width: 900px; border-collapse: collapse; background: white; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-radius: 8px; overflow: hidden; }
        th, td { padding: 14px 18px; text-align: left; }
        th { background-color: #3498db; color: white; }
        td { border-bottom: 1px solid #eef2f5; }
        .badge { padding: 6px 12px; border-radius: 20px; font-size: 0.85rem; font-weight: bold; }
        .bg-success { background-color: #d4edda; color: #155724; }
        .bg-warning { background-color: #fff3cd; color: #856404; }
        .bg-danger { background-color: #f8d7da; color: #721c24; }
    </style>
</head>
<body>

    <h1>Daftar Utama Tugas Kuliah</h1>
    
    <div>
        <a href="{{ route('tugas.create') }}" class="btn">➕ Tambah Tugas Baru</a>
        <a href="{{ route('tugas.info') }}" class="btn btn-info">ℹ️ Info Detail Tugas</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>Tugas</th>
                <th>Deadline</th>
                <th>Status Kerja</th>
                <th>Keterangan Waktu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($daftarTugas as $tugas)
                <tr>
                    <td style="font-weight: bold;">{{ $tugas['matkul'] }}</td>
                    <td>{{ $tugas['tugas'] }}</td>
                    <td>{{ \Carbon\Carbon::parse($tugas['deadline'])->translatedFormat('d F Y') }}</td>
                    <td><span class="badge {{ $tugas['status'] == 'Selesai' ? 'bg-success' : ($tugas['status'] == 'Sedang Dikerjakan' ? 'bg-warning' : 'bg-danger') }}">{{ $tugas['status'] }}</span></td>
                    <td>
                        @php $deadlineReal = \Carbon\Carbon::parse($tugas['deadline']); @endphp
                        @if($tugas['status'] == 'Selesai')
                            <span class="badge bg-success">Selesai</span>
                        @elseif($hariIni->greaterThan($deadlineReal))
                            <span class="badge bg-danger">⚠️ TERLAMBAT!</span>
                        @else
                            <span class="badge bg-warning">Sisa {{ $hariIni->diffInDays($deadlineReal) }} hari lagi</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>