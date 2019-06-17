SELECT IFNULL(film.id_genre, NULL) AS id_genre,
CASE
	    WHEN ISNULL(film.id_genre) = 1 THEN film.id_genre
			    WHEN ISNULL(film.id_genre) = 0 THEN genre.name
END AS name_genre, IFNULL(film.id_distrib, NULL) AS id_distrib,
CASE
	    WHEN ISNULL(film.id_distrib) = 1 THEN film.id_distrib
			    WHEN ISNULL(film.id_distrib) = 0 THEN distrib.name
END AS name_distrib, film.title AS title_film
FROM film
INNER JOIN genre ON genre.id_genre = film.id_genre
INNER JOIN distrib ON distrib.id_distrib = film.id_distrib OR film.id_distrib IS NULL
WHERE genre.id_genre BETWEEN 4 AND 8;
