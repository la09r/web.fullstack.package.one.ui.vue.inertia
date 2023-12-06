#!/usr/bin/bash
# exec into Homestead

composer require la09r/web-fullstack-package-one-ui-vue-inertia
# composer remove la09r/web-fullstack-package-one-ui-vue-inertia

php artisan migrate --path ".local/module/package-one/src/database/migrations"

cp -R ./.local/module/package-one/src/app/Console/Commands ./app/Console
php artisan app:publish-package-one
rm -rf ./app/Console/Commands/PublishPackageOne.php

