# GEMS CDC — gemscdc.in

> GEMS Child Development Centre website built with Laravel 12, Vite, and Tailwind CSS v4.

## Local Development

```bash
# First-time setup
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate

# Start the dev server (Laravel + Vite + Queue)
composer dev
```

The site will be available at `http://127.0.0.1:8000`.

---

## 🚀 Production Deployment (Hostinger)

> **⚠️ IMPORTANT:** On Hostinger, the project is split into two directories:
> - `laravel/` — The Laravel application (Git repo lives here)
> - `public_html/` — The web-facing directory (what browsers see)
>
> **`public_html/` does NOT auto-update when you `git pull`.** You must manually sync static files after every deployment.

### Step-by-Step Deployment

**1. SSH into the server and navigate to the project:**
```bash
cd domains/gemscdc.in/laravel
```

**2. Pull the latest code:**
```bash
git pull
```

**3. Install PHP dependencies (if composer.json changed):**
```bash
composer install --no-dev --optimize-autoloader
```

**4. Run migrations (if database changed):**
```bash
php artisan migrate --force
```

**5. Build frontend assets locally (npm is NOT available on Hostinger):**

On your **local machine**, run:
```bash
npm run build
```

Then upload the contents of `public/build/` to **both** of these locations on the server:
- `domains/gemscdc.in/laravel/public/build/` (where Laravel reads the manifest)
- `domains/gemscdc.in/public_html/build/` (where browsers download the files)

Or upload to one and copy on the server:
```bash
cp -r public/build/* ../public_html/build/
```

**6. Sync static files to `public_html/`:**
```bash
cp -r public/images/* ../public_html/images/
cp -r public/videos/* ../public_html/videos/
cp -r public/build/* ../public_html/build/
```

**7. Clear all caches:**
```bash
php artisan optimize:clear
```

**8. Purge Hostinger cache:**
Go to **hPanel → Advanced → Cache Manager → Purge All**.

### Storage Link

The storage symlink (`public_html/storage → ../laravel/storage/app/public`) is already configured. If it ever breaks, note that `php artisan storage:link` does **not** work on Hostinger (exec() is disabled). You must create it manually:

```bash
ln -s ../laravel/storage/app/public ../public_html/storage
```

---

## Quick Deployment Checklist

```
☐ git pull
☐ composer install --no-dev (if needed)
☐ php artisan migrate --force (if needed)
☐ npm run build (on local machine)
☐ Upload build/ to server
☐ cp -r public/images/* ../public_html/images/
☐ cp -r public/videos/* ../public_html/videos/
☐ cp -r public/build/* ../public_html/build/
☐ php artisan optimize:clear
☐ Purge Hostinger Cache (hPanel)
```
