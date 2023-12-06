# Manual

## Requirements

1. **Homestead** virtual machine:
  - installed and configured for cli: PHP v. 8.1, Composer, Git
2. **Host** machine:
  - installed and configured for cli: Node(JavaScript runtime environment) v. 18

## Install

1. into **Homestead** virtual machine:
  - change directory to `DOCUMENT_ROOT `: `cd /home/vagrant/code/81/home/test/http/laravel/d`
  - create directory:
    ```bash
    mkdir -p ./.local/module/you-package-name
    ```
  - in `composer.json` in `repositories` add:
    ```json
    {
        "type": "path",
        "url": "./.local/module/you-package-name"
    }
    ```
  - change directory: `cd ./.local/module/you-package-name`
  - clone repository:
    ```bash
    git clone git@github.com:la09r/web.fullstack.package.one.ui.vue.inertia.git .
    ```
  - in `code` from all files, in `file names`, in `composer.json` in `repositories` and in `homestead.backend.install.sh` replace:
    - `PackageOne` to `YouPackageName`
    - `package-one` to `you-package-name`
    - `package.one.` to `you.package.name`
    - `la09r/web-fullstack-package-one-ui-vue-inertia` to `you-vendor-name/web-fullstack-you-package-name-ui-vue-inertia`

  - copy **homestead.backend..sh** files to `DOCUMENT_ROOT`
  - update **+x** permission for ***.sh** files,
  - exec `homestead.backend. ... .sh`

  - in `config/app.php` in `providers`:
    ```php
    // add:
    LA09R\PackageOne\App\Providers\RouteServiceProvider::class,
    // YouVendorName\YouPackageName\App\Providers\RouteServiceProvider::class,
    ```
  
  - in `resources/js/packages.js` add:
    ```js
    packageone: {
        store: {
            state: {
                Page: {
                    PackageOneIndex: {
                        
                    },
                },
                Component: {
    
                }
            },
            mutations: {
                
            }
        },
        name: "PackageOne",
        pages: {
            match: ['PackageOne/Edit', 'PackageOne/Index', 'PackageOne/List', 'PackageOne/Settings'],
            resolve: function () {
                return {
                    path: `../../.local/module/package-one/src/resources/js/Pages/%PAGE_NAME%.vue`,
                    pathImport: import.meta.glob(`../../.local/module/package-one/src/resources/js/Pages/**/*.vue`),
                }
            }
        },
        Components: {

        },
        ComponentsAsync: {
            'Dashboard/Widget': {
                basePath: 'resources/js/ComponentsAsync/Dashboard/Widget',
                data: [
                    { path: 'PackageOneInfo' },
                ]
            }
        }
    },
    ```
  - in `resources/js/packages.js` replace:
    - `PackageOne` to `YouPackageName`, 
    - `package-one` to `you-package-name`
    - `packageone` to `youpackagename`