# vologda-textile.ru

Проект сделан на редакции "Малый бизнес"

## Пример скрипта деплоя

````
#!/bin/bash
cd $1frontend
npm run build
rsync -rlzvc -i --delete $1www/local/ $2local/

# запуск bash deploy.sh /home/ilyushka/Документы/vologda-textile.ru/ votex:/var/www/u2879916/data/www/vologda-textile.ru/
# $1 /home/ilyushka/Документы/vologda-textile.ru/
# $2 votex:/var/www/u2879916/data/www/vologda-textile.ru/
````