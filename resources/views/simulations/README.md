# Form Simulasi Kredit - Professional Layout

## ✨ Fitur Layout Baru

### 1. **Modern Card-Based Design**
- Menggunakan card sections dengan gradient header
- Shadow effects untuk depth
- Clean spacing dan alignment

### 2. **Organized Sections**
Form dibagi menjadi 4 section utama:

#### Left Column:
- **Data Pemohon** (User icon)
  - Tanggal Realisasi
  - Jenis Kredit
  - Nama Lengkap
  - Tanggal Lahir & Usia (auto-calculate)
  - Besaran Gaji
  - DSR & Maksimal Angsuran (auto-calculate)

- **Data Kredit** (Money icon)
  - Plafond
  - Jangka Waktu
  - Bunga Flat & Efektif
  - Angsuran & Sisa Gaji

#### Right Column:
- **Biaya-Biaya** (File List icon)
  - Biaya Provisi
  - Biaya Notaris
  - Biaya Administrasi
  - Biaya Asuransi
  - Biaya Materai
  - Retensi
  - Tabungan Wajib
  - Rate Asuransi
  - Ass KRD
  - Bunga, Denda, Pinalty

- **Total Diterima** (Wallet icon)
  - Total Diterima Debitur (large display)

### 3. **Enhanced UX Features**
- ✅ Currency formatting dengan Cleave.js
- ✅ Auto-calculate usia dari tanggal lahir
- ✅ Auto-calculate maksimal angsuran (Gaji × DSR%)
- ✅ Select2 untuk dropdown jangka waktu
- ✅ Input group dengan prefix "Rp" dan suffix "%"
- ✅ Validation feedback yang jelas
- ✅ Readonly fields untuk calculated values

### 4. **Visual Improvements**
- Gradient header untuk setiap section
- Icon untuk setiap section
- Consistent spacing (mb-3)
- Large display untuk Total Diterima
- Professional color scheme
- Responsive layout (col-lg-6)

### 5. **Action Buttons**
- Kembali (Secondary) - kiri
- Simpan/Update (Primary) - kanan
- Dengan icon untuk clarity

## 🎨 Color Scheme

- **Primary**: #667eea → #764ba2 (Gradient)
- **Success**: Bootstrap default
- **Secondary**: Bootstrap default
- **Danger**: #dc3545 (Required mark)

## 📱 Responsive Design

- Desktop (≥992px): 2 columns
- Tablet (<992px): 1 column (stacked)
- Mobile: Full width dengan proper spacing

## 🔧 Dependencies

- Bootstrap 5
- Select2
- Cleave.js (currency formatting)
- Remix Icon (icons)

## 📝 Files

- `create.blade.php` - Form tambah simulasi baru
- `edit.blade.php` - Form edit simulasi existing

## 🚀 Usage

### Create Mode:
```php
Route::get('/simulations/create', [SimulationController::class, 'create'])
    ->name('simulations.create');
```

### Edit Mode:
```php
Route::get('/simulations/{id}/edit', [SimulationController::class, 'edit'])
    ->name('simulations.edit');
```

## ✅ Validation

Semua field required ditandai dengan `<span class="required-mark">*</span>` berwarna merah.

Bootstrap validation classes:
- `.is-invalid` untuk error state
- `.invalid-feedback` untuk error message

## 🎯 Auto-Calculations

1. **Usia**: Otomatis dari tanggal lahir
2. **Maksimal Angsuran**: Besaran Gaji × DSR%
3. **Bunga Efektif**: (akan dihitung di backend)
4. **Angsuran**: (akan dihitung di backend)
5. **Sisa Gaji**: Gaji - Angsuran
6. **Total Diterima**: Plafond - semua biaya
