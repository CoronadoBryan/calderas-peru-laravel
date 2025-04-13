#!/bin/bash

# Inicia el servidor Laravel en segundo plano
php artisan serve --host=0.0.0.0 --port=8000 &

# Inicia Vite en segundo plano
npm run dev &

# Mantiene el contenedor vivo
wait -n
