function displayMovies(movies) {
  const container = document.querySelector('.container');
  container.innerHTML = '';

  movies.forEach(movie => {
    const movieCard = document.createElement('div');
    movieCard.classList.add('movie-card');

    const movieTitle = document.createElement('h2');
    movieTitle.textContent = movie.title;

    const movieOverview = document.createElement('p');
    movieOverview.textContent = movie.overview;

    const movieReleaseDate = document.createElement('p');
    movieReleaseDate.textContent = movie.release_date;

    movieCard.appendChild(movieTitle);
    movieCard.appendChild(movieOverview);
    movieCard.appendChild(movieReleaseDate);

    container.appendChild(movieCard);
  });
}
fetch('movies.php')
  .then(response => response.json())
  .then(data => displayMovies(data.results));
