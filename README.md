<h1>Cara Pakai</h1>
1. Buka CMD lakukan cd ke directory keinginanmu
contoh : <font color="gold">cd laravel/blog</font>

2. install file github diatas dengan cara ketikan :
<font color="gold">git clone https://github.com/andi9g/BLOG.git</font>

3. Jika telah terclone, masuk ke directory file tersebut. dengan mengetikan
<font color="gold">cd BLOG</font>

4. setelah masuk ke dalam directory BLOG selanjutnya ketikan
<font color="gold">composer install</font>

5. setelah selesai melakukan composer install, buat salinan file .env dengan mengetikan :
<font color="gold">cp .env.example </font>

6. lakukan generate key dengan mengetikan :
<font color="gold">php artisan key:generate</font>

7. setelah itu, masukan folder BLOG tersebut kedalam project Visual Studio code/ text editor lainnya

8. edit file <font color="red">.env</red>, masukan nama database anda, sebaiknya di kosongkan terlebih dahulu isi databasenya

9. ketikan : <font color="gold"> php artisan migrate </font>

10. lakukan <font color="gold">php artisan serve </font>

lalu coba tes di browser


