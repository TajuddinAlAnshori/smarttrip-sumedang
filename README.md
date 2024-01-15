## Smart Trip Sumedang 


Pertama user membuat form, form otomatis akan berstatus PENDING. Lalu admin bisa menyetujui atau menolak permintaan booking user. Admin juga bisa membatalkan penyetujuan maupun penolakan booking. 

Form booking dibuat untuk booking 1 hari. 

Ada 7 status booking, di antaranya PENDING, DISETUJUI, DIGUNAKAN, DITOLAK, BATAL, SELESAI, dan EXPIRED.

### Penjelasan Status Booking
Berikut ini ialah penjelasan status booking yang dibuat oleh User. Otomatisasi perubahan status booking dilakukan dengan Laravel Scheduler.

1. PENDING. Ketika User baru mengajukan permintaan booking.
2. DISETUJUI. Ketika Admin menyetujui permintaan booking User. Aksi ini bisa dibatalkan dengan mengklik Batalkan di data booking User
3. DIGUNAKAN. Ketika User tengah menggunakan ruangan, dilihat berdasarkan tanggal, waktu mulai dan waktu selesai booking User.
4. DITOLAK. Ketika Admin menolak permintaan booking User. Aksi ini bisa dibatalkan dengan mengklik Setujui di data booking User.
5. BATAL. Ketika User membatalkan permintaan booking. Aksi ini tidak bisa dibatalkan
6. SELESAI. Ketika waktu booking selesai, dilihat berdasarkan tanggal, waktu mulai dan waktu selesai booking User.
7. EXPIRED. Ketika permintaan booking User dibiarkan PENDING sampai melewati waktu mulai booking.

Note: ROOMING menggunakan waktu Jakarta / Waktu Indonesia Barat. Jika ingin mengganti waktu yang digunakan, ganti nilai `APP_TIMEZONE` di .env
