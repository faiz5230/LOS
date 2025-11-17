# Struktur Direktori Dokumen Export per Jenis Kredit

## Struktur Folder

```
debiturs/
├── modal_kerja/          # Dokumen untuk Modal Kerja
├── pensiun/              # Dokumen untuk Pensiun
├── pasar/                # Dokumen untuk Pasar
├── umkm/                 # Dokumen untuk UMKM
└── [file export lama]    # File default (backward compatibility)
```

## Daftar Dokumen (Semua Jenis Kredit)

Setiap folder jenis kredit berisi **12 dokumen yang sama**:

1. ✅ data_calon_debitur_export.blade.php
2. ✅ analisa_kredit_export.blade.php
3. ✅ memo_kredit_export.blade.php
4. ✅ sppk_export.blade.php
5. ✅ sttu_export.blade.php
6. ✅ tanda_terima_export.blade.php
7. ✅ analisa_yuridis_export.blade.php
8. ✅ pk_kredit_pasangan_export.blade.php
9. ✅ pk_kredit_sendiri_export.blade.php
10. ✅ pk_kredit_non_mou_pasangan_export.blade.php
11. ✅ pk_kredit_non_mou_sendiri_export.blade.php
12. ✅ pk_kredit_reguler_export.blade.php

## Cara Kerja

### Automatic View Selection
Sistem otomatis memilih template berdasarkan jenis_kredit:

- **Modal Kerja** → `debiturs/modal_kerja/[nama_dokumen].blade.php`
- **Pensiun** → `debiturs/pensiun/[nama_dokumen].blade.php`
- **Pasar** → `debiturs/pasar/[nama_dokumen].blade.php`
- **UMKM** → `debiturs/umkm/[nama_dokumen].blade.php`

### Fallback Mechanism
Jika file tidak ditemukan di folder jenis_kredit, sistem akan fallback ke:
- `debiturs/[nama_dokumen].blade.php`

## Customisasi per Jenis Kredit

Setiap jenis kredit dapat memiliki format dokumen yang berbeda:

### Contoh: Customize "Data Calon Debitur" untuk Modal Kerja
1. Edit file: `modal_kerja/data_calon_debitur_export.blade.php`
2. Ubah format, field, atau layout sesuai kebutuhan
3. Save - perubahan hanya berlaku untuk Modal Kerja
4. Jenis kredit lain tetap menggunakan template di folder masing-masing

### Contoh: Customize "PK Kredit Pasangan" untuk Pensiun
1. Edit file: `pensiun/pk_kredit_pasangan_export.blade.php`
2. Sesuaikan dengan requirement Pensiun
3. Modal Kerja, Pasar, UMKM tidak terpengaruh

## Keuntungan Struktur Ini

✅ **Flexibility**: Setiap jenis kredit bisa punya format berbeda untuk dokumen yang sama
✅ **Independence**: Perubahan di satu jenis kredit tidak affect yang lain
✅ **Consistency**: Semua dokumen tersedia untuk semua jenis kredit
✅ **Maintainability**: Mudah track perubahan per jenis kredit
✅ **Scalability**: Mudah menambah jenis kredit baru

## Mapping Jenis Kredit

| Jenis Kredit | Folder       | Jumlah Dokumen |
|--------------|--------------|----------------|
| Modal Kerja  | modal_kerja  | 12 dokumen     |
| Pensiun      | pensiun      | 12 dokumen     |
| Pasar        | pasar        | 12 dokumen     |
| UMKM         | umkm         | 12 dokumen     |

## Testing

### Cara Test:
1. Buat simulation dengan jenis_kredit tertentu
2. Buat debitur dari simulation tersebut
3. Buka halaman show debitur
4. Download semua dokumen
5. Verify menggunakan template dari folder jenis_kredit yang sesuai

### Checklist Test:
- [ ] Modal Kerja - semua 12 dokumen
- [ ] Pensiun - semua 12 dokumen
- [ ] Pasar - semua 12 dokumen
- [ ] UMKM - semua 12 dokumen

