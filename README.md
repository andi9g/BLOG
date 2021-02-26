<h1>Cara Pakai</h1>
1. Buka CMD lakukan cd ke directory keinginanmu
contoh : <font color="gold"><b>cd laravel/blog</b></font>

2. install file github diatas dengan cara ketikan :
<font color="gold"><b>git clone https://github.com/andi9g/BLOG.git</b></font>

3. Jika telah terclone, masuk ke directory file tersebut. dengan mengetikan
<font color="gold"><b>cd BLOG</b></font>

4. setelah masuk ke dalam directory BLOG selanjutnya ketikan
<font color="gold"><b>composer install</b></font>

5. setelah selesai melakukan composer install, buat salinan file .env dengan mengetikan :
<font color="gold"><b>cp .env.example</b> </font>

6. lakukan generate key dengan mengetikan :
<font color="gold"><b>php artisan key:generate</b></font>

7. setelah itu, masukan folder BLOG tersebut kedalam project Visual Studio code/ text editor lainnya

8. edit file <font color="red"><b>.env</b></red>, masukan nama database anda, sebaiknya di kosongkan terlebih dahulu isi databasenya

9. ketikan : <font color="gold"> <b>php artisan migrate</b> </font>

10. lakukan <font color="gold"><b>php artisan serve</b> </font>

lalu coba tes di browser


