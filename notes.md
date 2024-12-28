Im Container symfony-php ist composer installiert. Mit dem Befehl `composer install` werden die Abhängigkeiten installiert.

Für quick_tour habe ich folgendes ausgeführt:

```bash
composer create-project symfony/skeleton quick_tour
```

Auch die nginx-Konfiguration muss angepasst werden, root ist auf /var/www/html/public zu setzen.

Dann ist die Symphonie-Startseite unter http://localhost erreichbar.

Siehe https://symfony.com/doc/current/quick_tour/the_big_picture.html
