<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(session('success'))
        <div class="alert alert-success mt-3">{{ session('success') }}</div>
    @endif
    <h1>Form medis</h1>
    

    <form  action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Pilih dokter:</label>
        <select name="dokter">
            <option value="">Pilih Dokter</option>
            @foreach ($dokters as $dokter)
                <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
            @endforeach
        </select>
        <br>

        <label>Pilih pasien:</label>
        <select name="pasien">
            <option value="">Pilih pasien</option>
            @foreach ($pasiens as $pasien)
                <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
            @endforeach
        </select>
        <br>

        <label>Isi kondisi</label><br>
        <textarea name="kondisi" cols="30" rows="10"></textarea>

        <br>
        <label>Masukkan suhu tubuh pasien:</label>
        <input type="number" name="suhu" step="0.1" min="35.0" max="45.5">

        <br>
        <label>Upload foto resep:</label>
        <input type="file" name="resep" accept=".jpg, .jpeg, .png, .pdf">

        <br>
        <button type="submit">Submit</button>

    </form>
</body>
</html>