<h1 align="center">
  <a href="https://songcl.banttechenergies.com" target="_blank"><strong>🎵 SONG CI</strong></a>
</h1>

## About SongCI

"SongCi" is a website that allows users to discover, create, and share their favorite songs. The site features a user-friendly interface that allows users to easily search for songs and add them to their personal playlists. Users can also view the lyrics of songs and learn more about the authors of the songs. The site also offers an admin panel where authorized users can create, edit and delete songs as well as managing other aspects of the website. With SongCi, users can access a wide variety of songs and discover new music from a variety of artists, create their own playlists and engage with other music lovers. It's a one-stop platform for all music enthusiasts to explore and enjoy their favorite songs.

## Steps of Installation

-   Make sure you have installed PHP and a web server (such as Apache or Nginx) on your machine. You also need to have installed composer, which is a dependency manager for PHP.
-   After you have cloned the project from GitHub, navigate to the project's root directory in your terminal.
-   Run the command composer install to install all the dependencies required by the project.
-   Create a new file named .env in the project's root directory, and copy the contents of the .env.example file into it. You need to set the correct values for the database and other settings in this file.
-   Run the command php artisan key:generate to generate an encryption key for your application.
-   Download and import database, the database file is located in the DB folder.
-   Run the command php artisan serve to start the built-in web server and access the application in your web browser at http://localhost:8000.

### Testing Accounts

-   **Admin**
    -   Email: admin@admin.com
    -   Password: 11223344
-   **User**
    -   Email: user@user.com
    -   Password: 11223344
