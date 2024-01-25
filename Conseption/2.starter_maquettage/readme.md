## Starter Maquettage

### Création d’un projet Laravel
```bash
composer create-project laravel/laravel .
```

### Installer adminLTE en utilisant npm
1. Installing prerequisites
- Node.js
- NPM
- PHP 7.2.5 ou supérieur
- Un serveur web (Apache, Nginx, etc.)
2. Installing AdminLTE
```bash
npm install admin-lte@^3.2 
```
3. Importing AdminLTE CSS and JavaScript
- In `resources/css/app.css`, import the CSS from AdminLTE and Font Awesome:\
```bash
@import 'admin-lte/plugins/fontawesome-free/css/all.min.css';
@import 'admin-lte/dist/css/adminlte.min.css';
```
- `In resources/js/app.js`, import the AdminLTE JavaScript:
```bash
import 'admin-lte/dist/js/adminlte';
```
4. Install dependencies and build assets
```bash
npm install
npm run dev
```
5. Configuring Laravel to use Vite Open your Laravel layout file (for example, resources/views/layouts/app.blade.php) and include the Vite assets:

```bash
@vite(['resources/css/app.css', 'resources/js/app.js'])
```

### Installer FontAwesome Icons en utilisant npm
1.  Installing FontAwesome Icons
```bash
npm install @fortawesome/fontawesome-free
```
2. Importing fortawesome CSS `resources/css/app.css`
```bash
@import "@fortawesome/fontawesome-free/css/all.css";
```
