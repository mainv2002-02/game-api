### RUN COMMAND: sh deploy.sh {git_branch} {env} ###
  ### Example: sh deploy.sh main production ###


# Pull the latest changes from the git repository
echo "\n----------"
echo "Pull the latest changes from the git repository"
echo "GIT branch: $1"
git reset --hard

git checkout $1

git pull

# Install/update composer dependencies
echo "\n----------"
echo "Install/update composer dependencies"
rm -rf composer.lock
composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

composer dump-autoload

# Run database migrations
php artisan migrate --force

# Run database seeder
#php artisan db:seed --force

# Clear caches
echo "\n----------"
echo "Clear caches"
php artisan cache:clear