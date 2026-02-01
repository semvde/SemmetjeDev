# :open_file_folder: SemmetjeDev
My personal portfolio website, made with Laravel!

:globe_with_meridians: Check out the live version: https://semmetje.dev

<details>
    <summary>Table of Contents</summary>
    <ol>
        <li><a href="#information_source-about-this-project">About this project</a></li>
        <li><a href="#sparkles-functionality">Functionality</a></li>
        <li>
            <a href="#rocket-getting-started">Getting started</a>
            <ol>
                <li><a href="#requirements">Requirements</a></li>
                <li><a href="#installation">Installation</a></li>
            </ol>
        </li>
        <li>
            <a href="#hammer_and_wrench-how-does-it-work">How does it work?</a>
            <ol>
                <li><a href="#technologies">Technologies</a></li>
                <li><a href="#entity-relationship-diagram">Entity Relationship Diagram</a></li>
                <li><a href="#usage">Usage</a></li>
            </ol>
        </li>
        <li><a href="#scroll-license">License</a></li>
    </ol>
</details>

[![semvde](https://img.shields.io/badge/-semvde-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/semvde)



## :information_source: About this project
SemmetjeDev (or semmetje.dev) is my personal portfolio website that contains information about who I am, some projects I worked on, a blog, and contact information!

This project was created because I needed a way for people to get to know me, see my development skills and provide clear ways to contact me. I wanted to create the portfolio in Laravel, as I have become quite comfortable using the framework and it would allow me to easily implement the projects and blog management features I wanted.



## :sparkles: Functionality
W.I.P.



## :rocket: Getting started
Below are the instructions on how to get the project running on your local machine!

### Requirements
- PHP 8.2+
- Composer
- Node.js & NPM
- SQLite
- (If on Windows) Laravel Herd

### Installation
1. Clone the repository
```sh
git clone https://github.com/semvde/SemmetjeDev.git semmetjedev
cd semmetjedev
```
2. Setup dependencies, environment, database and front-end assets
```sh
composer run setup
```
3. Setup local test server
```sh
npm run dev
```
- If you're using Windows:
    - Make sure the project is in the Laravel Herd sites directory and SSL is enabled for it
    - View the web-app by going to https://semmetjedev.test
- If you're not on Windows:
    - ```sh
      php artisan serve
      ```
    - View the web-app by going to http://localhost:8000



## :hammer_and_wrench: How does it work?
Below you can find the documentation of SemmetjeDev!

### Technologies
SemmetjeDev uses the following technologies:
- [![Laravel][Laravel.com]][Laravel-url]
    - [![Blade][Blade.com]][Blade-url]
    - [![Laravel Breeze][Breeze.com]][Breeze-url]
- [![Tailwind CSS][TailwindCSS.com]][TailwindCSS-url]
- [![JavaScript][JavaScript.com]][JavaScript-url]

### Entity Relationship Diagram
W.I.P.

### Usage
W.I.P.



## :scroll: License
The source code in this repository is licensed under the MIT License.

However, all non-code assets (such as images, logos, and other media) are **not** covered by the MIT License. Unless otherwise stated, these assets may not be reused, redistributed, or modified without explicit permission from Semmetje.



[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[TailwindCSS.com]: https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[TailwindCSS-url]: https://tailwindcss.com
[JavaScript.com]: https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black
[JavaScript-url]: https://developer.mozilla.org/en-US/docs/Web/JavaScript
[Blade.com]: https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Blade-url]: https://laravel.com/docs/blade
[Breeze.com]: https://img.shields.io/badge/Breeze-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Breeze-url]: https://laravel.com/docs/11.x/starter-kits#laravel-breeze
