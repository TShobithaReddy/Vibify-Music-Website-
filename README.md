# Vibify-Music-Website-
# Vibify: A Music Website

A music website for browsing Indian songs by language, artist and genre. You log in, land on a main page with a photo slideshow, pick a category, and play songs from an audio player that sits at the bottom of the page.

I built it with two teammates as a B.Tech IT mini project (2023-24, Sree Vidyanikethan Engineering College, guided by Mr. P. Yogendra Prasad). I worked on the front end: the user interface and part of the user experience.

## What this project is about

Music is something most of us use every day, but finding songs by the language you grew up with or the artist you like can take a lot of scrolling and searching. Vibify is a small, simple place to do that: pick a language, an artist or a mood (genre), and see the songs.

The project is mostly a front-end project. The pages are plain HTML, CSS and JavaScript, so anyone can open them in a browser without installing anything. A small PHP and MySQL backend for sign-up and login is included as well.

## What it can do

- Show a login and sign-up page, with a card that flips between the two forms
- Open a main page with an auto-changing image slideshow
- Let you browse by **Language**, **New Releases**, **Artists** and **Genres**
- Play a song from a player bar that appears at the bottom when you click a card or a song row
- Show a songs list page with the track, artist, album and duration (the Romantic list is included)
- Show an About page with the story of the site (screenshot only)

## How it works

![Flow chart](docs/flowchart.png)

**When someone visits the site:**
1. They land on the login page. A new user signs up, and an existing user logs in.
2. The main page opens with the slideshow and the four sections.
3. They click a language, artist or genre card to open a songs list.
4. They click a song, and the player bar appears at the bottom. They can keep browsing while it plays.
5. They can go back to the main page and pick something else.

**Behind the scenes:**
- The slideshow is a small JavaScript function that hides all the images, shows the next one, and calls itself again every 2 seconds.
- The player works by hiding every player bar and showing only the one linked to the song that was clicked.
- The audio itself is the browser's built-in `<audio>` player.

## Tech used

| Part | What I used | What it does here |
|---|---|---|
| Pages | HTML5 | Structure of every page |
| Styling | CSS3 | Layout with flexbox, gradients, animations, card design |
| Navbar | Bootstrap 4 (from a CDN) | The top menu |
| Interactivity | JavaScript | Slideshow, player bar, login and sign-up card animation |
| Audio | HTML `<audio>` | Plays the songs |
| Backend | PHP and MySQL | Sign-up and login (in the `backend` folder) |

## The pages

| Page | File | What it shows |
|---|---|---|
| Login and sign-up | `frontend/login.html` | Two forms on flipping cards |
| Main page | `frontend/main.html` | Slideshow, languages, new releases, artists, genres |
| Songs list | `frontend/romanticsongs.html` | A table of songs with a player bar |

## What gets stored

The backend saves each sign-up as one row in a `users` table:

| Field | Meaning |
|---|---|
| `id` | Unique number for the user |
| `name` | Username (must be unique) |
| `email` | Email (must be unique) |
| `password_hash` | A hash of the password, never the password itself |
| `created_at` | When the user signed up |

The songs themselves are not stored in a database. They are written directly into the HTML pages.

## Project structure

```
frontend/login.html           login and sign-up page
frontend/main.html            main page
frontend/romanticsongs.html   songs list page with the player
frontend/ASSETS.md            list of the image and audio files the pages expect
backend/register.php          saves a new user
backend/login.php             checks a user's login
backend/db.php                database connection
backend/database.sql          creates the users table
docs/                         screenshots and the flow chart
```

## Run it yourself

1. Download or clone this repo.
2. Open `frontend/login.html` in your browser (or use the VS Code Live Server extension).
3. Click Login or Sign Up to open the main page.

The images and songs are **not in this repo** because they belong to their owners, so the cover pictures and audio will be blank. `frontend/ASSETS.md` lists the file names, so you can add your own images and audio to see everything working.

To try the backend, you need PHP and MySQL (for example through XAMPP). Run `backend/database.sql` once to create the table.

## Things I was careful about

- **A consistent look:** every page uses the same pink and purple theme, so the site feels like one product.
- **Easy navigation:** the top menu jumps straight to New Releases, Artists, Language and Genres, and the player stays at the bottom so you can keep browsing while a song plays.
- **Safe passwords in the backend:** passwords are hashed and database queries use prepared statements.
- **No copyrighted media in the repo:** the songs, album covers and artist photos are left out, and `.gitignore` blocks audio files.

## Limitations

This is a student project, so it has gaps I know about:

- **The login and sign-up forms are not connected to the database in this version.** The buttons simply open the main page. The PHP files are in `backend/`, but the forms need `name` attributes and an `action` pointing to them before the two work together.
- **The PHP files are untested.** I have not run them against a live MySQL database yet. The versions here are corrected from our original report, which saved plain-text passwords and built SQL queries from raw user input.
- **The search box is only a design for now.** It does not search yet.
- **Songs are written directly into the HTML.** There are no playlists and no song database.
- **Only some pages are included:** the login page, the main page and the Romantic songs page. The main page links to other pages that are not in this repo.
- **Not fully responsive.** It was designed mainly for a desktop screen.

## Ideas to improve it

- Connect the login and sign-up forms to the PHP backend
- Make the search box work
- Store songs in a database instead of the HTML
- Add playlists and favourites for logged-in users
- Make the layout work properly on phones
- Add the remaining language, artist and genre pages

## What I learned

- How to lay out a page with flexbox and build a card-flip animation with CSS
- How to use JavaScript to show and hide elements, like the slideshow and the player bar
- How small design choices, like a fixed player bar and a clear menu, change how easy a site is to use
- Why passwords must be hashed and why SQL queries should use prepared statements
- How to keep copyrighted media out of a public repo

## Screenshots

| Landing page | Main page |
|---|---|
| ![Landing page](docs/screenshots/01-landing-page.png) | ![Main page](docs/screenshots/02-main-page-top.png) |

| Languages and new releases | New releases and artists |
|---|---|
| ![Languages](docs/screenshots/03-languages-and-new-releases.png) | ![Artists](docs/screenshots/04-new-releases-and-artists.png) |

| Artists and genres | About page |
|---|---|
| ![Genres](docs/screenshots/05-artists-and-genres.png) | ![About](docs/screenshots/10-about-us.png) |

| Login | Sign up |
|---|---|
| ![Login](docs/screenshots/06-login.png) | ![Sign up](docs/screenshots/07-sign-up.png) |

| Telugu songs list | Artist songs list |
|---|---|
| ![Telugu](docs/screenshots/08-telugu-songs-list.png) | ![Artist](docs/screenshots/09-artist-songs-list.png) |

## Team

Built by a team of three: Paluri Madhulika, Srinivasan Thanmaya and Thota Shobitha Reddy.

**My part:** I worked on the front end. I developed the user interface and handled part of the user experience: laying out the pages, styling them with CSS, and making them easy to move around in. The backend and database were not my focus.
