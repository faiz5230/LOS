# Implementasi Dynamic Document Export per Jenis Kredit

## ✅ Yang Sudah Diimplementasikan

### 1. Struktur Folder
Dibuat folder untuk setiap jenis kredit di `resources/views/debiturs/`:
- `modal_kerja/` - untuk Modal Kerja
- `pensiun/` - untuk Pensiun  
- `pasar/` - untuk Pasar
- `umkm/` - untuk UMKM

### 2. Trait HasDynamicViewPath
Lokasi: `app/Exports/Traits/HasDynamicViewPath.php`

Trait ini menyediakan method `getViewPath()` yang:
- Mengambil jenis_kredit dari simulation
- Convert jenis_kredit ke format folder (lowercase, spasi jadi underscore)
- Cek apakah view exists di folder jenis_kredit
- Fallback ke view default jika tidak ada

```php
protected function getViewPath($debitur, $fileName)
{
    if ($debitur->simulation && $debitur->simulation->jenis_kredit) {
        $folder = strtolower(str_replace(' ', '_', $debitur->simulation->jenis_kredit));
        $viewPath = "debiturs.{$folder}.{$fileName}";
        
        if (view()->exists($viewPath)) {
            return $viewPath;
        }
    }
    
    return "debiturs.{$fileName}";
}
```

### 3. Export Classes yang Sudah Diupdate

✅ **Berhasil diupdate:**
- DataCalonDebitur.php
- AnalisaKredit.php
- AnalisaYuridis.php
- MemoKredit.php
- Sppk.php
- Sttu.php
- TandaTerima.php
- PerjanjianKreditPasangan.php
- PerjanjianKreditSendiri.php
- PerjanjianKreditReguler.php

⚠️ **Belum ada file (perlu dibuat):**
- PerjanjianKreditNonMouPasangan.php
- PerjanjianKreditNonMouSendiri.php

### 4. View Blade yang Sudah Diupdate
File: `resources/views/debiturs/show.blade.php`

Tombol download sekarang dikelompokkan berdasarkan:
- **Dokumen Umum** (untuk semua jenis kredit)
- **Dokumen [Jenis Kredit]** (spesifik per jenis kredit)

## 📋 Cara Kerja

### Flow Eksekusi:
1. User klik tombol download di `show.blade.php`
2. Route memanggil method di `MasterDebiturController`
3. Controller memanggil Export class (misal: `DataCalonDebitur`)
4. Export class:
   - Load data debitur dengan simulation
   - Panggil `getViewPath()` untuk dapat view path yang sesuai
   - Jika jenis_kredit = "Modal Kerja" → view: `debiturs.modal_kerja.data_calon_debitur_export`
   - Jika jenis_kredit = "Pensiun" → view: `debiturs.pensiun.data_calon_debitur_export`
   - Jika view tidak ada → fallback ke `debiturs.data_calon_debitur_export`
5. Generate Excel dari view yang dipilih

### Mapping Jenis Kredit ke Folder:
| Jenis Kredit | Folder       |
|--------------|--------------|
| Modal Kerja  | modal_kerja  |
| Pensiun      | pensiun      |
| Pasar        | pasar        |
| UMKM         | umkm         |

## 🎯 Cara Customize Dokumen

### Untuk customize dokumen tertentu untuk jenis kredit tertentu:

1. Buka folder jenis kredit, misal: `resources/views/debiturs/modal_kerja/`
2. Edit file yang ingin dicustomize, misal: `data_calon_debitur_export.blade.php`
3. Ubah sesuai kebutuhan (format, field, perhitungan, dll)
4. Save - perubahan akan otomatis digunakan untuk jenis kredit tersebut

### Contoh:
Jika ingin format "Data Calon Debitur" berbeda untuk Modal Kerja:
- Edit: `resources/views/debiturs/modal_kerja/data_calon_debitur_export.blade.php`
- Jenis kredit lain tetap menggunakan file di folder masing-masing

## 🔧 Testing

### Test Manual:
1. Buat simulation dengan jenis_kredit = "Modal Kerja"
2. Buat debitur dari simulation tersebut
3. Buka halaman show debitur
4. Download dokumen
5. Verify dokumen menggunakan template dari folder `modal_kerja/`

### Test untuk setiap jenis kredit:
- ✅ Modal Kerja
- ✅ Pensiun
- ✅ Pasar
- ✅ UMKM

## 📝 TODO / Next Steps

1. ⚠️ Buat Export classes untuk NonMou:
   - `PerjanjianKreditNonMouPasangan.php`
   - `PerjanjianKreditNonMouSendiri.php`

2. ✅ Test semua dokumen untuk setiap jenis kredit

3. 📄 Customize template sesuai kebutuhan bisnis per jenis kredit

## 🐛 Troubleshooting

### Dokumen masih menggunakan template lama?
- Cek apakah file ada di folder jenis_kredit
- Cek nama file harus sama persis dengan yang di folder default
- Clear cache Laravel: `php artisan view:clear`

### Error "View not found"?
- Pastikan file ada di folder jenis_kredit
- Atau biarkan fallback ke default (file di folder `debiturs/`)

### Jenis kredit tidak terdeteksi?
- Pastikan debitur memiliki relasi ke simulation
- Pastikan simulation memiliki field jenis_kredit terisi

## 📚 File Structure

```
app/
├── Exports/
│   ├── Traits/
│   │   └── HasDynamicViewPath.php  ← Trait untuk dynamic view
│   ├── DataCalonDebitur.php        ← Updated
│   ├── AnalisaKredit.php           ← Updated
│   ├── AnalisaYuridis.php          ← Updated
│   └── ... (semua export classes)
│
resources/views/debiturs/
├── modal_kerja/                     ← Folder Modal Kerja
│   ├── data_calon_debitur_export.blade.php
│   ├── analisa_kredit_export.blade.php
│   └── ... (9 files)
├── pensiun/                         ← Folder Pensiun
│   └── ... (9 files)
├── pasar/                           ← Folder Pasar
│   └── ... (8 files)
├── umkm/                            ← Folder UMKM
│   └── ... (8 files)
├── show.blade.php                   ← Updated dengan conditional buttons
└── ... (default export files)
```

## ✨ Benefits

1. **Flexibility**: Setiap jenis kredit bisa punya format dokumen sendiri
2. **Maintainability**: Perubahan di satu jenis kredit tidak affect yang lain
3. **Scalability**: Mudah menambah jenis kredit baru
4. **Backward Compatible**: Jika view tidak ada, fallback ke default
5. **Clean Code**: Menggunakan trait untuk avoid code duplication
