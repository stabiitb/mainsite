php artisan serve --port=8088 >log 2>&1 &
echo '' > log
xdg-open http://localhost:8088 &
