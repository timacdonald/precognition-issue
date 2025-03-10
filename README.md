## Hello Tim

1. `composer install`
2. `npm i && npm run build`

If you fill out the form on the homepage quickly and hit submit before the last validation kicks in you'll see the `ERR_CANCELED` thrown. It might help to turn on Throttling in your Dev Tools Network Tab.

If you remove the listener: `App/Listeners/FormListener.php` this error won't occur and you can submit before any running validation request returns.

Should you need to log into the CP you can visit http://precognition.test/cp/ and login with `info@studio1902.nl` and `adminadmin`. 

Thank you,

Rob

PS: You can use the following .env for convenience:

```
APP_NAME=Statamic
APP_ENV=local
APP_KEY=base64:IZH3zkN1J3dGZ/6WaIhIZ54VXD6f7Enn3QgD3+vOLsI=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://precognition.test

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
APP_MAINTENANCE_STORE=file

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=sqlite
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=precognition
# DB_USERNAME=root
# DB_PASSWORD=

SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync

CACHE_STORE=file
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

STATAMIC_LICENSE_KEY=
STATAMIC_PRO_ENABLED=false
STATAMIC_STACHE_WATCHER=true
STATAMIC_STATIC_CACHING_STRATEGY=null
STATAMIC_REVISIONS_ENABLED=false
STATAMIC_GRAPHQL_ENABLED=false
STATAMIC_API_ENABLED=false
STATAMIC_GIT_ENABLED=false
```
